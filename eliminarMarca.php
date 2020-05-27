<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = eliminarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Registro borrado con exito</h1>
<?php
    $class = 'danger';
    $mensaje = 'No se puedo modificar eliminar';
    if( $chequeo ){
        $class = 'success';
        $mensaje = 'Marca modificada correctamente <br>';
        $volver = '<a href="adminCategorias.php"> volver al panel de administracion de categorias</a href>';
    }
?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje.$volver ?>
    </div>

    </main>

<?php  include 'includes/footer.php';  ?>