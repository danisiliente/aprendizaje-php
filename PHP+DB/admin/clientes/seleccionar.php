<?php



//1. Importar la conexión a la base de datos para seleccionar los registros de la tabla clientes

require '../../includes/funciones.php';

$bd = conectar_db();

//2. Escribir el query o cadena SQL para seleccionar los datos:

$consulta = "SELECT * FROM tbusuarios";

//3. Consultar la base de datos agregando el query y la variable $bd donde viene el resultado de la conexión:

$resultado_consulta = mysqli_query($bd, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Clientes</title>
    <link rel="stylesheet" href="../../build/css/styletable.css">
</head>
<body>
<h3>Gestion de clientes - Consultar</h3>  

<table>
    <th>
        <tr>
            <td class="titular">Documento</td>
            <td class="titular">Nombre</td>
            <td class="titular">Apellido</td>
            <td class="titular">Email</td>
            <td class="titular">Teléfono</td>
            <td class="titular">Género</td>
            <td class="titular">Estado</td>
            <td class="titular">TipoU</td>
        </tr> 
    </th>

    <?php 
    
    //Vamos a MEZCLAR codigo PHP incrustado en una tabla HTML para mostrar los datos de la tabla cliente
    //Vamos a seleccionar todos los datos de la tabla cliente para ser mostrados en una página HTML
    //Usamos WHILE para que se ejecute mientras la tabla tenga datos
    //Si la tabla clientes tiene 10 registros, while se ejecuta 10 veces y PHP repetirá  10 veces el código de HTML
    //Observe que debimos hacer una sola linea PHP para imprimir un cierre } para encerrar el codigo HTML que se repite
    ?>
    <?php while($cliente = mysqli_fetch_assoc($resultado_consulta)){?>
    <tr>
        <td class="enunciado"> <?php echo $cliente['usuDocumento'];?> </td>
        <td class="enunciado"> <?php echo $cliente['usuNombre'];?> </td>
        <td class="enunciado"> <?php echo $cliente['usuApellido'];?></td>
        <td class="enunciado"> <?php echo $cliente['usuEmail'];?></td>
        <td class="enunciado"> <?php echo $cliente['usuTelefono'];?></td>
        <td class="enunciado"> <?php echo $cliente['usuGenero'];?></td>
        <td class="enunciado"> <?php echo $cliente['usuEstado'];?></td>
        <td class="enunciado"> <?php echo $cliente['tipUsuId'];?></td>
        <td class="enunciado">
            <a class="eliminar" href="eliminar.php?codigo=<?php echo $cliente['usuDocumento'];?>">Eliminar</a>
            <a class="actualizar" href="actualizar.php?codigo=<?php echo $cliente['usuDocumento'];?>">Actualizar</a>
            <?php } ?>
        </td>
        
    </tr>
    <a class="regresar" href="../../index.php">Regresar</a>
</table>

<?php 
//Recuerde que podemos OPCIONALMENTE cerrar la base de datos actual, si no lo hacemos PHP lo hace
mysqli_close($bd);
?>

</body>
</html>