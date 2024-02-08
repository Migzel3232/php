<?php 
session_start();

if($_SESSION){
    session_destroy();
    echo '<h2> sesion cerrada <h2/>';
}else{
    echo'No has iniciado sesion';
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
    
</body>
</html>