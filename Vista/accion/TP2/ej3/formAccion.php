<?php
// Definimos un arreglo de usuarios "hardcodeado" con usuario y contraseña
$usuarios = [
  ["usuario" => "admin", "clave" => "admin1234"],
  ["usuario" => "juan",  "clave" => "juan2023"],
  ["usuario" => "maria", "clave" => "maria456"]
];

// Obtenemos los valores ingresados por el formulario mediante POST
// Si no existen, usamos cadena vacía por defecto
$usuarioIngresado = $_POST['usuario'] ?? '';
$claveIngresada   = $_POST['clave'] ?? '';

// Variable que indica si el login fue exitoso
$loginExitoso = false;

// Recorremos el array de usuarios
foreach ($usuarios as $user) {
  // Comparamos si el usuario y la clave ingresados coinciden con algún registro
  if ($user['usuario'] === $usuarioIngresado && $user['clave'] === $claveIngresada) {
    $loginExitoso = true; // Marcamos que el login fue exitoso
    break;                // Salimos del bucle ya que encontramos coincidencia
  }
}

// Mostramos mensaje dependiendo si el login fue exitoso o no
if ($loginExitoso) {
  echo "<h2 class='text-success text-center mt-5'>Bienvenido, $usuarioIngresado </h2>";
} else {
  echo "<h2 class='text-danger text-center mt-5'>Usuario o contraseña incorrectos </h2>";
}

// Link para volver al formulario de login
echo "<div class='text-center mt-3'><a href='../../../estructura/TP2/ej3/login.php'>Volver</a></div>";
