<?php
/**
 * Crea un array multidimensional. La clave será el nombre de un alumno 
 * y el valor será un array como el del ejercicio anterior. 
 * Muestra por pantalla tu nota en DAW.
 */
  $notas = [
"Alvaro" => ["DAW" => 10, "DWS" => 9, "DWC" => 8, "DIW" => 5],
"Marta" => ["DAW" => 8, "DWS" => 4, "DWC" => 2, "DIW" => 1],
"Maria" => ["DAW" => 7, "DWS" => 5, "DWC" => 5, "DIW" => 4],
"Carmen" => ["DAW" => 6, "DWS" => 6, "DWC" => 8, "DIW" => 7]
  ];
  
  $nota_daw = $notas["Alvaro"]["DAW"];
  echo "La nota en DAW es: $nota_daw";