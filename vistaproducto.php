<?php
    require 'config/config.php';
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

<?php

$link = mysqli_connect('localhost',
                        'root',
                        '',
                        'catalogo');
$consulta = "SELECT prdNombre, prdPrecio, prdPresentacion, prdImagen FROM productos";

$resultado = mysqli_query($link, $consulta);

?>



<main class="container">


<h1> Tienda</h1>

<div class="row">

<?php
$todo = mysqli_fetch_assoc($resultado);
         while( $todo = mysqli_fetch_assoc($resultado)){           
?>

<div class="card col-3 p-1 mb-2 offset-1">
<img src="productos/<?=$todo['prdImagen']?>" alt="cad-img-top">
     <div class="d-inline p-2 bg-dark text-white">
        <?= $todo['prdNombre'];?> 
        </div>
        <div><?= $todo['prdPresentacion'];?>
        </div>
        <div class="text-success">$<?= $todo['prdPrecio'];?>
        </div>
 </div>

<?php
	$todo++;
}
?>


</div>
</main>

<?php  include 'includes/footer.php';  ?>