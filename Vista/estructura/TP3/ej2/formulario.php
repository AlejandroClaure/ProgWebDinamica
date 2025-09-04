<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 2 – Subir TXT</title>
  <link rel="stylesheet" href="../../../css/Tp3/ej2/bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>Ejercicio 2 - Subir archivo .txt y mostrar contenido</h2>

<form action="../../../accion/TP3/ej2/accionForm.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Seleccionar archivo .txt</label>
    <input type="file" name="archivo" class="form-control" accept=".txt" required>
  </div>
  <button type="submit" class="btn btn-primary">Subir y mostrar</button>
</form>

</body>
</html>
