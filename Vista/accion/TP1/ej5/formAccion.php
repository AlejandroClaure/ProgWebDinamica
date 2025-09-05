<?php
// Incluimos la clase Estudiante
require_once("../../../../Control/TP1/ej5/EstudianteController.php");

// Variable donde guardaremos el mensaje final
$resultado = "";

// Verificamos que llegaron todos los datos
if (isset($_POST['nombre'], $_POST['edad'], $_POST['estudios'], $_POST['sexo'])) {
    
    // Creamos un objeto Estudiante con los datos recibidos
    $estudiante = new Estudiante(
        $_POST['nombre'],
        $_POST['edad'],
        $_POST['estudios'],
        $_POST['sexo']
    );

    // Obtenemos la presentación del estudiante
    $resultado = $estudiante->presentarDatos();

} else {
    // Mensaje de error si faltan datos
    $resultado = "Faltan datos en el formulario.";
}

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center">
  <h2 class="mb-4">Resultado Ejercicio 5</h2>
  <div class="alert alert-info" role="alert">
    <?php echo $resultado; ?>
  </div>
  <a href="estructura/TP1/ej5/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
