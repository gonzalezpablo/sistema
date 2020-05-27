<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $agregarCategoria = agregarCategoria(); 

	include 'includes/header.html';  
    include 'includes/nav.php';  
    
?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>

        <?php
    $class = 'danger';
    $mensaje = 'No se pudo agregar la marca ingresada';
        if($agregarCategoria){
            $class = 'success';
            $mensaje = 'Marca agregada correctamente';
        }
            ?>

            <div class="alert alert-success-<?=$class?>">
            <?=$mensaje?>
            </div>

    </main>

<?php  include 'includes/footer.php';  ?>