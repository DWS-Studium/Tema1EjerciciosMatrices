<?php
/**
 * Crea un array llamado notas_dws cuyas claves sean nombres 
 * de los alumnos de nuestro curso y los valores sus notas en DWS. 
 * Muestra por pantalla tus notas. Muestra por pantalla la media 
 * de notas de la clase en DWS.
 */
$notas_dws = ["Andres" => 2, "Maria" => 5, "Laura" => 5, "Manuel" => 7, "Alvaro" => 10];
  
  foreach($notas_dws as $alumno => $nota){
    echo "La nota de ".$alumno." es: ".$nota."<br />";
  }
  
  $media_dws = array_sum($notas_dws)/count($notas_dws);
  echo "La media de notas es: $media_dws";
  