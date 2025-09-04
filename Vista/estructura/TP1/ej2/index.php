<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Ejercicio 2</title>
</head>
<body>
  <!-- Formulario que pide horas trabajadas/cursadas por día -->
  <!-- El action apunta al archivo formAccion.php (intermediario) -->
  <form action="../../../accion/TP1/ej2/formAccion.php" method="get">
    <label>Lunes: <input type="number" name="lunes" min="0" required /></label><br />
    <label>Martes: <input type="number" name="martes" min="0" required /></label><br />
    <label>Miércoles: <input type="number" name="miercoles" min="0" required /></label><br />
    <label>Jueves: <input type="number" name="jueves" min="0" required /></label><br />
    <label>Viernes: <input type="number" name="viernes" min="0" required /></label><br />
    <button type="submit">Calcular</button>
  </form>
</body>
</html>
