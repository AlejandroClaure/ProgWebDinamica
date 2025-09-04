<?php
// Incluimos la clase Entradas
require_once("../../../../Control/TP1/ej8/Entradas.php");

$resultado = "";

// Verificamos que se haya enviado la edad
if (isset($_POST['edad'])) {

    $edad = $_POST['edad'];
    $estudiante = isset($_POST['estudiante']);

    $entrada = new Entradas($edad, $estudiante);

    $resultado .= $entrada->calcularPrecio();
    $resultado .= "<br><a href='../../../estructura/TP1/ej8/index.php'>Volver</a>";

} else {
    $resultado = "Faltan datos en el formulario.<br>
                  <a href='../../../estructura/TP1/ej8/index.php'>Volver</a>";
}

echo $resultado;
