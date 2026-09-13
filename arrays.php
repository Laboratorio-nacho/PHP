<?php
// 1. Array indexado (Lista simple)
$videojuegos = ["Minecraft", "Zelda", "GTA V", "FIFA", "Elden Ring"];

echo "<h2>Mis Videojuegos Favoritos:</h2>";
echo "<ol>"; // Lista ordenada en HTML
foreach ($videojuegos as $juego) {
    echo "<li>" . $juego . "</li>";
}
echo "</ol>";

echo "<hr>";

// 2. Array asociativo (Clave => Valor)
$usuario = [
    "nombre" => "Nacho",
    "edad" => 21,
    "pais" => "Chile"
];

echo "<h2>Datos del Usuario:</h2>";
echo "Nombre: " . $usuario["nombre"] . "<br>";
echo "Edad: " . $usuario["edad"] . " años<br>";
echo "País: " . $usuario["pais"] . "<br>";
?>
