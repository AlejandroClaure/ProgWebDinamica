<?php
// Incluimos la clase Estudiante
require_once("../../../../Control/TP1/ej5/Estudiante.php");

$resultado = "";

// Verificamos que llegaron todos los datos
if (isset($_POST['nombre'], $_POST['edad'], $_POST['estudios'], $_POST['sexo'])) {
    
    // Creamos un objeto Estudiante
    $estudiante = new Estudiante(
        $_POST['nombre'],
        $_POST['edad'],
        $_POST['estudios'],
        $_POST['sexo']
    );

    // Armamos la salida
    $resultado .= $estudiante->presentarDatos();
    $resultado .= "<br><a href='../../../estructura/TP1/ej5/index.php'>Volver</a>";

} else {
    $resultado = "Faltan datos en el formulario.<br>
                  <a href='../../../estructura/TP1/ej5/index.php'>Volver</a>";
}

echo $resultado;
