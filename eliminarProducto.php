<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = eliminarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Registro borrado con exito</h1>
<?php
    $class = 'danger';
    $mensaje = 'no se pudo borrar el registro';
    if( $chequeo ){
        $class = 'success';
        $mensaje = 'Marca modificada correctamente <br>';
        $volver = '<a href="adminProductos.php"> volver al panel de administracion de categorias</a href>';
    }
?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje.$volver ?>
    </div>

    </main>

<?php  include 'includes/footer.php';  ?>