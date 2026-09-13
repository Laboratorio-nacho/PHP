<?php
// Definición de la función con parámetros y retorno
function calcularDescuento($precioOriginal, $porcentajeDescuento) {
    $descuento = $precioOriginal * ($porcentajeDescuento / 100);
    $precioFinal = $precioOriginal - $descuento;
    return $precioFinal;
}

// Probamos la función con diferentes productos
$pantalon = 50000;
$descuentoPantalon = 15; // 15% de descuento

$precioConDescuento = calcularDescuento($pantalon, $descuentoPantalon);

echo "<h2>Calculadora de Descuentos</h2>";
echo "Precio original del pantalón: $" . $pantalon . "<br>";
echo "Descuento aplicado: " . $descuentoPantalon . "%<br>";
echo "<strong>Precio final a pagar: $" . $precioConDescuento . "</strong>";
?>
