<?php
class PeliculasController
{
    private $jsonFile; 
    private $uploadDir; 
    private $tiposPermitidos; 

    /**
     * Constructor del controlador de películas.
     *
     * @param string $jsonFile Ruta al archivo JSON donde se guardarán las películas.
     * @param string $uploadDir Carpeta donde se guardarán las imágenes subidas.
     * @param array  $tiposPermitidos Extensiones de imágenes permitidas (por defecto: jpg, jpeg, png, gif).
     */
    public function __construct($jsonFile, $uploadDir, $tiposPermitidos = ['jpg', 'jpeg', 'png', 'gif'])
    {
        $this->jsonFile = $jsonFile;
        $this->uploadDir = $uploadDir;
        $this->tiposPermitidos = $tiposPermitidos;

        // Verificar existencia de carpetas/archivos
        if (!is_dir($this->uploadDir)) {
            mkdir($this->uploadDir, 0777, true);
        }
        if (!file_exists($this->jsonFile)) {
            file_put_contents($this->jsonFile, json_encode([]));
        }
    }

    /**
     * Guarda una película en el archivo JSON.
     *
     * @param array $data Datos enviados desde el formulario ($_POST).
     * @param array $file Archivo subido desde el formulario ($_FILES).
     * @return string Mensaje HTML con el resultado de la operación.
     */
    public function guardar($data, $file)
    {
        $mensaje = ""; 

        $titulo       = $data['titulo'] ?? '';
        $actores      = $data['actores'] ?? '';
        $director     = $data['director'] ?? '';
        $guion        = $data['guion'] ?? '';
        $produccion   = $data['produccion'] ?? '';
        $anio         = $data['anio'] ?? '';
        $nacionalidad = $data['nacionalidad'] ?? '';
        $genero       = $data['genero'] ?? '';
        $duracion     = $data['duracion'] ?? '';
        $restriccion  = $data['restriccion'] ?? '';
        $sinopsis     = $data['sinopsis'] ?? '';

        // Manejo de la imagen
        $imagenNombre = '';
        if (isset($file['imagen']) && $file['imagen']['error'] === 0) {
            $imagenNombre = basename($file['imagen']['name']);
            $rutaDestino = $this->uploadDir . $imagenNombre;
            $tipoImagen = strtolower(pathinfo($imagenNombre, PATHINFO_EXTENSION));

            if (!in_array($tipoImagen, $this->tiposPermitidos)) {
                $mensaje = "<div class='alert alert-danger'>Tipo de imagen no permitido.</div>";
            } elseif (!move_uploaded_file($file['imagen']['tmp_name'], $rutaDestino)) {
                $mensaje = "<div class='alert alert-danger'>Error al subir la imagen.</div>";
            }
        }

        if ($mensaje == "") {
                    // Leemos y actualizamos JSON
        $peliculas = json_decode(file_get_contents($this->jsonFile), true);
        $peliculas[] = [
            'titulo' => $titulo,
            'actores' => $actores,
            'director' => $director,
            'guion' => $guion,
            'produccion' => $produccion,
            'anio' => $anio,
            'nacionalidad' => $nacionalidad,
            'genero' => $genero,
            'duracion' => $duracion,
            'restriccion' => $restriccion,
            'sinopsis' => $sinopsis,
            'imagen' => $imagenNombre
        ];
        file_put_contents($this->jsonFile, json_encode($peliculas, JSON_PRETTY_PRINT));

        // Mensaje final
        $mensaje = "
        <div class='alert alert-success'>
          <h3 class='text-primary'>La película introducida es:</h3>
          <ul>
            <li><strong>Título:</strong> $titulo</li>
            <li><strong>Actores:</strong> $actores</li>
            <li><strong>Director:</strong> $director</li>
            <li><strong>Guión:</strong> $guion</li>
            <li><strong>Producción:</strong> $produccion</li>
            <li><strong>Año:</strong> $anio</li>
            <li><strong>Nacionalidad:</strong> $nacionalidad</li>
            <li><strong>Género:</strong> $genero</li>
            <li><strong>Duración:</strong> $duracion minutos</li>
            <li><strong>Restricciones de edad:</strong> $restriccion</li>
            <li><strong>Sinopsis:</strong> $sinopsis</li>
            <li><strong>Imagen:</strong><br>
              <img src='/ProgWebDinamica/uploads/$imagenNombre' class='img-fluid' alt='Imagen de la película'>
            </li>
          </ul>
        </div>";

        
        }        
        return $mensaje;


    }
}
