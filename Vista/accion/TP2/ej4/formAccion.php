<?php
// Cargamos el controlador
require_once(__DIR__ . "/../../../../Control/Tp2/ej4/peliculasController.php");

// Creamos instancia y guardamos los datos enviados por POST
$controller = new PeliculasController();
$resultado = $controller->guardar($_POST);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado de carga</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

  <!-- Resultado devuelto por el controlador -->
  <?= $resultado ?>

  <!-- Botones para volver -->
  <div class="mt-3">
    <a href="../../Estructura/Tp2/ej4/peliculasForm.php" class="btn btn-primary">Cargar otra película</a>
    <a href="../../Estructura/Tp2/ej4/listadoPeliculas.php" class="btn btn-secondary">Ver listado</a>
  </div>

</body>
</html>
