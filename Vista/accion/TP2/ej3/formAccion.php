<?php
// Definimos un arreglo de usuarios "hardcodeado" con usuario y contraseña
$usuarios = [
  ["usuario" => "admin", "clave" => "admin1234"],
  ["usuario" => "juan",  "clave" => "juan2023"],
  ["usuario" => "maria", "clave" => "maria456"]
];

// Obtenemos los valores ingresados por el formulario mediante POST
$usuarioIngresado = $_POST['usuario'] ?? '';
$claveIngresada   = $_POST['clave'] ?? '';

// Variable donde guardaremos el mensaje final
$resultado = "";

// Recorremos el array de usuarios para verificar login
$loginExitoso = false;
foreach ($usuarios as $user) {
    if ($user['usuario'] === $usuarioIngresado && $user['clave'] === $claveIngresada) {
        $loginExitoso = true;
        break;
    }
}

// Creamos el mensaje según el resultado del login
if ($loginExitoso) {
    $resultado = "<span class='text-success'>Bienvenido, $usuarioIngresado</span>";
} else {
    $resultado = "<span class='text-danger'>Usuario o contraseña incorrectos</span>";
}

// Incluir header y footer para mantener la estructura
include("../../../estructura/header.php");
?>

<div class="container text-center mt-5">
  <h2 class="mb-4">Resultado Ejercicio 3</h2>
  <div class="alert alert-info" role="alert">
    <?php echo $resultado; ?>
  </div>
  <a href="../../../estructura/TP2/ej3/login.php" class="btn btn-secondary">Volver</a>
</div>

<?php include("../../../estructura/footer.php"); ?>
