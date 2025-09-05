<?php
// Cargamos el controlador
require_once(__DIR__ . "../../../../Control/TP2/ej4/PeliculasController.php");

// Creamos instancia y guardamos los datos enviados por POST
$controller = new PeliculasController();
$resultado = $controller->guardar($_POST);

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center mt-5">
  <h2 class="mb-4">Resultado Ejercicio 4</h2>
  <div class="alert alert-info" role="alert">
    <?= $resultado ?>
  </div>

  <!-- Botones para volver -->
  <div class="mt-3">
    <a href="estructura/TP2/ej4/peliculasForm.php" class="btn btn-primary">Cargar otra película</a>
    <a href="estructura/TP2/ej4/listadoPeliculas.php" class="btn btn-secondary">Ver listado</a>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>
