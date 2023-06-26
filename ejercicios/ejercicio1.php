<!-- 
- Crear una variable para almacenar el nombre de un estudiante.
- Crear 5 variables para almacenar 5 diferentes notas decimales.
- Calcular el promedio final del estudiante a partir de las 5 notas decimales. (Recuerda que un promedio se calcula sumando todos los valores y dividiendo el resultado por el número de valores).
- Mostrar el resultado y el nombre del estudiante. 
-->

<form method="post">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="number" name="nota1" placeholder="Nota 1">
    <input type="number" name="nota2" placeholder="Nota 2">
    <input type="number" name="nota3" placeholder="Nota 3">
    <input type="number" name="nota4" placeholder="Nota 4">
    <input type="number" name="nota5" placeholder="Nota 5">
    <button>Enviar</button>
</form>

<?php
  $nombre = $_POST['nombre'];
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];
  $nota4 = $_POST['nota4'];
  $nota5 = $_POST['nota5'];
  echo 'Hola ', $nombre;

  $suma = $nota1 +$nota2 + $nota3 + $nota4 + $nota5;
  $promedio = $suma / 5;

  echo '<br>Su Promedio es: ',$promedio;
?>