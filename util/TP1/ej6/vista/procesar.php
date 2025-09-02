<?php
$deportes = $_GET['deportes'];
$cantidad = count($deportes);

echo "Practica $cantidad deportes:<br>";
echo implode(", ", $deportes);
?>