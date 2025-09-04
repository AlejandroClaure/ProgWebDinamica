<?php
// Incluimos la clase Persona
require_once("../../../../Control/TP1/ej3/Persona.php");

// Variable que va a contener la salida final
$resultado = "";

// Verificamos que todos los campos fueron enviados
if (isset($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['direccion'])) {
    
    // Creamos un objeto Persona con los datos del formulario
    $persona = new Persona(
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['edad'],
        $_POST['direccion']
    );

    // Concatenamos los mensajes en la variable $resultado
    $resultado .= $persona->presentarse();
    $resultado .= "<br><a href='../../../estructura/TP1/ej3/index.php'>Volver</a>";

} else {
    // Si faltan datos, guardamos el mensaje de error en $resultado
    $resultado = "Faltan datos en el formulario.<br>
                  <a href='../../../estructura/TP1/ej3/index.php'>Volver</a>";
}

// Al final, mostramos el contenido de la variable
echo $resultado;
