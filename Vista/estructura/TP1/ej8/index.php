<?php include("../../../estructura/header.php"); ?>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Ejercicio 8 - TP1</h2>

  <!-- Formulario para calcular precio de entrada -->
  <form id="formulario" action="accion/TP1/ej8/formAccion.php" method="post" class="mx-auto" style="max-width: 400px;">
    <div class="mb-3">
      <label for="edad" class="form-label">Edad:</label>
      <input type="number" id="edad" name="edad" class="form-control" required>
    </div>

    <div class="form-check mb-3">
      <input type="checkbox" class="form-check-input" id="estudiante" name="estudiante" value="si">
      <label class="form-check-label" for="estudiante">¿Es estudiante?</label>
    </div>

    <button type="submit" class="btn btn-primary w-100">Calcular</button>
    <button type="reset" class="btn btn-secondary w-100 mt-2">Limpiar</button>
  </form>

  <!-- Botón para volver al inicio -->
  <div class="mt-3 text-center">
    <a href="estructura/index.php" class="btn btn-secondary">Volver al inicio.</a>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>