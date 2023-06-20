<?php 
require '../../includes/funciones.php';

$bd = conectar_db();

//El arreglo $errores nos guarda mensajes de error en caso de no escribir nada en el formulario
$errores =  [];

//echo '<pre>';
//if(($_SERVER['REQUEST_METHOD'])){
//echo '<pre>';
//var_dump(($_POST));
//}

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $documento = $_POST['usuDocumento'];
        $nombre = $_POST['usuNombre'];
        $apellido = $_POST['usuApellido'];
        $email = $_POST['usuEmail'];
        $telefono = $_POST['usuTelefono'];
        $genero = $_POST['usuGenero'];
        $estado = $_POST['usuEstado'];
        $tipou = $_POST['tipoUsuId'];

        if(!$documento){
            $errores[] = 'El número de identificación es obligatorio';
        }
        if(!$nombre){
            $errores[] = 'El nombre es obligatorio';
        }
        if(!$apellido){
            $errores[] = 'El apellido es obligatorio';
        }
        if(!$email){
            $errores[] = 'El correo es obligatorio';
        }
        if(!$telefono){
            $errores[] = 'El teléfono es obligatorio';
        }
        if(!$genero){
            $errores[] = 'El género es obligatorio';
        }
        if(!$estado){
            $errores[] = 'El estado es obligatorio';
        }
        if(!$tipou){
            $errores[] = 'El tipo de usuario es obligatorio';
        }
        
        if(empty($errores)){
        //Insertar los datos a la BD
        
            $sql = "INSERT INTO tbusuarios(usuDocumento, usuNombre, usuApellido, usuEmail, usuTelefono, usuGenero, usuEstado, tipUsuId) 
            VALUES ($documento, '$nombre', '$apellido', '$email', '$telefono', '$genero', '$estado', $tipou)" ;

            echo $sql;

            $resultado = mysqli_query($bd, $sql);

            if($resultado){
                //'El registro se ha insertado correctamente';
                //Nos devolvemos a la página inicial
                header('location: ../../index.php');

            }
            }
            else{
                foreach($errores as $error){
                    echo '<br>' . $error;
                }
            }
        }        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../build/css/style.css">
</head>
<body>
    <div>
        <p>Nuevo cliente</p>

        <a href="../../index.php">Regresar</a>

        <form class="formulario" method="POST" action="crear.php">
            <fieldset>
                <legend>Datos</legend>
                <label for="usuDocumento">No. Identificación</label><br>
                <input type="number" id="usuDocumento" name="usuDocumento"><br>

                <label for="usuNombre">Nombre:</label><br>
                <input type="text" id="usuNombre" name="usuNombre"><br>

                <label for="usuApellido">Apellido:</label><br>
                <input type="text" id="usuApellido" name="usuApellido" ><br>

                <label for="usuEmail">Email:</label><br>
                <input type="email" id="usuEmail" name="usuEmail" ><br>

                <label for="usuTelefono">Teléfono:</label><br>
                <input type="text" id="usuTelefono" name="usuTelefono" ><br>

                <label for="usuGenero">Género:</label><br>
                <input type="text" id="usuGenero" name="usuGenero" ><br>

                <label for="usuEstado">Estado:</label><br>
                <input type="text" id="usuEstado" name="usuEstado" ><br>

                <label for="tipUsuId">TipoU:</label><br>
                <input type="number" id="tipUsuId" name="tipUsuId" ><br>

                <input class="boton" type="submit" id="enviar" name="enviar" value="Enviar datos">
            </fieldset>
            
        </form>

    </div>
</body>
</html>