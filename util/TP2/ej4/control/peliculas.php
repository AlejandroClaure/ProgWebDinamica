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

// Insertar en la base de datos
$inserted = $conn->query("INSERT INTO peliculas (
            titulo, actores, director, guion, produccion, anio, nacionalidad, genero, duracion, restriccion, sinopsis
        ) VALUES (
            '$titulo', '$actores', '$director', '$guion', '$produccion', '$anio', '$nacionalidad', '$genero', '$duracion', '$restriccion', '$sinopsis'
        )");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de carga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<?php if ($inserted): ?>
    <div class="alert alert-success">
        <h3 class="text-primary">La película introducida es</h3>
        <p><strong>Título:</strong> <?= $titulo ?></p>
        <p><strong>Actores:</strong> <?= $actores ?></p>
        <p><strong>Director:</strong> <?= $director ?></p>
        <p><strong>Guión:</strong> <?= $guion ?></p>
        <p><strong>Producción:</strong> <?= $produccion ?></p>
        <p><strong>Año:</strong> <?= $anio ?></p>
        <p><strong>Nacionalidad:</strong> <?= $nacionalidad ?></p>
        <p><strong>Género:</strong> <?= $genero ?></p>
        <p><strong>Duración:</strong> <?= $duracion ?> minutos</p>
        <p><strong>Restricciones de edad:</strong> <?= $restriccion ?></p>
        <p><strong>Sinopsis:</strong> <?= $sinopsis ?></p>
    </div>
<?php else: ?>
    <div class="alert alert-danger">
        Error al cargar la película: <?= $conn->error ?>
    </div>
<?php endif; ?>

<?php $conn->close(); ?>

</body>
</html>
