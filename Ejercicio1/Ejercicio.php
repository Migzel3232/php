<?php

$bolos = array( 

 array( 
 array ('Jugador1' => 280, 'Jugador2' => 150, 'Jugador3'=> 195 ,'Jugador4' => 270,'Jugador5' => 190),
 array ('Jugador1' => 190, 'Jugador2' => 90, 'Jugador3'=> 101 ,'Jugador4' => 112,'Jugador5' => 98),
 array ('Jugador1' => 145, 'Jugador2' => 167, 'Jugador3'=> 189 ,'Jugador4' => 198,'Jugador5' => 80)

 ),


 array( 
 array ('Jugador1' => 101, 'Jugador2' => 198, 'Jugador3'=> 165 ,'Jugador4' => 145,'Jugador5' => 178),
 array ('Jugador1' => 123, 'Jugador2' => 189, 'Jugador3'=>  210,'Jugador4' => 250,'Jugador5' => 202),
 array ('Jugador1' => 110, 'Jugador2' => 90, 'Jugador3'=> 115 ,'Jugador4' => 190,'Jugador5' => 120)

)

);


$resultado=0;

foreach ($bolos[0][0] as $promedio){
    $resultado=$resultado+$promedio;
    
}


$Numeroelementos=count($bolos[0][0]);
$promedio=$resultado/$Numeroelementos;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="css/Ejercicio.css">
    <title>Tu Página</title>




</head>

<body>

<nav class="navbar navbar-expand-sm " id="Navegador">

  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
   
        <nav class="navbar navbar-expand-sm ">
           <div class="container-fluid">
               <a class="navbar-brand" href="#">
                  <img src="Imagenes/pino.jfif" alt="Avatar Logo" style="width:100px;" class="rounded-pill"> 
               </a>
           </div>
        </nav>
        

      <li class="nav-item my-5">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Ganador del dia!</button>
      </li>

      <li class="nav-item my-5">
        <a class="nav-link " href="#">Puntos equipo 3</a>
      </li>

      <li class="nav-item dropdown my-5 letras">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Jugadores</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Jugador mayor puntaje linea 1</a></li>
              <li><a class="dropdown-item" href="#">Jugador mayor puntaje linea 2</a></li>
              <li><a class="dropdown-item" href="#">Jugadores con mas de 200 puntos</a></li>
              <li><a class="dropdown-item" href="#">Jugador entre 100 y 150 puntos</a></li>
          </ul>
      </li>

      <li class="nav-item dropdown my-5 letras">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >Promedios</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal2" >Promedio equipo 1</a></li>
              <li><a class="dropdown-item" href="#">Promedio del Equipo 2 menos el jugador 4</a></li>
              <li><a class="dropdown-item" href="#">Promedio mundil del jugador 2 </a></li>
          </ul>
      </li>

      <li class="nav-item dropdown my-5 letras">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Equipos</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Equipo ganador</a></li>
              <li><a class="dropdown-item" href="#">Equipo con menos puntos segunda linea</a></li>
              <li><a class="dropdown-item" href="#">Equipo con mas puntos primera linea </a></li>
          </ul>
      </li>

      <li class="nav-item my-5">
        <a class="nav-link " href="#">Ordenar</a>
      </li>

    </ul>
  </div>
</nav>





<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">



  <br/>
  <h2>Grupo 1</h2>
  <br/>

  <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Jugador 1</th>
      <th scope="col">Jugador 2</th>
      <th scope="col">Jugador 3</th>
      <th scope="col">Jugador 4</th>
      <th scope="col">Jugador 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Equipo 1</th>
      <td>280</td>
      <td>150</td>
      <td>195</td>
      <td>270</td>
      <td>190</td>
    </tr>
    <tr>
      <th scope="row">Equipo 2</th>
      <td>190</td>
      <td>90</td>
      <td>101</td>
      <td>112</td>
      <td>98</td>
    </tr>
    <tr>
      <th scope="row">Equipo 3</th>
      <td>145</td>
      <td>167</td>
      <td>189</td>
      <td>198</td>
      <td>80</td>
    </tr>
  </tbody>
</table>



<h2>Grupo 2 </h2>
  <br/>
  <table class="table table-bordered table-striped Tabla2">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Jugador 1</th>
      <th scope="col">Jugador 2</th>
      <th scope="col">Jugador 3</th>
      <th scope="col">Jugador 4</th>
      <th scope="col">Jugador 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Equipo 1</th>
      <td>101</td>
      <td>198</td>
      <td>165</td>
      <td>145</td>
      <td>178</td>
    </tr>
    <tr>
      <th scope="row">Equipo 2</th>
      <td>123</td>
      <td>189</td>
      <td>210</td>
      <td>250</td>
      <td>202</td>
    </tr>
    <tr>
      <th scope="row">Equipo 3</th>
      <td>110</td>
      <td>90</td>
      <td>115</td>
      <td>190</td>
      <td>120</td>
    </tr>
  </tbody>
</table>

          </div>
     </div>
</div>



<!-- Modales -->



<div class="modal" id="myModal">
  <div class="modal-dialog ">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Felicidades !! Jugador </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Modales promedios-->

<div class="modal" id="myModal2">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Promedio Equipo 1 </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
  <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Jugador 1</th>
      <th scope="col">Jugador 2</th>
      <th scope="col">Jugador 3</th>
      <th scope="col">Jugador 4</th>
      <th scope="col">Jugador 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Equipo 1</th>
      <td>280</td>
      <td>150</td>
      <td>195</td>
      <td>270</td>
      <td>190</td>
    </tr>
  </tbody>
</table>

  </div>

      
      <h2 class="titulo2">Grupo 2 </h2>
  <br/>
  <table class="table table-bordered table-striped Tabla2">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Jugador 1</th>
      <th scope="col">Jugador 2</th>
      <th scope="col">Jugador 3</th>
      <th scope="col">Jugador 4</th>
      <th scope="col">Jugador 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Equipo 1</th>
      <td>101</td>
      <td>198</td>
      <td>165</td>
      <td>145</td>
      <td>178</td>
    </tr>
    
  </tbody>
</table>

<!-- Modal footer -->
<div class="modal-footer">
      <p class="Resultado" style="float: left;"><?php echo 'promedio: ' . $promedio?></p>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

          </div>
     </div>
</div>

    </div>
  </div>
</div>



<div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Felicidades !! Jugador </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="myModal4">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Felicidades !! Jugador </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html> 
