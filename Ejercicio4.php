<?php
/**
 * Crea una matriz asociativa llamada notas. Cada clave será 
 * el nombre de una de tus asignaturas y el valor será la clave. 
 * Muestra por pantalla tus notas de IAW. Muestra por pantalla tu media de notas.
 */

  $notas = ["DAW" => 10, "DWS" => 9, "DWC" => 8, "DIW" => 5];
  
  echo "Mi nota en DAW es: ".$notas['DAW']."<br />";
    
  $mi_media = array_sum($notas)/count($notas);
  echo "La media de notas es: $mi_media";