<?php
// Carpeta donde se guardarán los archivos
$uploadDir = __DIR__ . "/../../../uploads/";
if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

// Recibimos el archivo del formulario
$archivo = $_FILES['archivo'] ?? null;

if ($archivo) {
    $nombreArchivo = basename($archivo['name']); // nombre original
    $rutaDestino   = $uploadDir . $nombreArchivo; // ruta donde se guardará
    $tipoArchivo   = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION)); // extensión
    $tamano        = $archivo['size']; // tamaño en bytes

    // Validamos que sea .doc o .pdf y que no supere 2MB
    if (($tipoArchivo === 'doc' || $tipoArchivo === 'pdf') && $tamano <= 2 * 1024 * 1024) {
        // Movemos el archivo al directorio uploads
        if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
            echo "<div class='alert alert-success'>
                    Archivo subido correctamente: 
                    <a href='../../../uploads/$nombreArchivo' target='_blank'>$nombreArchivo</a>
                  </div>";
        } else {
            echo "<div class='alert alert-danger'>Error al guardar el archivo.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>
                Archivo inválido. Debe ser .doc o .pdf y menor a 2MB.
              </div>";
    }
} else {
    echo "<div class='alert alert-danger'>No se recibió ningún archivo.</div>";
}
?>
