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

        $ID = $_POST['proId'];
        $Nombre = $_POST['proNombre'];
        $Costo = $_POST['proCosto'];
        $Tipo = $_POST['tipProId'];
        // $telefono = $_POST['usuTelefono'];
        // $genero = $_POST['usuGenero'];
        // // $estado = $_POST['usuEstado'];
        // // $tipou = $_POST['tipoUsId'];

        if(!$ID){
            $errores[] = 'El ID es obligatorio';
        }
        if(!$Nombre){
            $errores[] = 'El nombre es obligatorio';
        }
        if(!$Costo){
            $errores[] = 'El costo es obligatorio';
        }
        if(!$Tipo){
            $errores[] = 'El tipo es obligatorio';
        }
        // if(!$telefono){
        //     $errores[] = 'El teléfono es obligatorio';
        // }
        // if(!$genero){
        //     $errores[] = 'El género es obligatorio';
        // }
        // // if(!$estado){
        // //     $errores[] = 'El estado es obligatorio';
        // // }
        // // if(!$tipou){
        // //     $errores[] = 'El tipo de usuario es obligatorio';
        // // }
        
        if(empty($errores)){
        //Insertar los datos a la BD
        
            $sql = "INSERT INTO tbproductos(proId, proNombre, proCosto, tipProId) 
            VALUES ($ID, '$Nombre', $Costo, $Tipo)" ;

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
        <p>Nuevo Producto</p>

        <a href="../../index.php">Regresar</a>

        <form class="formulario" method="POST" action="crear.php">
            <fieldset>
                <legend>Datos</legend>
                <label for="proId">ID</label><br>
                <input type="number" id="proId" name="proId"><br>

                <label for="proNombre">Nombre</label><br>
                <input type="text" id="proNombre" name="proNombre"><br>

                <label for="proCosto">Costo</label><br>
                <input type="number" id="proCosto" name="proCosto" ><br>

                <label for="tipProId">Tipo</label><br>
                <input type="number" id="tipProId" name="tipProId" ><br>

                <!-- <label for="usuTelefono">Teléfono:</label><br>
                <input type="text" id="usuTelefono" name="usuTelefono" ><br>

                <label for="usuGenero">Género:</label><br>
                <input type="text" id="usuGenero" name="usuGenero" ><br>

                <label for="usuEstado">Estado:</label><br>
                <input type="text" id="usuEstado" name="usuEstado" ><br>

                <label for="tipUsId">TipoU:</label><br>
                <input type="number" id="tipUsId" name="tipUsId" ><br> -->

                <input class="boton" type="submit" id="enviar" name="enviar" value="Enviar datos">
            </fieldset>
            
        </form>

    </div>
</body>
</html>