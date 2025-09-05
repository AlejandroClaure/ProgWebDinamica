<?php
require_once("../../../../Control/TP3/ej3/PeliculasController.php");

//rutas necesarias
$jsonFile = __DIR__ . "/peliculas.json";        // crea el JSON en la misma carpeta
$uploadDir = __DIR__ . "/../../../../uploads/"; // carpeta para imágenes

$controller = new PeliculasController($jsonFile, $uploadDir);
$resultado = $controller->guardar($_POST, $_FILES);

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-start mt-2">
  <h2 class="mb-4">Resultado Ejercicio 3 - TP3</h2>
  <div class="alert alert-info" role="alert">
    <?= $resultado ?>
  </div>

  <div class="mt-3">
    <a href="estructura/TP3/ej3/formulario.php" class="btn btn-secondary">Volver</a>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>
