// procesar_pedido.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $cliente = $_POST["cliente"];
    if (!empty($producto) && $cantidad > 0 && !empty($cliente)) {
        echo "Pedido procesado correctamente.";
    } else {
        echo "Faltan datos.";
    }
}
?>
