<?php

session_start();
$CAdmin=$_SESSION['Admin'];
$CCliente=$_SESSION['Cliente'];
$CTrabajador=$_SESSION['Trabajador'];

if ($_POST['Select1']=='1' && $_POST['PASSWORD']== $CAdmin){
    header('Location:INFO.php');
} else if ($_POST['Select1']=='2' && $_POST['PASSWORD']== $CCliente){
    header('Location:INFO2.php');
} else if($_POST['Select1']=='3' && $_POST['PASSWORD']== $CTrabajador){
    header('Location:INFO3.php');
}else{
    echo 'Clave erronea o clave y usuario no coinciden';
}

?>

