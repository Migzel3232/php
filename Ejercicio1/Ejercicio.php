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
echo $promedio;

?>
