<?php
$archivo = $_FILES['archivo'] ?? null;

if ($archivo) {
    $nombreArchivo = basename($archivo['name']); // nombre original
    $tipoArchivo   = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION)); // extensión

    // Validamos que sea .txt
    if ($tipoArchivo === 'txt') {
        $contenido = file_get_contents($archivo['tmp_name']); // leemos el contenido
        echo "<h3>Contenido del archivo $nombreArchivo:</h3>";
        echo "<textarea class='form-control' rows='10'>$contenido</textarea>";
    } else {
        echo "<div class='alert alert-danger'>Solo se permiten archivos .txt</div>";
    }
} else {
    echo "<div class='alert alert-danger'>No se recibió ningún archivo.</div>";
}
?>
