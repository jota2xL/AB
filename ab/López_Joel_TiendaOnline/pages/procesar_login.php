<?php
if (!isset($_SESSION)) {
    session_start();
}
$isLoginSucces = false;
if (isset($_POST['dni'], $_POST['password'])) {
    $dni = $_POST['dni'];
    $password = $_POST['password'];
    loginUsuario($dni, $password);
}
function loginUsuario($dni, $password)
{ // Variables
    $hostDB = '127.0.0.1';
    $nombreDB = 'ab';
    $usuarioDB = 'root';
    $contrasenyaDB = 'Luamomo12#';
    // Conecta con base de datos
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
    // Prepara insert
    $miConsulta = $miPDO->prepare('SELECT * FROM cliente WHERE dni = :dni AND password = :password ;');
    // // Ejecuta consulta
    // $miConsulta->execute();
    $miConsulta->execute(
        array(
            'dni' => $dni,
            ':password' => $password
        )
    );
    //&&sobrecarga de operador, con una aspersan lee los dos, con dos con que el primero ya sea nulo no lo comprueba.
    if ($miConsulta != null && $miConsulta->rowCount() > 0) {
        $_SESSION['usserLoged'] = true;
        $_SESSION['usserId'] = $dni;
    } else {
        $_SESSION['usserLoged'] = false;
    }
    header("Location: login.php");
}
?>