<?php
require_once("../../../../Control/TP3/ej3/PeliculasController.php");

// Creamos el controlador
$controller = new PeliculasController();

// Guardamos la película y obtenemos el resultado HTML
$resultado = $controller->guardar($_POST, $_FILES);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado de carga</title>
  <link rel="stylesheet" href="../../../css/TP3/ej3/bootstrap.min.css">
</head>
<body class="container mt-4">
  <?= $resultado ?>
  <div class="mt-3">
    <a href='../../../estructura/TP3/ej3/formulario.php' class="btn btn-secondary">Volver</a>
  </div>
</body>
</html>
