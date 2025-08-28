<?php
$edad = $_POST['edad'];
$estudiante = isset($_POST['estudiante']);

if ($estudiante && $edad < 12) {
    $precio = 160;
} elseif ($estudiante && $edad >= 12) {
    $precio = 180;
} else {
    $precio = 300;
}

echo "El precio de la entrada es: $$precio";
?>