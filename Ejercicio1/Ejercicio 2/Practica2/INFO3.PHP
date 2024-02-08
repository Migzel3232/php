<?php
session_start();
if($_SESSION){
    echo 'HOLA Trabajador <a href="salir.php">Cerrar sesion</a>';
}else{
    echo '<a href="Formulario.php">Cerrar sesion</a>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="salir.php">Cerrar sesion</a>
</body>
</html>