<?php
// Incluimos la clase Deportes
require_once("../../../../Control/TP1/ej6/Deportes.php");

$resultado = "";

// Verificamos que se recibieron deportes
if (isset($_POST['deportes']) && is_array($_POST['deportes'])) {
    
    $deportes = new Deportes($_POST['deportes']);
    $resultado .= $deportes->listar();
    $resultado .= "<br><a href='../../../estructura/TP1/ej6/index.php'>Volver</a>";

} else {
    $resultado = "No seleccionó ningún deporte.<br>
                  <a href='../../../estructura/TP1/ej6/index.php'>Volver</a>";
}

echo $resultado;
