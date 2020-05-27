<?php
$link = mysqli_connect('localhost',
                        'root',
                        '',
                        'catalogo');
$consulta = "SELECT prdNombre, prdPrecio, prdPresentacion, prdImagen FROM productos";

$resultado = mysqli_query($link, $consulta);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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
    
</body>
</html>