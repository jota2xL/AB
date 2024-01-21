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
$productosDisponibles = $miPDO->prepare('DELETE  FROM carrito WHERE idproducto = :idproducto AND idcliente= :dni;');
$productosDisponibles->execute(
    array(
        'dni' => $_SESSION['usserId'],
        'idproducto' => $_POST['idProductoD']
    )
);
header('Location: carrito.php');

?>