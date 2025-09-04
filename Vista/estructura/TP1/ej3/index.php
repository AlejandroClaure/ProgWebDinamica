<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Ejercicio 3</title>
  <style>
    form {
      width: 300px;
      margin: auto;
    }
    label {
      display: block;
      margin: 8px 0;
    }
  </style>
</head>
<body>
  <!-- Formulario para capturar los datos de la persona -->
  <!-- Usa POST para enviar la información -->
  <form action="../../../accion/TP1/ej3/formAccion.php" method="post">
    <label>Nombre: <input type="text" name="nombre" required /></label>
    <label>Apellido: <input type="text" name="apellido" required /></label>
    <label>Edad: <input type="number" name="edad" min="0" required /></label>
    <label>Dirección: <input type="text" name="direccion" required /></label>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
