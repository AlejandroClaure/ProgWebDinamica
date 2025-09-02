<?php
// Carpeta donde se van a guardar los archivos subidos
$dir = "uploads/";

// Si la carpeta no existe, se crea con permisos 0777
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

// Verificar si el archivo fue subido sin errores
if ($_FILES['archivo']['error'] === 0) {
    $archivoTmp = $_FILES['archivo']['tmp_name']; // archivo temporal
    $nombre = basename($_FILES['archivo']['name']); // nombre original
    $tipo = strtolower(pathinfo($nombre, PATHINFO_EXTENSION)); // extensión
    $tamanio = $_FILES['archivo']['size']; // tamaño en bytes

    // Validar tipo y tamaño
    if (($tipo === "doc" || $tipo === "pdf") && $tamanio <= 2 * 1024 * 1024) {
        $destino = $dir . $nombre; // ruta final
        move_uploaded_file($archivoTmp, $destino); // mover archivo
        
        echo "Archivo subido correctamente: <a href='$destino'>$nombre</a>";
    } else {
        echo "Error: solo se permiten archivos .doc o .pdf y tamaño máximo 2MB.";
    }
} else {
    echo " Error en la subida del archivo.";
}
?>