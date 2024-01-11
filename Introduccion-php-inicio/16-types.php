<?php include 'includes/header.php';

//Agregando tipos de datos a las funciones
//Obligamos a PHP a pedir datos enteros:

function sumar(int $v1 = 0, int $v2 = 0){ //Hay dos parámetros que se reciben en sus parentesis
    $suma = $v1 + $v2;
    echo $suma;
}

sumar(4000, 1);//Hay dos argumentos que se envian a la función

//Llamado 2 con otros dos argumentos

echo '<br>';
sumar(9600);//Pasamos un solo argumento pero PHP evaluará los dos ya que hemos dado valores por defecto

echo '<br>';
sumar();

include 'includes/footer.php';