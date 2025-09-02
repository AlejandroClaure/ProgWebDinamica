<?php
// Verificar si el archivo fue subido sin errores
if ($_FILES['archivo']['error'] === 0) {
    $nombre = basename($_FILES['archivo']['name']);  // nombre original
    $tipo = strtolower(pathinfo($nombre, PATHINFO_EXTENSION)); // extensión

    // Validar que sea archivo .txt
    if ($tipo === "txt") {
        // Leer contenido del archivo
        $contenido = file_get_contents($_FILES['archivo']['tmp_name']);
        
        echo "<h2>Contenido del archivo:</h2>";
        // htmlspecialchars evita ejecutar código malicioso dentro del archivo
        echo "<textarea rows='15' cols='80'>".htmlspecialchars($contenido)."</textarea>";
    } else {
        echo "Error: solo se permiten archivos de texto plano (.txt).";
    }
} else {
    echo "Error en la subida del archivo.";
}
?>