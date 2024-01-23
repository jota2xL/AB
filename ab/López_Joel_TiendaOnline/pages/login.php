<?php
// siempre que quieras trabajar con una sesión tienes que definirla primero,
//  con el session_start mas que definirla es para poder trabajar con ella(es decir que el archivo php trabajara con sesiones)
if (!isset($_SESSION)) {
    session_start();
} 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <script>
        // definimos la función sleep para que el proceso se para durante 'x' tiempo y por parametro le pasamos una variable
        // en la linea de abajo definimos que va devolver un objeto que se llama promesa para que el espere unos milisegundos
        // este objeto promesa nos permite hacer una llamada con delay,
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        // mostrar recibe por parametro un buleano islloginsucces
        function mostrarPopup(isLogingSuccess) {
            // document es una clase de javaScript que me permite acceder a las etiquetas y variables de un arbol DOM
            var popup = document.getElementById('miPopup');
            //el pop up pasa de tener un display none a un block
            popup.style.display = 'block';
            if (isLogingSuccess == true) {
                sleep(2000).then(volverIndex);
            }
            else {
                sleep(2000).then(esconderPopup);
            }

        }
        function volverIndex() {
            window.location.replace("../index.php");
        }
        function esconderPopup() {
            var popup = document.getElementById('miPopup');
            popup.style.display = 'none';
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        a {
            color: rgb(192, 238, 107);

        }



        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: rgb(192, 238, 107);
            color: #000000;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: rgb(192, 238, 107);
            /* Verde */
            border: 2px solid #2c3e50;
            /* Negro */
            border-radius: 5px;
            text-align: center;
            z-index: 1000;
        }

        /* Estilo del botón */
        .popup button {
            padding: 10px 20px;
            background-color: #2c3e50;
            /* Negro */
            color: #ecf0f1;
            /* Gris claro */
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Estilo del botón al pasar el ratón */
        .popup button:hover {
            background-color: #34495e;
            /* Gris más oscuro */
        }
    </style>
</head>

<body>
    <!-- el post es un tipo de peteción http en la que estamos pasando en la request una serie de datos en vez de pasarla
    en una url como en get -->
    <form action="procesar_login.php" method="post">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button name="boton1" type="submit">Iniciar Sesión</button>
        <a name="boton2" href="registro.php">Registrarse</a>
    </form>

    <div id="miPopup" name="miPopup" class="popup">
        <?php
        // una vez la persona haya iniciado un login en la sesión le decimos que muestre el pop de una manera u otra
        if (isset($_SESSION['usserLoged']) && $_SESSION['usserLoged'] === true) {
            echo "<h1>login succes</h1>";
        } else {
            echo "<h1>login error</h1>";
        }

        ?>

    </div>
    <?php
    if (isset($_SESSION['usserLoged'])) {
        $loginCorrecto = $_SESSION['usserLoged'];
        echo "<script>mostrarPopup($loginCorrecto)</script>";
        if ($loginCorrecto === false) {
            $_SESSION["usserLoged"] = null;
        }
    }

    ?>




</body>

</html>