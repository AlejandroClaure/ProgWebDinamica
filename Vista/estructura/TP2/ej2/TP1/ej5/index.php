<?php include("../../../../../estructura/header.php"); ?>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Ejercicio 5 - TP1</h2>

  <!-- Formulario que pide nombre, edad, estudios y sexo -->
  <form id="formulario" action="accion/TP1/ej5/formAccion.php" method="post" class="mx-auto" style="max-width: 400px;">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="edad" class="form-label">Edad:</label>
      <input type="number" id="edad" name="edad" class="form-control" required>
    </div>

    <div class="mb-3">
      <p class="mb-1">Nivel de estudios:</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estudios" id="sinEstudios" value="1" required>
        <label class="form-check-label" for="sinEstudios">Sin estudios</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estudios" id="primarios" value="2">
        <label class="form-check-label" for="primarios">Primarios</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estudios" id="secundarios" value="3">
        <label class="form-check-label" for="secundarios">Secundarios</label>
      </div>
    </div>

    <div class="mb-3">
      <label for="sexo" class="form-label">Sexo:</label>
      <select id="sexo" name="sexo" class="form-select" required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary w-100">Enviar</button>
  </form>

  <!-- Botón para volver al menú TP2 -->
  <div class="mt-3 text-center">
    <a href="estructura/TP2/ej2/index.php" class="btn btn-secondary">Volver Submenu TP2</a>
  </div>
</div>

<?php include("../../../../../estructura/footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script>$(document).ready(function(){ $("#formulario").validate(); });</script>
