<?php
echo "<h2>Manipulación de Texto (Strings)</h2>";
$mensaje = "programación en PHP";

// 1. Contar caracteres
echo "La frase tiene: " . strlen($mensaje) . " caracteres.<br>";

// 2. Reemplazar una palabra por otra
$nuevoMensaje = str_replace("programación", "desarrollo web", $mensaje);
echo "Frase modificada: " . $nuevoMensaje . "<br>";

echo "<hr>";

echo "<h2>Manejo de Fechas</h2>";
// Configurar la zona horaria (puedes cambiarla por la de tu país)
date_default_timezone_set('America/Santiago');

// Obtener fecha actual en formato legible (Día-Mes-Año Hora:Minutos)
$fechaHoy = date("d-m-Y H:i");
echo "La fecha y hora actual es: " . $fechaHoy . "<br>";

// Mostrar el año actual automáticamente (ideal para los Copyright de las páginas)
echo "© " . date("Y") . " - Creado por NachoOFC";
?>
