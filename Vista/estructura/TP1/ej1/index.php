<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Ejercicio 1</title>
</head>
<body>
  <!-- Formulario que pide un número al usuario -->
  <!-- El atributo action apunta al archivo formAccion.php que está en Vista/accion -->
  <!-- Se usa method="get" para enviar el número a través de la URL -->
  <form action="../../../accion/TP1/ej1/formAccion.php" method="get">
    <label>Ingrese un número:</label>
    <!-- Input de tipo number (solo acepta números) -->
    <!-- El name="numero" es la clave con la que se envía el valor -->
    <input type="number" name="numero" required />
    <!-- Botón para enviar el formulario -->
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
