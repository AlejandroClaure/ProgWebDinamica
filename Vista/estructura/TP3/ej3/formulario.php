<?php include("../../header.php"); ?>

<div class="container mt-4 card shadow-lg">
  <div class="card-body">
    <div class="container gx-5">
      <h2 class="mb-4 text-primary">🎬 Cinem@</h2>
    </div>

    <!-- El formulario ahora permite subir archivos con enctype -->
    <form
      id="peliculaForm"
      action="../../../accion/TP3/ej3/accionForm.php"
      method="post"
      enctype="multipart/form-data"
    >
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
          <input
            type="number"
            name="anio"
            class="form-control"
            min="1900"
            max="9999"
            required
          />
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
            <option>Acción</option>
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
          <input
            type="number"
            name="duracion"
            class="form-control"
            min="0"
            max="999"
            required
          />
        </div>
      </div>

      <!-- Restricciones -->
      <div class="mb-3">
        <label class="form-label">Restricciones de edad</label>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="restriccion"
            value="Todo Público"
            checked
          />
          <label class="form-check-label">Todo Público</label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="restriccion"
            value="Mayores de 7 años"
          />
          <label class="form-check-label">Mayores de 7 años</label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="restriccion"
            value="Mayores de 18 años"
          />
          <label class="form-check-label">Mayores de 18 años</label>
        </div>
      </div>

      <!-- Sinopsis -->
      <div class="mb-3">
        <label class="form-label">Sinopsis</label>
        <textarea
          name="sinopsis"
          class="form-control"
          rows="4"
          required
        ></textarea>
      </div>

      <!-- Imagen de la película -->
      <div class="mb-3">
        <label class="form-label">Imagen de la película</label>
        <input
          type="file"
          name="imagen"
          class="form-control"
          accept="image/*"
          required
        />
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

<?php include("../../footer.php"); ?>
