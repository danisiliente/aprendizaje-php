<!-- 
- Crear una variable llamada “ladoCuadrado” de valor 8.
- Calcular el área y el perímetro del cuadrado a partir de la variableanteriormente creada.
- Crear una variable llamada “baseTriangulo” de valor 9.
- Crear una variable llamada “alturaTriangulo” de valor 8.
- Crear dos variables llamadas “ladoUnoTriangulo” y“ladoDosTriangulo” de valor 8 ambas.
- Calcular el área y el perímetro del triángulo a partir de variablesanteriormente creadas.
- Crear una variable llamada “baseRectangulo” de valor 8.
- Crear una variable llamada “alturaRectangulo” de valor 6.
- Calcular el área y el perímetro del rectángulo a partir de variablesanteriormente creadas.
- Mostrar el resultado de las operaciones. 
-->

<?php
$ladoCuadrado = 8;
$area = $ladoCuadrado * $ladoCuadrado;
$perimetro = $ladoCuadrado ** 2;
echo 'Cuadrado <br>','Area: ',$area,'<br>Perimetro: ',$perimetro;
$baseTriangulo = 9;
$alturaTriangulo = 8;
$ladoUnoTriangulo = 8;
$ladoDosTriangulo = 8;
$areaT = $baseTriangulo * $alturaTriangulo / 2;
$perimetroT = $ladoUnoTriangulo + $ladoDosTriangulo + $baseTriangulo;
echo '<br>Triangulo<br>', 'Area: ',$areaT,'<br>Perimetro: ',$perimetroT;
$baseRectangulo = 8;
$alturaRectangulo = 6;
$areaR = $baseRectangulo * $alturaRectangulo;
$perimetroR = ($baseRectangulo * 2) + ($alturaRectangulo * 2);
echo '<br>Rectangulo<br>', 'Area: ',$areaR,'<br>Perimetro: ',$perimetroR;
?>
