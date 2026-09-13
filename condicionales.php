<?php
// 1. Ejercicio con IF / ELSE (Evaluar edad)
$edad = 25;

echo "<h2>Evaluación de Edad:</h2>";
if ($edad < 18) {
    echo "Eres menor de edad.<br>";
} elseif ($edad >= 18 && $edad <= 65) {
    echo "Eres un adulto.<br>";
} else {
    echo "Eres un adulto mayor / tercera edad.<br>";
}

echo "<hr>"; // Línea divisoria en HTML

// 2. Ejercicio con SWITCH (Días de la semana)
$diaNumero = 3; 

echo "<h2>Día de la semana:</h2>";
switch ($diaNumero) {
    case 1:
        echo "Hoy es Lunes.";
        break;
    case 2:
        echo "Hoy es Martes.";
        break;
    case 3:
        echo "Hoy es Miércoles.";
        break;
    case 4:
        echo "Hoy es Jueves.";
        break;
    case 5:
        echo "Hoy es Viernes.";
        break;
    default:
        echo "¡Es fin de semana! 🎉";
        break;
}
?>
