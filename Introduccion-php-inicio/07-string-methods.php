<?php include 'includes/header.php';

$nombreProveedor = 'Luckas Hernandez';

var_dump($nombreProveedor);
echo '<br>';

//Conocer la longitud de una cadena de texto:

echo strlen($nombreProveedor);

//Eliminar espacios en blanco

echo trim($nombreProveedor); 

//Convertir a mayúsculas

echo strtoupper($nombreProveedor);

//Convertir en minúsculas

echo strtolower($nombreProveedor);

//Revisar si un caracter existe

echo strpos($nombreProveedor, 'k');

//Concatenar con el operador punto

$tipoProveedor = 'Basico';

echo 'El proveedor ' . $nombreProveedor . ' Es ' . $tipoProveedor;

echo "El proveedor {$nombreProveedor}  es $tipoProveedor";


include 'includes/footer.php';