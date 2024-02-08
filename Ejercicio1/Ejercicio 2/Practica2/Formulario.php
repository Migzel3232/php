<?php


session_start();


$_SESSION['Admin']=24680;
$_SESSION['Cliente']=1234;
$_SESSION['Trabajador']=666;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <form action="Principal.php" class="border border-4 border rounded-4 form-control-sm" method="post">

        <div class="mb-3 mt-3">
             <label for="lang" class="form-label">Lenguaje</label>
             <select name="Select1" class="form-select" aria-label="Default select example">
                 <option selected>Open this select menu</option>
                 <option value="1">Administrador</option>
                 <option value="2">Cliente</option>
                 <option value="3">Trabajador</option>
             </select>
        </div>

        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input name="PASSWORD" type="password" class="form-control" id="pwd" placeholder="Enter password">
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
          </label>
       </div>
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>