<?php
// las variable globales son para que el scope de la variablesea mas amplio
global $listaObjetosCarrito;
global $totalCarrito;
function totalObjetosCarrito($carrito)
{
    // para la suma del total en el carrito precio*objeto y suma de totales
    $total = 0;
    if (isset($carrito)) {
        foreach ($carrito as $clave => $objeto) {
            $total += ($objeto['precio'] * $objeto['cantidadproducto']);
        }
    }
    return $total;
}
function isUsserConnected()
{
    // si no existe el logeo o si el login a sido fallido asi evitamos que reviente
    if (!isset($_SESSION['usserLoged']) || $_SESSION['usserLoged'] === false) {
        header('Location: login.php');
    }
}
if (!isset($_SESSION)) {
    session_start();
    isUsserConnected();
} else {
    isUsserConnected();
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
$productosDisponibles = $miPDO->prepare('SELECT * FROM producto;');
$productosDisponibles->execute();
$objetosCarrito = $miPDO->prepare('select producto.id, producto.nombre, producto.precio, carrito.cantidadproducto from producto, carrito where producto.id = carrito.idproducto and carrito.idcliente = :dni;');
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
$listaObjetosCarrito = $objetosCarrito->fetchAll(PDO::FETCH_ASSOC);
$totalCarrito = totalObjetosCarrito($listaObjetosCarrito);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: rgb(192, 238, 107);
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #000;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #000;
            color: #fff;
        }

        .total {
            font-weight: bold;
        }

        form {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #000;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #333;
        }
    </style>
</head>

<body>

    <h1>Carrito de Compra</h1>

    <table id="carrito">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Los elementos del carrito se agregarán aquí dinámicamente -->
            <?php
            foreach ($listaObjetosCarrito as $clave => $objeto) { ?>
                <tr>
                    <td>
                        <?= $objeto['nombre']; ?>
                    </td>
                    <td>
                        <?= $objeto['precio']; ?>
                    </td>
                    <td>
                        <input name="cantidadM" type="number" id="cantidadM" value='<?= $objeto['cantidadproducto']; ?>'>
                    </td>
                    <td>
                        <?= $objeto['cantidadproducto'] * $objeto['precio']; ?>
                    </td>
                    <td>
                        <button type="button" onclick="deleteRow(<?= $objeto['id']; ?>)">Eliminar</button>
                        <button type="button" onclick="updateRow(<?= $objeto['id']; ?>)">Modificar</button>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <!-- colspan para posicionamiento en este caso columna 3 -->
                <td class="total" colspan="3">Total:</td>
                <?php
                ?>
                <td class="total" id="total">
                    <?= $totalCarrito ?>
                </td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <h2>Añadir Producto</h2>
    <form action="añadirProductoCarrito.php" id="formulario" method="post">
        <label for="producto">Producto:</label>
        <select name="producto" id="producto" onchange="productSelected();">
            <!-- Iterar sobre los resultados de la consulta y crear opciones del menú desplegable -->
            <?php
            foreach ($productosDisponibles as $clave => $producto) { ?>
                <option value=<?= $producto["nombre"] ?>><?= $producto["nombre"] . "|" . $producto['precio'] . "|" . $producto['id'] ?></option>
                <?php
            }
            ?>
        </select>

        <label for="precio">Precio:</label>
    <!-- step para determinar la cantidad de decimales que puede tener el campo -->
        <input name="precio" type="number" id="precio" step="0.01" required>

        <label for="cantidad">Cantidad:</label>
        <input name="cantidad" type="number" id="cantidad" required>

        <input name="idproducto" type="number" id="idproducto" required hidden>

        <button type="submit">Agregar al Carrito</button>
        <a name="boton2" href="comprar.php">Comprar</a>
    </form>
    <form style="display: none" action="deleteObjetoCarrito.php" method="POST" id="formularioDelete">
        <input type="hidden" id="idProductoD" name="idProductoD" value="" />
    </form>
    <form style="display: none" action="modificarObjetoCarrito.php" method="POST" id="formularioModificación">
        <input type="hidden" id="idProductoM" name="idProductoM" value="" />
        <input type="hidden" id="cantidadF" name="cantidadF" value="" />
    </form>

    <script>

        
        function productSelected() {
            var productoSeleccionado = document.getElementById('producto');
            var precioProductoSeleccionado = productoSeleccionado.options[productoSeleccionado.selectedIndex].text;
            document.getElementById('precio').value = precioProductoSeleccionado.split('|')[1];
            document.getElementById('idproducto').value = precioProductoSeleccionado.split('|')[2];
        }
        function updateRow(idProducto) {
            var formulario = document.getElementById('formularioModificación');
            document.getElementById('idProductoM').value = idProducto;
            var cantidad = document.getElementById('cantidadM').value;
            if (cantidad <= 0) {
                deleteRow(idProducto);
            }
            else {
                document.getElementById('cantidadF').value = cantidad;
                formulario.submit();
            }

        }
        function deleteRow(idProducto) {
            var formulario = document.getElementById('formularioDelete');
            document.getElementById('idProductoD').value = idProducto;
            formulario.submit();
        }

    </script>

</body>

</html>