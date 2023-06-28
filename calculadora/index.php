<?php

class Calculadora {

    public function calcular($numero1, $numero2, $operador) {

        if ($operador == '+') {
            $resultado = $numero1 + $numero2;
        }
        elseif ($operador == '-') {
            $resultado = $numero1 - $numero2;
        }
        elseif ($operador == '*') {
            $resultado = $numero1 * $numero2;
        }
        elseif ($operador == '/') {
            $resultado = $numero1 / $numero2;
        }

        return $resultado;
    }
}

$numero1 = '';
$numero2 = '';
$operador = '';
$resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operador = $_POST["operador"];
    
    $calculadora = new Calculadora();
    
    $resultado = $calculadora->calcular($numero1, $numero2, $operador);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
        <p>Calculator <span>3900</span></p>

        <a href="https://www.youtube.com/watch?v=5Y6K3bdfbeo">Regresar</a>

        <form class="formulario" method="POST" action="./index.php">
            <fieldset>
                <legend>Valores</legend>
                <label for="numero1">No.1</label><br>
                <input type="number" id="numero1" name="numero1" value="<?php echo $numero1; ?>" required><br>

                <label for="numero2">No.2</label><br>
                <input type="number" id="numero2" name="numero2" value="<?php echo $numero2; ?>" required><br>

                <select name="operador"> 
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input class="boton" type="submit" id="enviar" name="enviar" value="Enviar">
            </fieldset>

            <h4>Resultado</h4>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo $resultado;
                }
            ?>
            
        </form>
    </div>
</body>
</html>