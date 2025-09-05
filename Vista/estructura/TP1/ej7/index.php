<?php include("../../../estructura/header.php"); ?>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Ejercicio 7 - TP1</h2>

  <!-- Formulario para realizar operaciones de la calculadora -->
  <form id="formulario" action="accion/TP1/ej7/formAccion.php" method="post" class="mx-auto" style="max-width: 400px;">
    <div class="mb-3">
      <label for="n1" class="form-label">Número 1:</label>
      <input type="number" id="n1" name="n1" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="operacion" class="form-label">Operación:</label>
      <select id="operacion" name="operacion" class="form-select">
        <option value="+">Sumar</option>
        <option value="-">Restar</option>
        <option value="*">Multiplicar</option>
        <option value="/">Dividir</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="n2" class="form-label">Número 2:</label>
      <input type="number" id="n2" name="n2" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Calcular</button>
  </form>

  <!-- Botón para volver al índice TP1 -->
  <div class="mt-3 text-center">
    <a href="estructura/TP1/index.php" class="btn btn-secondary">Volver al inicio TP1</a>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>
