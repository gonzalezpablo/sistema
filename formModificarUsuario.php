<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuario = verUsuarioPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una marca</h1>

        <div class="alert alert-secondary p-4 col-8 mx-auto">
            <form action="modificarUsuario.php" method="post">
                Nombre de la marca: <br>
                <input type="text" name="usuNombre" value="<?=$usuario['usuNombre']?>" class="form-control" required>
                <br>
                <input type="text" name="usuApellido" value="<?=$usuario['usuApellido']?>" class="form-control" required>
                <br>
                <input type="text" name="usuEmail" value="<?= $usuario['usuEmail'] ?>" class="form-control" required>
                <br>
                <input type="text" name="usuPass" value="<?= $usuario['usuPass'] ?>" class="form-control" required>
                <br>
                <input type="hdden" name="idUsuario" value="<?=$usuario['idUsuario']?>">
                
                <button class="btn btn-dark mr-3 px-4">Modificar</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>