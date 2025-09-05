<?php
// Incluimos la clase Entradas
require_once("../../../../Control/TP1/ej8/EntradasController.php");

// Variable donde guardaremos el mensaje final
$resultado = "";

// Verificamos que se haya enviado la edad
if (isset($_POST['edad'])) {

    $edad = $_POST['edad'];
    $estudiante = isset($_POST['estudiante']); // true si está marcado

    $entrada = new Entradas($edad, $estudiante);
    $resultado = $entrada->calcularPrecio();

} else {
    // Mensaje de error si faltan datos
    $resultado = "Faltan datos en el formulario.";
}

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center">
  <h2 class="mb-4">Resultado Ejercicio 8</h2>
  <div class="alert alert-info" role="alert">
    <?php echo $resultado; ?>
  </div>
  <a href="estructura/TP1/ej8/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
