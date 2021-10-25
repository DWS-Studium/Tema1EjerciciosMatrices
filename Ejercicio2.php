<?php
/**Crea un array con los nombres de los días de la semana y muestra 
 * la posición correspondiente al “miércoles” por pantalla. Posteriormente 
 * cambia el nombre de “miércoles” por “junio” y vuelve a mostrar esa 
 * posición del array por pantalla.
 */
$semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
  
echo $semana[2];

$semana[2] = "Junio";
echo $semana[2];