<?php

session_start();
if($_SESSION){
    echo 'HOLA administrador <a href="salir.php">Cerrar sesion</a>';
}else{
    echo '<a href="Formulario.php">Volver a iniciar sesion</a>';
}


?>

