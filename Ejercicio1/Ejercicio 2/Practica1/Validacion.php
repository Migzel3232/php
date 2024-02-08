
<?php
session_start();

$key= $_SESSION['Pass'];

if ($_POST['PASSWORD']==$key) {
    header('Location:inicio.php');
}else{
    header('Location:index.php');
}
    

?>