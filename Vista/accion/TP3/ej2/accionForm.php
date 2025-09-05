<?php
require_once("../../../../Control/TP3/ej2/SubirController.php");

// Creamos el controlador y procesamos el archivo
$controller = new SubirController();
if (isset($_FILES['archivo'])) {
    $resultado = $controller->procesar($_FILES['archivo']);
} else {
    $resultado = "<div class='alert alert-danger'>No se recibió ningún archivo.</div>";
}

// Incluir header y footer
include("../../../estructura/header.php");
?>

<div class="container text-center mt-5">
  <h2 class="mb-4">Resultado Ejercicio 2 - TP3</h2>
  <div class="text-start">
    <?= $resultado ?>
  </div>
  <a href="estructura/TP3/ej2/formulario.php" class="btn btn-secondary mt-3">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>