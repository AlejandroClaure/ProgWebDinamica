<?php
/**
 * Controlador para procesar la subida de archivos de texto (.txt).
 */
class SubirController {

    /**
     * Procesa un archivo subido desde un formulario.
     *
     * @param array $archivo Datos del archivo recibido desde $_FILES['archivo'].
     *                       Debe contener al menos 'name', 'tmp_name' y 'error'.
     * @return string Mensaje HTML con el resultado de la operación (contenido del archivo o error).
     */
    public function procesar($archivo) {
        $mensaje = ""; // variable única para el resultado

        if ($archivo && $archivo['error'] === 0) {
            $nombre = basename($archivo['name']);
            $tipo   = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

            if ($tipo === "txt") {
                $contenido = file_get_contents($archivo['tmp_name']);
                $mensaje = "<h3>Contenido del archivo $nombre:</h3>
                            <textarea class='form-control' rows='15' readonly>" .
                            htmlspecialchars($contenido) .
                            "</textarea>";
            } else {
                $mensaje = "<div class='alert alert-danger'>Error: solo se permiten archivos .txt</div>";
            }
        } else {
            $mensaje = "<div class='alert alert-danger'>Error en la subida del archivo.</div>";
        }

        return $mensaje;
    }
}
