<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Ejercicio 7</title>
</head>
<body>
  <form action="../../../accion/TP1/ej7/formAccion.php" method="post">
    <input type="number" name="n1" required />
    <select name="operacion">
      <option value="+">Sumar</option>
      <option value="-">Restar</option>
      <option value="*">Multiplicar</option>
      <option value="/">Dividir</option>
    </select>
    <input type="number" name="n2" required />
    <button type="submit">Calcular</button>
  </form>
</body>
</html>
