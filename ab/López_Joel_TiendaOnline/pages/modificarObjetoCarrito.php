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
print_r($_POST['cantidadF']);
print_r($_POST['idProductoM']);
$productosDisponibles = $miPDO->prepare('UPDATE carrito SET cantidadproducto = :cantidad WHERE idcliente = :dni AND idproducto = :producto');
$productosDisponibles->execute(
    array(
        'dni' => $_SESSION['usserId'],
        'cantidad' => $_POST['cantidadF'],
        'producto' => $_POST['idProductoM']
    )
);
header('Location: carrito.php');
?>