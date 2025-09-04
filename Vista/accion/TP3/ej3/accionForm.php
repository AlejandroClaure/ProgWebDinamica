<?php
require_once("../../../../Control/TP3/ej3/PeliculasController.php");

// Creamos el controlador y guardamos la película
$controller = new PeliculasController();
$resultado = $controller->guardar($_POST, $_FILES);

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center mt-5">
  <h2 class="mb-4">Resultado Ejercicio 3 - TP3</h2>
  <div class="alert alert-info" role="alert">
    <?= $resultado ?>
  </div>

  <div class="mt-3">
    <a href="../../../estructura/TP3/ej3/formulario.php" class="btn btn-secondary">Volver</a>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>
