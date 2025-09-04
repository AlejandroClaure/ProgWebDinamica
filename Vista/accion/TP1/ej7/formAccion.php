<?php
// Incluimos la clase Calculadora
require_once("../../../../Control/TP1/ej7/Calculadora.php");

$resultado = "";

// Verificamos que llegaron todos los datos
if (isset($_POST['n1'], $_POST['n2'], $_POST['operacion'])) {
    
    $calc = new Calculadora($_POST['n1'], $_POST['n2'], $_POST['operacion']);
    $resultado .= $calc->calcular();
    $resultado .= "<br><a href='../../../estructura/TP1/ej7/index.php'>Volver</a>";

} else {
    $resultado = "Faltan datos en el formulario.<br>
                  <a href='../../../estructura/TP1/ej7/index.php'>Volver</a>";
}

echo $resultado;
