<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = eliminarUsuario();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una marca</h1>
<?php
    $class = 'danger';
    $mensaje = 'No se puedo modificar la marca enviada';
    if( $chequeo ){
        $class = 'success';
        $mensaje = 'Marca modificada correctamente<br>';
        $volver = '<a href="adminUsuarios.php">Volver al panel de Administracion de Usuarios</a href>';
    }
?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje. $volver?>
    </div>

    </main>

<?php  include 'includes/footer.php';  ?>