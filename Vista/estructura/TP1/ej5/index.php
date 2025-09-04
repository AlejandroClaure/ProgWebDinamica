<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Ejercicio 5</title>
</head>
<body>
  <!-- Formulario que pide nombre, edad, estudios y sexo -->
  <!-- Usa POST para enviar la información -->
  <form action="../../../accion/TP1/ej5/formAccion.php" method="post">
    <label>Nombre: <input type="text" name="nombre" required /></label><br />
    <label>Edad: <input type="number" name="edad" required /></label><br />

    <p>Nivel de estudios:</p>
    <input type="radio" name="estudios" value="1" required /> Sin estudios<br />
    <input type="radio" name="estudios" value="2" /> Primarios<br />
    <input type="radio" name="estudios" value="3" /> Secundarios<br />

    <p>Sexo:</p>
    <select name="sexo" required>
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>
    </select><br /><br />

    <button type="submit">Enviar</button>
  </form>
</body>
</html>
