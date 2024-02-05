
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
    <?php 
      echo " centro de industria y construccion ";

      $nombre='jhon';
      $num= 2022;
      $num_dec=4.5;
      $varboleano=false;
      echo 'hola, '.$nombre;
      echo ' '. gettype( $nombre);
      define ('A',30);
      define('nombre','SENA');
      


      $semana = array(' lunes',' martes',' miercoles',' jueves',' viernes',' sabado',' domingo');
      echo $semana[1];

      $varios = array ('lunes' , 'martes', 3,4,true);
      echo '<br><br>'. $varios[2];

      $jhon= array ('telefono' => '1234', 'edad' => 30, 'apellido'=> 'vaquiro' ,'pais' => 'Colombia');

      $jhon['telefono']= ' 34567';

      echo ' <br><br> El telefono de jhon es'.$jhon['telefono'];

      $amigos= array(
        array('jhon',30),
        array('paula',1),
        array('kely',28)
      );

      echo '<br> '.$amigos[0][0]. ' ' .$amigos[0][1]. '<br />';
      echo $amigos[1][0]. ' ' .$amigos[1][1]. '<br />';
      echo $amigos[2][0]. ' ' .$amigos[2][1]. '<br />';

      $meses = array( 
        'enero','febrero', 'marzo', 'abril',
         'mayo', 'Junio', 'Julio', 'Agosto',
         'Septiembre','octubre','noviembre','diciembre'
      );

      echo count ($meses);
      $ultimo_mes= count($meses)-1;
      echo ' '.$meses[$ultimo_mes];
      echo ' '.end($meses);


    ?>
    </h1>
    <p>
        <ul>
        <?php
        foreach ($meses as $mes){
            echo '<li>'.$mes. '</li>';
          }
        ?>
        </ul>

    </p>

    <p>
        <ul>
        <?php

        $numeros = array(1,22,23,10,9,5,70,100,20);
        rsort($numeros);
        sort($meses);

        foreach($numeros as $numero){
            echo '<li>' .$numero. '</li>';
        }

        foreach($meses as $mes){
            echo '<li>' .$mes. '</li>';
        }




        ?>
        </ul>


    </p>

</body>
</html>







