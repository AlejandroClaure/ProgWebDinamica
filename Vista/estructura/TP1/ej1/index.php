<?php include("../../../estructura/header.php"); ?>

<h2 class="text-center my-4">Ejercicio 1 - TP1</h2>

<!-- Formulario -->
<form id="formulario" action="accion/TP1/ej1/formAccion.php" method="get" class="mx-auto" style="max-width: 400px;">
  <div class="mb-3">
    <label for="numero" class="form-label">Ingrese un número:</label>
    <input type="number" id="numero" name="numero" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary w-100">Enviar</button>
</form>

<!-- Botón para volver al índice TP1 -->
<div class="mt-3 text-center">
  <a href="estructura/index.php" class="btn btn-secondary">Volver al inicio</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
