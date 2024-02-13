
<?php
include("Conexion.php");

	session_start();

	if(isset($_SESSION['Users'])){
		header('Location:admin.php');
	}

	if(!empty($_POST)){
		$Usuarios=mysqli_real_escape_string($conexion, $_POST['uname']);
		$Contraseñas=mysqli_real_escape_string($conexion, $_POST['pswd']);
		$sqls="SELECT Users FROM usuarios WHERE Usuarios='$Usuarios' AND Contraseñas = '$Contraseñas'";
		$resultados=$conexion->query($sqls);
		$rows=$resultados->num_rows;
		if($rows>0){
            echo "hola ";
			$rows=$resultados->fetch_assoc(); 
			$_SESSION['Users']=$rows['Users'];
			header("location:Form 1.php");
		}else{
			echo "<script>
						alert('Usuario o Contraseña incorrecta');
						window.location.index.php;
					</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>

       
        /* Agrega estilos personalizados aquí */
        .container {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
            max-width: 80%; /* Ancho máximo del contenedor ajustado al 80% de la pantalla */
            margin-left: auto;
            margin-right: auto;
            display: flex; /* Utiliza display flex para crear un contenedor flexible */
        }

        .image-container {
            flex: 1; /* Hace que la imagen ocupe el 50% del espacio disponible */
            margin-right: 20px; /* Espaciado entre la imagen y el formulario */
        }

        .image-container img {
            width: 100%; /* La imagen ocupa el 100% del contenedor */
            height: auto;
        }

        .form-container {
            flex: 1; /* Hace que el formulario ocupe el 50% del espacio disponible */
        }
       
    </style>

</head>
<body>


<div class="container" >
    <div class="image-container">

        <img src="./imagenes/Imagen form.jfif" alt="Tu imagen" class="img-fluid">
    </div>

    <form  action="/action_page.php" class="was-validated form-container" >
        <div class="mb-3 mt-3">
            <label for="uname" class="form-label">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="mb-3 mt-3">
            <label for="uname" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
            <label class="form-check-label" for="myCheck">I agree on blabla.</label>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
