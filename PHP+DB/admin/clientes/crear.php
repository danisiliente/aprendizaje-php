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

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $genero = $_POST['genero'];
        // $estado = $_POST['estado'];
        // $tipou = $_POST['tipou'];

        if(!$id){
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
        // if(!$estado){
        //     $errores[] = 'El estado es obligatorio';
        // }
        // if(!$tipou){
        //     $errores[] = 'El tipo de usuario es obligatorio';
        // }
        
        if(empty($errores)){
        //Insertar los datos a la BD
        
            $sql = "INSERT INTO clientes(id, nombre, apellido, email, telefono, genero, estado, tipou) 
            VALUES ($id, '$nombre', '$apellido', '$email', '$telefono', '$genero', 'Activo', 3)" ;

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
                <label for="id">No. Identificación</label><br>
                <input type="number" id="id" name="id"><br>

                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre"><br>

                <label for="apellido">Apellido:</label><br>
                <input type="text" id="apellido" name="apellido" ><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" ><br>

                <label for="telefono">Teléfono:</label><br>
                <input type="text" id="telefono" name="telefono" ><br>

                <label for="genero">Género:</label><br>
                <input type="text" id="genero" name="genero" ><br>

                <!-- <label for="estado">Estado:</label><br>
                <input type="text" id="estado" name="estado" ><br>

                <label for="tipou">TipoU:</label><br>
                <input type="text" id="tipou" name="tipou" ><br> -->

                <input class="boton" type="submit" id="enviar" name="enviar" value="Enviar datos">
            </fieldset>
            
        </form>

    </div>
</body>
</html>