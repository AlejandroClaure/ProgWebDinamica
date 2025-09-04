<?php
class PeliculasController {
    private $jsonFile; // archivo JSON donde guardaremos las películas
    private $uploadDir; // carpeta donde guardaremos imágenes

    public function __construct() {
        $this->jsonFile = __DIR__ . "/../../../uploads/peliculas.json";
        $this->uploadDir = __DIR__ . "/../../../uploads/";
        if (!is_dir($this->uploadDir)) mkdir($this->uploadDir, 0777, true);
        if (!file_exists($this->jsonFile)) file_put_contents($this->jsonFile, json_encode([]));
    }

    // Función para guardar una película
    public function guardar($data, $file) {
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
            $tiposPermitidos = ['jpg','jpeg','png','gif'];

            if (!in_array($tipoImagen, $tiposPermitidos)) {
                return "<div class='alert alert-danger'>Tipo de imagen no permitido.</div>";
            }

            if (!move_uploaded_file($file['imagen']['tmp_name'], $rutaDestino)) {
                return "<div class='alert alert-danger'>Error al subir la imagen.</div>";
            }
        }

        // Leemos el JSON existente
        $peliculas = json_decode(file_get_contents($this->jsonFile), true);

        // Creamos la nueva película
        $nuevaPelicula = [
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

        $peliculas[] = $nuevaPelicula;

        // Guardamos nuevamente en el JSON
        file_put_contents($this->jsonFile, json_encode($peliculas, JSON_PRETTY_PRINT));

        // Devolvemos HTML con la info de la película
        return "
        <div class='alert alert-success'>
          <h3 class='text-primary'>La película introducida es:</h3>
          <ol>
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
              <img src='../../../uploads/$imagenNombre' class='img-fluid' alt='Imagen de la película'>
            </li>
          </ol>
        </div>";
    }
}
?>
