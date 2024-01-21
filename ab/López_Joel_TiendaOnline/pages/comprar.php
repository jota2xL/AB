<?php
if (!isset($_SESSION)) {
    session_start();
} 
// Variables
$hostDB = '127.0.0.1';
$nombreDB = 'ab';
$usuarioDB = 'root';
$contrasenyaDB = 'Luamomo12#';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Prepara insert
$objetosCarrito = $miPDO->prepare('DELETE FROM carrito WHERE idcliente = :dni;');
// // Ejecuta consulta
// $miConsulta->execute();
if (isset($_SESSION['usserId'])) {
    $dni = $_SESSION['usserId'];
} else {
    $dni = '0';
}
$objetosCarrito->execute(
    array(
        'dni' => $dni
    )
);
header('Location: ../index.php');
?>