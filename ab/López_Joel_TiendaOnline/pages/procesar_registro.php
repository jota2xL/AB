<?php
if (isset($_POST['dni'], $_POST['nombre'], $_POST['password'])) {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    insertarNuevoRegistro($dni, $nombre, $password);
    header('location: login.php');
}
function insertarNuevoRegistro($dni, $nombre, $password) {// Variables
    $hostDB = '127.0.0.1';
    $nombreDB = 'ab';
    $usuarioDB = 'root';
    $contrasenyaDB = 'Luamomo12#';
    // Conecta con base de datos
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
    // Prepara insert
     $miConsulta = $miPDO->prepare('INSERT INTO cliente(dni, nombrepersona, password) VALUES(:dni, :nombrepersona, :password) ;');
    // // Ejecuta consulta
    // $miConsulta->execute();
    $miConsulta->execute(
        array(
            'dni' => $dni,
            'nombrepersona' => $nombre,
            'password' => $password
        )
    );
 }
?>