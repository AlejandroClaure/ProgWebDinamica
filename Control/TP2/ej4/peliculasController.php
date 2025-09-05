<?php
/**
 * Clase PeliculasController
 * 
 * Controla el guardado de películas en un archivo JSON.
 */
class PeliculasController {
    /**
     * @var string Ruta del archivo JSON donde se guardan las películas
     */
    private $file;

    /**
     * Constructor de la clase.
     * Crea el archivo JSON si no existe.
     */
    public function __construct() {
        $this->file = __DIR__ . "/uploads/peliculastp2.json";

        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
    }

    /**
     * Guarda una película en el archivo JSON.
     *
     * @param array $data Datos de la película:
     *                    - 'titulo' string
     *                    - 'actores' string
     *                    - 'director' string
     *                    - 'guion' string
     *                    - 'produccion' string
     *                    - 'anio' int
     *                    - 'nacionalidad' string
     *                    - 'genero' string
     *                    - 'duracion' int
     *                    - 'restriccion' string
     *                    - 'sinopsis' string
     * 
     * @return string HTML con mensaje de éxito o error
     */
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

        // Leer contenido JSON existente
        $contenido = json_decode(file_get_contents($this->file), true);

        // Agregar película al contenido
        $contenido[] = $pelicula;

        // Variable acumuladora para el resultado
        $resultado = "";

        // Guardar nuevamente en el archivo
        if (file_put_contents($this->file, json_encode($contenido, JSON_PRETTY_PRINT))) {
            $resultado = "
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
            $resultado = "<div class='alert alert-danger'>Error al guardar la película en JSON.</div>";
        }

        return $resultado;
    }
}
