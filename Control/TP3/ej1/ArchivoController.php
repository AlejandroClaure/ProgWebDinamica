<?php
class ArchivoController {

    private $uploadDir;

    public function __construct() {
        // Carpeta absoluta donde se guardarán los archivos
        $this->uploadDir = __DIR__ . "/../../../../uploads/";

        // Verificar si existe la carpeta; si no, crearla
        if (!is_dir($this->uploadDir)) {
            if (!mkdir($this->uploadDir, 0777, true)) {
                die("<div class='alert alert-danger'>No se pudo crear la carpeta de uploads: {$this->uploadDir}</div>");
            }
        }
    }

    /**
     * Guarda un archivo recibido desde el formulario
     * @param array $post  Datos $_POST del formulario
     * @param array $files Datos $_FILES del formulario
     * @return string Mensaje de resultado
     */
    public function guardar($post, $files) {
        $archivo = $files['archivo'] ?? null;

        if (!$archivo) {
            return "<div class='alert alert-danger'>No se recibió ningún archivo.</div>";
        }

        $nombreArchivo = basename($archivo['name']);
        $rutaDestino   = $this->uploadDir . $nombreArchivo;
        $tipoArchivo   = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));
        $tamano        = $archivo['size'];

        // Validación: solo .doc o .pdf y tamaño <= 2MB
        if (!in_array($tipoArchivo, ['doc', 'pdf'])) {
            return "<div class='alert alert-danger'>Archivo inválido. Debe ser .doc o .pdf.</div>";
        }

        if ($tamano > 2 * 1024 * 1024) {
            return "<div class='alert alert-danger'>Archivo demasiado grande. Máximo 2MB.</div>";
        }

        // Intentar mover el archivo
        if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
            // URL relativa para mostrar al usuario
            $urlArchivo = "/uploads/$nombreArchivo";
            return "<div class='alert alert-success'>
                        Carpeta de uploads verificada correctamente.<br>
                        Archivo subido correctamente: 
                        <a href='$urlArchivo' target='_blank'>$nombreArchivo</a>
                        <br>Ruta completa: $rutaDestino
                    </div>";
        } else {
            return "<div class='alert alert-danger'>Error al guardar el archivo.</div>";
        }
    }
}
?>
