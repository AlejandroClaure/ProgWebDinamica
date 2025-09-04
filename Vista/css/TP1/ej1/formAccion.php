<?php
// Incluimos el archivo donde está definida la clase Numero
require_once("../../../../Control/TP1/ej1/Numero.php");

// Verificamos que efectivamente el usuario haya enviado un número con GET
if (isset($_GET['numero'])) {
    // Creamos un objeto de la clase Numero, pasando el valor recibido al constructor
    $numero = new Numero($_GET['numero']);
    
    // Llamamos al método evaluar() del objeto para obtener el resultado
    $resultado = $numero->evaluar();
    
    // Mostramos el resultado al usuario
    echo $resultado;
} else {
    // Si no se recibió ningún número, mostramos un mensaje de error
    echo "No se recibió ningún número.";
}
