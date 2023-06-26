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

        <form class="formulario" method="POST" action="./destino.php                                                                                                                                                 ">
            <fieldset>
                <legend>Valores</legend>
                <label for="numero1">No.1</label><br>
                <input type="numeric" id="numero1" name="numero1"><br>

                <label for="numero2">No.2</label><br>
                <input type="numeric" id="numero2" name="numero2"><br>

                <!-- <label for="operadore">Operadore</label><br> -->
                <!-- <input class="operadore" type="text" id="operadore" name="operadore"><br> -->
                <select name="operadore"> 
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input class="boton" type="submit" id="enviar" name="enviar" value="Enviar">
            </fieldset>
        </form>

    </div>
</body>
</html>