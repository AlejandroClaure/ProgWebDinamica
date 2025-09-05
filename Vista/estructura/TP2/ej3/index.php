<?php include("../../../estructura/header.php"); ?>

<div class="container d-flex justify-content-center mt-5">
  <div class="login-box shadow-lg p-4 rounded bg-white">
    <h3 class="text-center mb-4">Member Login</h3>
    <form id="loginForm" action="accion/TP2/ej3/formAccion.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Username"required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="clave" id="clave" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-success w-100">Login</button>
    </form>

    <!-- Botón para volver al inicio -->
    <div class="mt-3 text-center">
      <a href="estructura/index.php" class="btn btn-secondary">Volver al inicio</a>
    </div>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>

<!-- Estilos y scripts -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
<script src="validacionLogin.js"></script>
