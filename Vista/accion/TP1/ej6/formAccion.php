<?php
// Incluimos la clase Deportes
require_once("../../../../Control/TP1/ej6/deportesController.php");

// Variable donde guardaremos el mensaje final
$resultado = "";

// Verificamos que se recibieron deportes
if (isset($_POST['deportes']) && is_array($_POST['deportes'])) {
    $deportes = new deportesController($_POST['deportes']);
    $resultado = $deportes->listar();
} else {
    // Mensaje de error si no se seleccionó ningún deporte
    $resultado = "No seleccionó ningún deporte.";
}

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center">
  <h2 class="mb-4">Resultado Ejercicio 6</h2>
  <div class="alert alert-info" role="alert">
    <?php echo $resultado; ?>
  </div>
  <a href="estructura/TP1/ej6/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
