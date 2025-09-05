<?php
// Incluimos la clase horasController desde la carpeta Control
require_once(__DIR__ . "/../../../../Control/TP1/ej2/horasController.php");

// Variable donde guardaremos el mensaje final
$resultado = "";

// Verificamos que todos los campos fueron enviados
if (isset($_GET['lunes'], $_GET['martes'], $_GET['miercoles'], $_GET['jueves'], $_GET['viernes'])) {
    
    // Creamos un array asociativo con los valores recibidos
    $dias = [
        "lunes"     => $_GET['lunes'],
        "martes"    => $_GET['martes'],
        "miercoles" => $_GET['miercoles'],
        "jueves"    => $_GET['jueves'],
        "viernes"   => $_GET['viernes']
    ];
    
    // Creamos un objeto de la clase Horas
    $horas = new horasController($dias);
    
    // Obtenemos el total de horas
    $total = $horas->calcularTotal();
    
    // Guardamos el resultado en la variable
    $resultado = "Total de horas cursadas en la semana: $total";

} else {
    // Si falta algún dato
    $resultado = "Faltan datos en el formulario.";
}

// Incluir el header
include("../../../estructura/header.php");
?>

<div class="container text-center">
  <h2 class="mb-4">Resultado Ejercicio 2</h2>
  <div class="alert alert-info" role="alert">
    <?php echo $resultado; ?>
  </div>
  <a href="estructura/TP1/ej2/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
