<?php
// Incluimos la clase Numero
require_once("../../../../Control/TP1/ej1/Numero.php");

// Variable donde almacenaremos el mensaje final
$resultado = "";

// Verificamos que el usuario haya enviado un número
if (isset($_GET['numero'])) {
    // Creamos un objeto de la clase Numero
    $numero = new Numero($_GET['numero']);
    
    // Obtenemos el resultado llamando al método evaluar()
    $resultado = $numero->evaluar();
} else {
    // Si no se recibió ningún número, mensaje de error
    $resultado = "No se recibió ningún número.";
}

// Incluir header y footer para mantener la estructura
include_once("../../../estructura/header.php");
?>

<div class="container text-center">
  <h2 class="mb-4">Resultado Ejercicio 1</h2>
  <div class="alert alert-info" role="alert">
    <?php echo $resultado; ?>
  </div>
  <a href="../../../estructura/TP1/ej1/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include_once("../../../estructura/footer.php"); ?>
