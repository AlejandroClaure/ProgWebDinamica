<?php
include("../../../estructura/header.php");
include("../../../../Control/TP2/ej3/Usuarios.php");

// Obtener datos del formulario
$usuarioIngresado = $_POST['usuario'] ?? '';
$claveIngresada   = $_POST['clave'] ?? '';

// Crear objeto de la clase Usuarios
$usuarios = new Usuarios();

// Verificar login
$loginExitoso = $usuarios->verificarLogin($usuarioIngresado, $claveIngresada);
?>

<div class="container text-center mt-5">
    <h2 class="mb-4">Resultado del Login</h2>
    <?php if ($loginExitoso): ?>
        <div class="alert alert-success">
            Bienvenido, <?php echo htmlspecialchars($usuarioIngresado); ?> !!
        </div>
    <?php else: ?>
        <div class="alert alert-danger">
            Usuario o contraseña incorrectos
        </div>
    <?php endif; ?>
    <a href="../../../estructura/TP2/ej3/index.php" class="btn btn-secondary mt-3">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
