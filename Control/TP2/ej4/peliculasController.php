<?php
class PeliculasController {
    private $file;

    public function __construct() {
        // Archivo JSON en /uploads
        $this->file = __DIR__ . "/../../../uploads/peliculas.json";

        // Si no existe, lo creamos vacío
        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
    }

    public function guardar($data) {
        // Sanitizar para evitar XSS
        $pelicula = [
            "titulo"       => htmlspecialchars($data['titulo'] ?? ''),
            "actores"      => htmlspecialchars($data['actores'] ?? ''),
            "director"     => htmlspecialchars($data['director'] ?? ''),
            "guion"        => htmlspecialchars($data['guion'] ?? ''),
            "produccion"   => htmlspecialchars($data['produccion'] ?? ''),
            "anio"         => (int) ($data['anio'] ?? 0),
            "nacionalidad" => htmlspecialchars($data['nacionalidad'] ?? ''),
            "genero"       => htmlspecialchars($data['genero'] ?? ''),
            "duracion"     => (int) ($data['duracion'] ?? 0),
            "restriccion"  => htmlspecialchars($data['restriccion'] ?? ''),
            "sinopsis"     => htmlspecialchars($data['sinopsis'] ?? '')
        ];

        // Leer JSON existente
        $contenido = json_decode(file_get_contents($this->file), true);

        // Agregar película
        $contenido[] = $pelicula;

        // Guardar nuevamente
        if (file_put_contents($this->file, json_encode($contenido, JSON_PRETTY_PRINT))) {
            // Mostrar confirmación con los datos
            return "
            <div class='alert alert-success'>
              <h3 class='text-primary'>La película introducida es:</h3>
              <ul>
                <li><strong>Título:</strong> {$pelicula['titulo']}</li>
                <li><strong>Actores:</strong> {$pelicula['actores']}</li>
                <li><strong>Director:</strong> {$pelicula['director']}</li>
                <li><strong>Guión:</strong> {$pelicula['guion']}</li>
                <li><strong>Producción:</strong> {$pelicula['produccion']}</li>
                <li><strong>Año:</strong> {$pelicula['anio']}</li>
                <li><strong>Nacionalidad:</strong> {$pelicula['nacionalidad']}</li>
                <li><strong>Género:</strong> {$pelicula['genero']}</li>
                <li><strong>Duración:</strong> {$pelicula['duracion']} minutos</li>
                <li><strong>Restricciones de edad:</strong> {$pelicula['restriccion']}</li>
                <li><strong>Sinopsis:</strong> {$pelicula['sinopsis']}</li>
              </ul>
            </div>";
        } else {
            return "<div class='alert alert-danger'>Error al guardar la película en JSON.</div>";
        }
    }
}
