<?php
$archivo = $_FILES['archivo'] ?? null;

// Variable donde guardaremos el mensaje final
$resultado = "";

if ($archivo) {
    $nombreArchivo = basename($archivo['name']); // nombre original
    $tipoArchivo   = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION)); // extensión

    // Validamos que sea .txt
    if ($tipoArchivo === 'txt') {
        $contenido = file_get_contents($archivo['tmp_name']); // leemos el contenido
        $resultado = "<h3>Contenido del archivo $nombreArchivo:</h3>
                      <textarea class='form-control' rows='10' readonly>$contenido</textarea>";
    } else {
        $resultado = "<div class='alert alert-danger'>Solo se permiten archivos .txt</div>";
    }
} else {
    $resultado = "<div class='alert alert-danger'>No se recibió ningún archivo.</div>";
}

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center mt-5">
  <h2 class="mb-4">Resultado Ejercicio 2 - TP3</h2>
  <div class="text-start">
    <?php echo $resultado; ?>
  </div>
  <a href="estructura/TP3/ej2/index.php" class="btn btn-secondary mt-3">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
