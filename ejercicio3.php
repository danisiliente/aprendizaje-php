<!-- 
- Crear una variable de nombre “numeroUno” con el valor de 8.
- Crear una variable de nombre “numeroDos” con el valor de 2.
- Intercambiar los valores de ambas variables, de modo que “numeroUno” valga 2, y “numeroDos” valga 8. (Utiliza una variableauxiliar).
- Mostrar los resultados de ambas variables.
-->

<?php
$var1 = 8;
$var2 = 2;
$auxiliar = $var1;
$var1 = $var2;
$var2 = $auxiliar;
echo $var1,'<br>',$var2;
?>