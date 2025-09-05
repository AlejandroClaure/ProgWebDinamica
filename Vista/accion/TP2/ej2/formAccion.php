<?php
include("../../../estructura/header.php");

// Validación del lado servidor
$errores = [];

if (!isset($_POST['numero']) || !is_numeric($_POST['numero'])) {
    $errores[] = "El número es obligatorio y debe ser válido.";
}
if (!isset($_POST['edad']) || !is_numeric($_POST['edad']) || $_POST['edad'] < 1 || $_POST['edad'] > 120) {
    $errores[] = "La edad es obligatoria y debe estar entre 1 y 120.";
}

if (count($errores) > 0) {
    echo "<div class='container mt-5'>";
    echo "<h3>Errores encontrados:</h3><ul>";
    foreach ($errores as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
    echo "<a href='estructura/TP2/ej2/index.php' class='btn btn-secondary'>Volver</a>";
    echo "</div>";
    include("../../../vista/estructura/footer.php");
    exit;
}

// Si todo está bien
$numero = htmlspecialchars($_POST['numero']);
$edad = (int)$_POST['edad'];

echo "<div class='container mt-5'>";
echo "<h3>Datos recibidos correctamente</h3>";
echo "<p><strong>Número:</strong> $numero</p>";
echo "<p><strong>Edad:</strong> $edad</p>";
echo "<a href='../../../../Vista/TP2/ej2/index.php' class='btn btn-primary'>Volver al formulario</a>";
echo "</div>";

include("../../../estructura/footer.php");
?>
