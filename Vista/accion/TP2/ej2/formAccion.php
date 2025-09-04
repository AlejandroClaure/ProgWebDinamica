<?php
// Variable donde guardaremos el mensaje final
$resultado = "";

// Verificamos que llegaron todos los datos
if (isset($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['direccion'])) {
    $resultado = "Hola, yo soy {$_POST['nombre']} {$_POST['apellido']}, 
    tengo {$_POST['edad']} años y vivo en {$_POST['direccion']}.";
} else {
    $resultado = "Faltan datos.";
}

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center">
  <h2 class="mb-4">Resultado Ejercicio 2</h2>
  <div class="alert alert-info" role="alert">
    <?php echo $resultado; ?>
  </div>
  <a href="../../../estructura/TP2/ej2/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
