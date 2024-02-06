<?php 
$errores='';

if ( isset($_POST['submit'])){
    $nombre=$_POST['nombre']
    $correo=$_POST['correo']

    if (!empty($nombre)){
        $nombre= filter_var($nombre,FILTER_SANITIZE_STRING);
        echo 'Tu nombre es:' .$nombre. '<br>';
    }else{
        $errores.='porfavor ingresa un nombre <br/>';
    }
    if (!empty($correo)){
        $correo=filter_var($correo,FILTER_SANITIZE_EMAIL);
        
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            %errores.='porfavor ingresa un correo valido <br />';
        }else{
            echo 'Tu correo es: ' . $correo;
        }else{
            $errores .='Por favor ingresa un correo <br />';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {color:red;}
    </style>
</head>
<body>

<form action="<?php echo htmlspecialchars($_server['PHP_SELF']); ?>" method="post">
<input type="text" name="nombre" placeholder="Nombre">
<input type="text" name="correo" placeholder="Correo">

<?php if (!empty($errores)): ?>
    <div class="error"> <?php echo $errores; ?> </div>
<?php endif; ?>


<input type="submit" name="submit">
</form>
    
</body>
</html>