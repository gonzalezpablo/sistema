<?php
require 'config/config.php';
require 'funciones/conexion.php';
require 'funciones/categorias.php';

include 'includes/header.html';  
	include 'includes/nav.php';  
?>


<main class="container">
        <h1>Alta de una nueva categoria</h1>


        <div class="alert alert-secondary p-4 col-8 border border-secondary mx-auto">
        <form action="agregarCategoria.php"  method="post">
        Nombre de la categoria <br>
        <input type="text" name="catNombre" class="form-control">
        <br>
        <button class="btn btn-dark">Agregar</button>
        <a href="adminCategorias.php" class="btn btn-outline-secondary">Volver a panel</a>
        </form>
        
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>