<?php

session_start();

if($_SESSION){
    session_destroy();
    echo '<h2> sesion cerrada <h2/>';
   
}else{
    echo'No has iniciado sesion';
}


?>