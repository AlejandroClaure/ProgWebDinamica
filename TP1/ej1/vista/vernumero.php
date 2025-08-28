<?php
$numero = $_GET['numero'];

if ($numero > 0) {
    echo "El número $numero es POSITIVO";
} elseif ($numero < 0) {
    echo "El número $numero es NEGATIVO";
} else {
    echo "El número es CERO";
}
?>
<br><a href="index.html">Volver</a>