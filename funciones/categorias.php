<?php

function listarCategorias()
{
        $link = conectar();
        $sql = 'SELECT idCategoria, catNombre FROM categorias';
        $resultado = mysqli_query($link, $sql);     
        return $resultado;         
}

function agregarCategoria()
{
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "INSERT INTO categorias ( catNombre )
                VALUES ('".$catNombre."')";
                
        $resultado = mysqli_query($link, $sql);
        return $resultado;
        
}

function verCategoriaPorID()
{
      $idCategoria = $_GET['idCategoria'];
      $link = conectar();
      $sql= "SELECT idCategoria, catNombre FROM categorias
                WHERE idCategoria = ".$idCategoria;
      $resultado = mysqli_query($link, $sql);
      $categoria = mysqli_fetch_assoc($resultado);

      return $categoria;
}

function modificarCategoria()
{
        $idCategoria = $_POST['idCategoria'];
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "UPDATE categorias SET catNombre = '".$catNombre."' WHERE idCategoria = ".$idCategoria;

        $resultado = mysqli_query($link, $sql);
        return $resultado;

}


function eliminarCategoria()
{
        $idCategoria = $_GET['idCategoria'];
        $link = conectar();
        $sql = "DELETE FROM categorias WHERE idCategoria=".$idCategoria;
        $resultado = mysqli_query($link, $sql);
        return $resultado;
}
?>