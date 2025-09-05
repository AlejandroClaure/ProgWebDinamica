<?php
require_once("../../../../Control/TP3/ej1/ArchivoController.php");

// Crear el controller y guardar el archivo
$controller = new ArchivoController();
$resultado = $controller->guardar($_POST, $_FILES);

// Incluir header con <base>
include("../../../estructura/header.php");
?>

<div class="container text-center mt-5">
  <h2 class="mb-4">Resultado Ejercicio 1 - TP3</h2>
  <?= $resultado ?>

  <div class="mt-3">
    
    <a href="estructura/TP3/ej1/formulario.php" class="btn btn-secondary">Volver</a>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>
