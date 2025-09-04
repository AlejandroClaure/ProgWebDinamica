<?php include("../../../estructura/header.php"); ?>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Ejercicio 6 - TP1</h2>

  <!-- Formulario que pide los deportes que practica -->
  <form action="../../../accion/TP1/ej6/formAccion.php" method="post" class="mx-auto" style="max-width: 400px;">
    <p class="mb-2">Seleccione los deportes que practica:</p>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="deportes[]" id="futbol" value="Futbol">
      <label class="form-check-label" for="futbol">Fútbol</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="deportes[]" id="basket" value="Basket">
      <label class="form-check-label" for="basket">Basket</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="deportes[]" id="tenis" value="Tenis">
      <label class="form-check-label" for="tenis">Tenis</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="deportes[]" id="voley" value="Voley">
      <label class="form-check-label" for="voley">Vóley</label>
    </div>

    <button type="submit" class="btn btn-primary w-100 mt-3">Enviar</button>
  </form>

  <!-- Botón para volver al índice TP1 -->
  <div class="mt-3 text-center">
    <a href="../../../estructura/TP1/index.php" class="btn btn-secondary">Volver al inicio TP1</a>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>
