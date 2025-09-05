<?php
// Incluimos la clase Calculadora
require_once("../../../../Control/TP1/ej7/Calculadora.php");

// Variable donde guardaremos el mensaje final
$resultado = "";

// Verificamos que llegaron todos los datos
if (isset($_POST['n1'], $_POST['n2'], $_POST['operacion'])) {
    $calc = new Calculadora($_POST['n1'], $_POST['n2'], $_POST['operacion']);
    $resultado = $calc->calcular();
} else {
    // Mensaje de error si faltan datos
    $resultado = "Faltan datos en el formulario.";
}

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center">
  <h2 class="mb-4">Resultado Ejercicio 7</h2>
  <div class="alert alert-info" role="alert">
    <?php echo $resultado; ?>
  </div>
  <a href="estructura/TP1/ej7/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
