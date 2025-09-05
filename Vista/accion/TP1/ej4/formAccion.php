<?php
// Incluimos la clase Persona
require_once("../../../../Control/TP1/ej4/PersonaController.php");

// Variable donde almacenaremos el mensaje final
$resultado = "";

// Verificamos que todos los campos fueron enviados
if (isset($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['direccion'])) {
    
    // Creamos un objeto Persona con los datos del formulario
    $persona = new Persona(
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['edad'],
        $_POST['direccion']
    );

    // Concatenamos los mensajes
    $resultado .= $persona->presentarse();
    $resultado .= "<br>";
    $resultado .= $persona->verificarEdad();

} else {
    // Si faltan datos
    $resultado = "Faltan datos en el formulario.";
}

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center">
  <h2 class="mb-4">Resultado Ejercicio 4</h2>
  <div class="alert alert-info" role="alert">
    <?php echo $resultado; ?>
  </div>
  <a href="estructura/TP1/ej4/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
