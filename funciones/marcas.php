<?php

function listarMarcas()
{
        $link = conectar(); //generar una variable con la conexion a la bbdd
       
        $sql = 'SELECT idMarca, mkNombre FROM marcas'; //la query contiene la informacion a traer de la bbdd
        $resultado = mysqli_query($link, $sql);     
        return $resultado;         
}

function agregarMarca()
{
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas              
                        ( mkNombre )
                VALUE
                        ('".$mkNombre."')"; //una variable no tiene que estar entre comillas //esta es una llamada para insertar un archivo o dato a la bbdd

        $resultado = mysqli_query($link, $sql);
        return $resultado;
}

function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas
                    WHERE idMarca = ".$idMarca;

        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }



function modificarMarca(){
        $idMarca = $_POST['idMarca'];
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "UPDATE marcas
                SET mkNombre = '".$mkNombre."'
                WHERE idMarca = ".$idMarca;
        
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
         
}


function eliminarMarca()
{
        $idMarca = $_GET['idMarca'];

        $link = conectar();
        $sql = "DELETE FROM marcas WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql);
        return $resultado;

}
?>