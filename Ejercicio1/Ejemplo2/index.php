<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recibe.php" name="formulario_contacto" method="get">
        <input type="text" placeholder="Nombre" name="nombre" id="nombre">
        <input type="text" placeholder="edad" name="edad" id="edad">

        <!-- radio button -->
        <label for="hombre">Hombres</label>
        <input type="radio" name="sexo" id="hombre" value="hombre">
        <br>

        <!-- radio button -->
        <label for="mujer">Mujeres</label>
        <input type="radio" name="sexo" id="mujer" value="mujer">
        <br>

        <!-- combox -->
        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2000">2001</option>
            <option value="2000">2002</option>
        </select>

        <label for="terminos">terminos y condiciones</label>
        <input type="checkbox" name="terminos" value="ok" id="terminos">
        <br>

        <input type="submit" name="btn-enviar" value="Enviar">


    </form>
</body>
</html>