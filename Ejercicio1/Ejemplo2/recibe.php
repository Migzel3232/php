<?php 
/*
print_r($_POST);

IF (!$_POST){
    header('location: https://localhost/Ejemplo2');
}

$nombre=$_POST['nombre'];
$sexo=$_POST['sexo'];
$year=$_POST['year'];
$terminos=$_POST['terminos'];

echo 'hola, ' .$nombre. ' eres ' . $sexo;
*/

    
IF (!$_GET){
    header('location: https://localhost/Ejercicio1/Ejemplo2/');
}


$nombre=$_GET['nombre'];
$sexo=$_GET['sexo'];
$year=$_GET['year'];
$terminos=$_GET['terminos'];


if($nombre){
    echo $nombre. '<br />';
}
else{
    echo "El usuario no establecio su nombre <br>";
}

echo $sexo . '<br />';
echo $year . '<br />';
echo $terminos . '<br />';