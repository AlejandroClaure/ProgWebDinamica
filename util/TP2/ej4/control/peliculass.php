<?php
// Datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peliculasDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$titulo = $_POST['titulo'];
$actores = $_POST['actores'];
$director = $_POST['director'];
$guion = $_POST['guion'];
$produccion = $_POST['produccion'];
$anio = $_POST['anio'];
$nacionalidad = $_POST['nacionalidad'];
$genero = $_POST['genero'];
$duracion = $_POST['duracion'];
$restriccion = $_POST['restriccion'];
$sinopsis = $_POST['sinopsis'];

// Preparar e insertar en la base de datos
$sql = "INSERT INTO peliculas (
            titulo, actores, director, guion, produccion, anio, nacionalidad, genero, duracion, restriccion, sinopsis
        ) VALUES (
            '$titulo', '$actores', '$director', '$guion', '$produccion', '$anio', '$nacionalidad', '$genero', '$duracion', '$restriccion', '$sinopsis'
        )";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Película cargada correctamente</h2>";
    echo "Título: $titulo<br>";
    echo "Actores: $actores<br>";
    echo "Director: $director<br>";
    echo "Guion: $guion<br>";
    echo "Producción: $produccion<br>";
    echo "Año: $anio<br>";
    echo "Nacionalidad: $nacionalidad<br>";
    echo "Género: $genero<br>";
    echo "Duración: $duracion minutos<br>";
    echo "Restricción de edad: $restriccion<br>";
    echo "Sinopsis: $sinopsis<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
