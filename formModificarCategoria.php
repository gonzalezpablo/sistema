<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $categoria = verCategoriaPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una Categoria</h1>

        <div class="alert alert-secondary p-4 col-8 mx-auto">
            <form action="modificarCategoria.php" method="post">
                Nombre de la Categoria:
                 <br>
                 
                <input type="text" name="catNombre" value="<?=$categoria['catNombre'] ?>" class="form-control" required>
                <br>
                <input type="hidden" name="idCategoria" value="<?=$categoria['idCategoria'] ?>">
                <button class="btn btn-dark mr-3 px-4">Modificar</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>