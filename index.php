<?php
    $nombre = (string) 'Edwin Mauricio Barrios Almeida';
    $_edad = (int) 39;
    $Altura = (double) 1.70;
    $soy_Su_Profesor = (boolean) true;
    $HOBBIES = (array) ['Programar','Cocinar',407];
    
    $objeto = new stdClass;
    $objeto->cosas = "Tv";

    print_r($objeto->cosas);
     echo "<br>"; 
     var_dump($HOBBIES);

?>