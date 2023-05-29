<?php 

//Este segmento que empieza aquí lo usamos para pasar los datos que se van a actualizar a traves de la URL
// Usando la globat GET haremos que PHP recoja los datos del cliente desde la URL y los valide
//Cuando el usaurio elige ACTUALIZAR UN CLIENTE la id se pasa a través del navegador en la barra de direcciones
//Si algun usuario malicioso cambia el valor de la ID del cliente, se llama el formulario inicial de actualizar
//CON eso evitamos que el usuario cambie los datos en la URL del navegador y se cambie la ID que se pasó

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){ // Si el usuario malicioso cambió la id del cliente en el navegador
    header ('location: ../clientes/seleccionar.php');
}
//Aquí termina la validación de la URL que se manda para actualizar los datos de un cliente

//Seleccionar los datos del cliente que se desea modificar:

$consultar_cliente = "SELECT * FROM clientes WHERE 'id == $id";

echo $consultar_cliente;

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
        $primer_apellido = $_POST['primer_apellido'];
        $segundo_apellido = $_POST['segundo_apellido'];
        $nombres = $_POST['nombres'];
        $correo = $_POST['correo'];

        if(!$id){
            $errores[] = 'El número de identificación es obligatorio';
        }
        if(!$primer_apellido){
            $errores[] = 'El primer apellido es obligatorio';
        }
        if(!$nombres){
            $errores[] = 'El nombre es obligatorio';
        }
        if(!$correo){
            $errores[] = 'El correo es obligatorio';
        }
        
        if(empty($errores)){
        //Insertar los datos a la BD
        
            $sql = "INSERT INTO clientes(id, primer_apellido, segundo_apellido, nombres, correo) 
            VALUES ('$id', '$primer_apellido', '$segundo_apellido', '$nombres', '$correo')" ;

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
<div>
    <p>Actualizar datos del cliente</p>

    <a href="../../index.php">Regresar</a>

    <form class="formulario" method="POST" action="crear.php">
        <fieldset>
            <legend>Datos</legend>
            <label for="id">No. Identificación</label><br>
            <input type="text" id="id" name="id"><br>

            <label for="primer_apellido">Primer Apellido:</label><br>
            <input type="text" id="primer_apellido" name="primer_apellido"><br>

            <label for="segundo_apellido">Segundo Apellido:</label><br>
            <input type="text" id="segundo_apellido" name="segundo_apellido" ><br>

            <label for="nombres">Nombres:</label><br>
            <input type="text" id="nombres" name="nombres" ><br>

            <label for="correo">Correo electrónico:</label><br>
            <input type="mail" id="correo" name="correo" ><br>

            <input type="submit" id="enviar" name="enviar" value="Actualizar datos">
        </fieldset>
        
    </form>

</div>
