<?php
// Ruta al JSON donde guardamos las películas
$jsonFile = __DIR__ . "/../../../uploads/peliculas.json";

// Si no existe el archivo, lo creamos vacío
if (!file_exists($jsonFile)) {
    file_put_contents($jsonFile, json_encode([]));
}

// Leemos el JSON y decodificamos a array
$peliculas = json_decode(file_get_contents($jsonFile), true);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listado de Películas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

  <h2 class="mb-4 text-primary">🎬 Listado de Películas</h2>

  <?php if (empty($peliculas)): ?>
      <div class="alert alert-warning">No hay películas cargadas aún.</div>
  <?php else: ?>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Título</th>
              <th>Actores</th>
              <th>Director</th>
              <th>Guión</th>
              <th>Producción</th>
              <th>Año</th>
              <th>Nacionalidad</th>
              <th>Género</th>
              <th>Duración (min)</th>
              <th>Restricción</th>
              <th>Sinopsis</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($peliculas as $index => $pelicula): ?>
              <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $pelicula['titulo'] ?></td>
                <td><?= $pelicula['actores'] ?></td>
                <td><?= $pelicula['director'] ?></td>
                <td><?= $pelicula['guion'] ?></td>
                <td><?= $pelicula['produccion'] ?></td>
                <td><?= $pelicula['anio'] ?></td>
                <td><?= $pelicula['nacionalidad'] ?></td>
                <td><?= $pelicula['genero'] ?></td>
                <td><?= $pelicula['duracion'] ?></td>
                <td><?= $pelicula['restriccion'] ?></td>
                <td><?= $pelicula['sinopsis'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
  <?php endif; ?>

  <div class="mt-3">
    <a href="peliculasForm.php" class="btn btn-primary">Cargar nueva película</a>
  </div>

</body>
</html>
