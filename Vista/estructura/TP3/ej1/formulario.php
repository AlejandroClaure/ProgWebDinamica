<?php include("../../header.php"); ?>

<div class="container mt-4">
  <h2>Ejercicio 1 - Subir archivo (.doc o .pdf, máximo 2MB)</h2>

  
  <form action="accion/TP3/ej1/accionForm.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Seleccionar archivo</label>
      <input type="file" name="archivo" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Subir</button>
  </form>
</div>

<?php include("../../footer.php"); ?>
