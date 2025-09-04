<?php
// Incluimos la clase Horas desde la carpeta Control
require_once("../../../../Control/TP1/ej2/Horas.php");

// Verificamos que todos los campos fueron enviados
if (isset($_GET['lunes'], $_GET['martes'], $_GET['miercoles'], $_GET['jueves'], $_GET['viernes'])) {
    
    // Creamos un array asociativo con los valores recibidos
    $dias = [
        "lunes"     => $_GET['lunes'],
        "martes"    => $_GET['martes'],
        "miercoles" => $_GET['miercoles'],
        "jueves"    => $_GET['jueves'],
        "viernes"   => $_GET['viernes']
    ];
    
    // Creamos un objeto de la clase Horas, pasándole el array
    $horas = new Horas($dias);
    
    // Llamamos al método calcularTotal() para obtener la suma
    $total = $horas->calcularTotal();
    
    // Mostramos el resultado
    echo "Total de horas cursadas en la semana: $total";
    
    // Enlace para volver al formulario
    echo '<br><a href="../../../estructura/TP1/ej2/index.php">Volver</a>';
    
} else {
    // Si falta algún dato, mostramos un error
    echo "Faltan datos en el formulario.";
}
