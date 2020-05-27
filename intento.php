<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
    

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

   
<main class="container">
        
            <?php
        while( $producto = mysqli_fetch_assoc($productos)){

        
?>
                
               
                <img src="productos/<?=$producto['prdImagen']?>.">
                 
 <?php
 
          
    }
?>
           
    </main>

<?php  include 'includes/footer.php';  ?>