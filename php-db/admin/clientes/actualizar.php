<?php 
require '../../includes/funciones.php';

//Verificar con filter validate que el dato enviado sea válido para poder actualizar por el id entero que se recibe en el GET
$codigo_actualizar = $_GET['codigo'];
$codigo_actualizar = filter_var($codigo_actualizar, FILTER_VALIDATE_INT);

if(!$codigo_actualizar){
    header('../../index.php');
}

$bd = conectar_db();

$consulta_cliente = "SELECT * FROM tbUsuarios WHERE usuDocumento = $codigo_actualizar";
$resultado = mysqli_query($bd, $consulta_cliente);
$cliente = mysqli_fetch_assoc($resultado);

$documento = $cliente['usuDocumento'];
$nombre = $cliente['usuNombre'];
$apellido = $cliente['usuApellido'];
$email = $cliente['usuEmail'];
$telefono = $cliente['usuTelefono'];
$genero = $cliente['usuGenero'];
$estado = $cliente['usuEstado'];
$tipou = $cliente['tipUsuId'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $documento = $_POST['usuDocumento'];
    $nombre = $_POST['usuNombre'];
    $apellido = $_POST['usuApellido'];
    $email = $_POST['usuEmail'];
    $telefono = $_POST['usuTelefono'];
    $genero = $_POST['usuGenero'];
    $estado = $_POST['usuEstado'];
    // $tipou = $_POST['tipUsuId'];

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
    //Actualizar los datos a la BD
    
        $sql = "UPDATE tbUsuarios SET 
        usuDocumento = $documento,
        usuNombre = '$nombre',
        usuApellido = '$apellido',
        usuEmail = '$email',
        usuTelefono = '$telefono',
        usuGenero = '$genero',
        usuEstado = '$estado',
        tipUsuId = $tipou
        WHERE usuDocumento = $codigo_actualizar";

        echo $sql;

        $resultado = mysqli_query($bd, $sql);

        if($resultado){
            //'El registro se ha actualizado correctamente';
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
<head>
    <link rel="stylesheet" href="../../build/css/style.css">
    
</head>
<div>
    <p>Actualizar cliente</p>

    <a href="../../index.php">Regresar</a>

    <form class="formulario" method="POST">
        <fieldset>
            <legend>Datos</legend>
            <label for="usuDocumento">No. Identificación</label><br>
            <input type="number" id="usuDocumento" name="usuDocumento" value="<?php echo $documento?>"><br>

            <label for="usuNombre">Nombre:</label><br>
            <input type="text" id="usuNombre" name="usuNombre" value="<?php echo $nombre?>"><br>

            <label for="usuApellido">Apellido:</label><br>
            <input type="text" id="usuApellido" name="usuApellido" value="<?php echo $apellido?>"><br>

            <label for="usuEmail">Email:</label><br>
            <input type="email" id="usuEmail" name="usuEmail" value="<?php echo $email?>"><br>

            <label for="usuTelefono">Teléfono:</label><br>
            <input type="text" id="usuTelefono" name="usuTelefono" value="<?php echo $telefono?>"><br>

            <label for="usuGenero">Género:</label><br>
            <input type="text" id="usuGenero" name="usuGenero" value="<?php echo $genero?>"><br>

            <label for="usuEstado">Estado:</label><br>
            <input type="text" id="usuEstado" name="usuEstado" value="<?php echo $estado?>"><br>

            <label for="tipUsuId">TipoU:</label><br>
            <input type="number" id="tipUsuId" name="tipUsId" value="<?php echo $tipou?>"><br>

            <input class="boton" type="submit" id="enviar" name="enviar" value="Actualizar datos">
        </fieldset>
        
    </form>

</div>