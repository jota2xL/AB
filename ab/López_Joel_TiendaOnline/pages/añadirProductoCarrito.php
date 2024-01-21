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
$carritoDisponibles = $miPDO->prepare("SELECT * FROM carrito WHERE idcliente = :dni");
if (isset($_SESSION['usserId'])) {
    $dni = $_SESSION['usserId'];
} else {
    $dni = '0';
}
$carritoDisponibles->execute(
    array(
        'dni' => $dni
    )
    );
if ($carritoDisponibles->rowCount()> 0) {
    $existeCarrito = $carritoDisponibles->fetch(PDO::FETCH_ASSOC);
    $carrito = array_values($existeCarrito)[0];
    $idCarrito = $existeCarrito['idcarrito'];
    echo'<script>console.log("carritoencontrado");</script>';

} 
else {
    $resultado = $miPDO->prepare("SELECT max(idcarrito) AS id FROM carrito");
    $resultado->execute();
    $idCarrito = ($resultado->fetch(PDO::FETCH_ASSOC)['id']) + 1;
    echo'<script>console.log("carritonoencontrado");</script>';
}
$objetosCarrito = $miPDO->prepare('INSERT INTO carrito (idcarrito, cantidadproducto, idcliente, idproducto) VALUES(:idcarrito, :cantidadproducto, :idcliente, :idproducto);');
$objetosCarrito->execute(
    array(
        'idcarrito' => $idCarrito,
        'cantidadproducto' => $_POST['cantidad'],
        'idcliente' => $dni,
        'idproducto' => $_POST['idproducto']
    )
);
header('Location: carrito.php');
// // Ejecuta consulta
// $miConsulta->execute();
?>