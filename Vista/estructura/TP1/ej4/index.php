<?php include("../../../estructura/header.php"); ?>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Ejercicio 4 - TP1</h2>

  <!-- Formulario que pide los datos de la persona -->
  <form id="formulario" action="accion/TP1/ej3/formAccion.php" method="post" class="mx-auto" style="max-width: 400px;">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text" id="apellido" name="apellido" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="edad" class="form-label">Edad:</label>
      <input type="number" id="edad" name="edad" class="form-control" min="0" required>
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text" id="direccion" name="direccion" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Enviar</button>
  </form>

  <!-- Botón para volver al inicio -->
  <div class="mt-3 text-center">
    <a href="estructura/index.php" class="btn btn-secondary">Volver al inicio.</a>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>