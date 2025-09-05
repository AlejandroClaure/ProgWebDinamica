<?php include("../../../estructura/header.php"); ?>

<div class="login-container">
  <div class="login-box">
    <h3 class="text-center mb-4">Member Login</h3>
    <form id="loginForm" action="../../../accion/TP2/ej3/formAccion.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="usuario" id="usuario" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="clave" id="clave" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success w-100">Login</button>
    </form>
  </div>
</div>

<?php include("../../../estructura/footer.php"); ?>

<!-- Estilos y scripts -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f8f9fa;
}
.login-box {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
    width: 350px;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
<script src="validacionLogin.js"></script>
