<?php
// Lista de usuarios del sistema
$usuarios = [
    ["usuario" => "admin", "clave" => "admin1234"],
    ["usuario" => "juan", "clave" => "juan2023"],
    ["usuario" => "maria", "clave" => "maria456"]
];

$usuarioIngresado = $_POST['usuario'] ?? '';
$claveIngresada   = $_POST['clave'] ?? '';

$loginExitoso = false;

// Verificar credenciales
foreach ($usuarios as $user) {
    if ($user['usuario'] === $usuarioIngresado && $user['clave'] === $claveIngresada) {
        $loginExitoso = true;
        break;
    }
}

// Mostrar resultado
if ($loginExitoso) {
    echo "<h2>Bienvenido, $usuarioIngresado !!</h2>";
} else {
    echo "<h2 style='color:red;'>Usuario o contraseña incorrectos </h2>";
}
?>
