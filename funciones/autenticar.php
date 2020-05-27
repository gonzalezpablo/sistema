<?php

function login()
{
    $usuEmail = $_POST['usuEmail'];
    $usuPass = $_POST['usuPass'];
    $link = conectar();
    $sql = "SELECT usuNombre, usuApellido
                FROM usuarios
                WHERE usuEmail = '".$usuEmail."'
                AND usuPass = '".$usuPass."'";
                $resultado = mysqli_query($link, $sql) or die (mysqli_error($link));
                $cantidad = mysqli_num_rows( $resultado);
                
                if($cantidad == 0 )
                {
                    //se logeo mal redireccion a formLogin
                    header('location: formLogin.php?error=1');
                }
            else{
                //rutina de autenticacionm
                //redireccion a admin
               $_SESSION['login'] = 1;
               $datosUsiario = mysqli_fetch_assoc($resultado);
               $_SESSION['usuNombre'] = $datosUsiario['usuNombre'];
               $_SESSION['usuApellido'] = $datosUsiario['usuApellido'];


                header('location: admin.php');
            }
                            
}

function logout()
{
    session_unset(); //elimina toda variable de session;
    session_destroy();
    //redireccion con delay;
    header('refresh:3;url=login.php');
}

function autenticar()
{  
     if (!isset($_SESSION['login'])){
         header('location: formLogin.php?error=2');

    }
    
}
?>