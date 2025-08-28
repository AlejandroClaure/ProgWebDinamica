<?php
$horas = [
    $_GET['lunes'],
    $_GET['martes'],
    $_GET['miercoles'],
    $_GET['jueves'],
    $_GET['viernes']
];

$total = array_sum($horas);
echo "Total de horas cursadas en la semana: $total";
?>