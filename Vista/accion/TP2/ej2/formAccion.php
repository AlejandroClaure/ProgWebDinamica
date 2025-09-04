<?php
if (isset($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['direccion'])) {
    echo "Hola, yo soy {$_POST['nombre']} {$_POST['apellido']}, 
    tengo {$_POST['edad']} años y vivo en {$_POST['direccion']}.";
    echo "<br><a href='../../../estructura/TP2/ej2/index.php'>Volver</a>";
} else {
    echo "Faltan datos.<br><a href='../../../estructura/TP2/ej2/index.php'>Volver</a>";
}
