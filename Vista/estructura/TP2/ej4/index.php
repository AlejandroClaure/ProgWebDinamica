<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <title>Ejercicio 4 - Carga de Películas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../css/Tp2/ej4/estilosPeliculas.css" rel="stylesheet" />
</head>

<body class="container mt-4">
  <div class="card shadow-lg">
    <div class="card-body">
      <h2 class="mb-4 text-primary">🎬 Cinem@</h2>

      <form id="peliculaForm" action="../../../accion/TP2/ej4/formAccion.php" method="post" novalidate>
        <!-- Título y actores -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Actores</label>
            <input type="text" name="actores" class="form-control" required />
          </div>
        </div>

        <!-- Director y guion -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Director</label>
            <input type="text" name="director" class="form-control" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Guión</label>
            <input type="text" name="guion" class="form-control" required />
          </div>
        </div>

        <!-- Producción, año y nacionalidad -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Producción</label>
            <input type="text" name="produccion" class="form-control" required />
          </div>
          <div class="col-md-2">
            <label class="form-label">Año</label>
            <input type="text" name="anio" class="form-control" maxlength="4" required />
          </div>
          <div class="col-md-4">
            <label class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control" required />
          </div>
        </div>

        <!-- Género y duración -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Género</label>
            <select name="genero" class="form-select" required>
              <option value="">Seleccione...</option>
              <option>Comedia</option>
              <option>Drama</option>
              <option>Terror</option>
              <option>Románticas</option>
              <option>Suspenso</option>
              <option>Otras</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">Duración (minutos)</label>
            <input type="text" name="duracion" class="form-control" maxlength="3" required />
          </div>
        </div>

        <!-- Restricciones -->
        <div class="mb-3">
          <label class="form-label">Restricciones de edad</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="restriccion" value="Todo Público" checked />
            <label class="form-check-label">Todo Público</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="restriccion" value="Mayores de 7 años" />
            <label class="form-check-label">Mayores de 7 años</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="restriccion" value="Mayores de 18 años" />
            <label class="form-check-label">Mayores de 18 años</label>
          </div>
        </div>

        <!-- Sinopsis -->
        <div class="mb-3">
          <label class="form-label">Sinopsis</label>
          <textarea name="sinopsis" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-secondary">Borrar</button>
      </form>
    </div>
  </div>



<!-- Botón para volver al inicio -->
<div class="mt-3 text-center">
  <a href="estructura/index.php" class="btn btn-secondary">Volver al inicio.</a>
</div>

  <!-- jQuery y validate -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
  <script src="../../js/Tp2/ej4/validacionPeliculas.js"></script>
</body>
</html>
