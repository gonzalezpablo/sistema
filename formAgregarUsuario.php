<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>


<main class="container">
        <h1>Alta de una nueva marca</h1>


        <div class="alert alert-secondary p-4 col-8 border border-secondary mx-auto">
        <form action="agregarUsuario.php"  method="post">
        Nombre <br>
        <input type="text" name="usuNombre" class="form-control">
        <br>
        Apellido <br>
        <input type="text" name="usuApellido" class="form-control">
        <br>
        Correo <br>
        <input type="text" name="usuEmail" class="form-control">
        <br>
        Clave <br>
        <input type="text" name="usuPass" class="form-control">
        <br>
        <button class="btn btn-dark">Agregar</button>
        <a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver a panel</a>
        </form>
        
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>