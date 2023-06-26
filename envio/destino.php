<?php
// $numero1=$_POST['numero1'];
// $numero2=$_POST['numero2'];

$numero1 = intval($_POST['numero1']);
$numero2 = intval($_POST['numero2']);
$operadore =$_POST['operadore'];

echo $numero1;
echo '<br>';
echo $numero2;
echo '<br>';

if(empty($numero1) || empty($numero2)){
    echo 'Llene esa mierda bien, bobooo';
}elseif($numero1 == $numero2){
    echo 'Los datos son iguales.';
}elseif($numero1 > $numero2){
    echo 'Numero1 es mayor.';
}elseif($numero1 < $numero2){
    echo 'Numero1 es menor.';
}else{
    echo 'Ocurrio lo inocurrible.';
}

echo '<br>';

if ($operadore == '+'){
    echo 'suma = ',$numero1 + $numero2;
}elseif($operadore == '-'){
    echo 'resta = ',$numero1 - $numero2;
}elseif($operadore == '/'){
    echo 'division = ',$numero1 / $numero2;
}elseif($operadore == '*'){
    echo 'multiplicacion = ',$numero1 * $numero2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destiny</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

</body>
</html>