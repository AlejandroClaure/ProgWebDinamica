<?php include("../../header.php"); ?>

<div class="container mt-4">
  <h2>Ejercicio 2 - Subir archivo .TXT</h2>
  
  <form action="../../../accion/TP3/ej2/accionForm.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Seleccionar archivo .txt</label>
      <input type="file" name="archivo" class="form-control" accept=".txt" required>
    </div>
    <button type="submit" class="btn btn-primary">Subir y mostrar</button>
    <a href="estructura/index.php" class="btn btn-secondary">Volver al inicio</a>

  </form>

</div>
<?php include("../../footer.php"); ?>