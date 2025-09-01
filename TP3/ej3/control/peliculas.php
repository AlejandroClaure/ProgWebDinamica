<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peliculasDB";

$conn = new mysqli($servername, $username, $password, $dbname);
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

// Manejo de la imagen
$imagen = $_FILES['imagen'];
$rutaDestino = "../uploads/" . basename($imagen["name"]);
$uploadOk = true;
$tipoArchivo = strtolower(pathinfo($rutaDestino, PATHINFO_EXTENSION));

// Validar tipo de archivo
if (!in_array($tipoArchivo, ["jpg", "jpeg", "png", "gif"])) {
    $uploadOk = false;
    $mensajeError = "Solo se permiten imágenes JPG, JPEG, PNG o GIF.";
}

// Validar tamaño (máx 2MB)
if ($imagen["size"] > 2 * 1024 * 1024) {
    $uploadOk = false;
    $mensajeError = "El archivo es demasiado grande. Máximo 2MB.";
}

// Intentar guardar la imagen si pasó validaciones
if ($uploadOk && move_uploaded_file($imagen["tmp_name"], $rutaDestino)) {
    $imagenGuardada = $rutaDestino;
} else {
    $imagenGuardada = null;
}

// Insertar en la base de datos
$inserted = $conn->query("INSERT INTO peliculas (
    titulo, actores, director, guion, produccion, anio, nacionalidad, genero, duracion, restriccion, sinopsis, imagen
) VALUES (
    '$titulo', '$actores', '$director', '$guion', '$produccion', '$anio', '$nacionalidad', '$genero', '$duracion', '$restriccion', '$sinopsis', '$imagenGuardada'
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
        <?php if ($imagenGuardada): ?>
            <p><strong>Imagen:</strong></p>
            <img src="<?= $imagenGuardada ?>" alt="Imagen de la película" class="img-fluid rounded shadow">
        <?php endif; ?>
    </div>
<?php else: ?>
    <div class="alert alert-danger">
        Error al cargar la película: <?= $conn->error ?><br>
        <?= isset($mensajeError) ? $mensajeError : "" ?>
    </div>
<?php endif; ?>

<?php $conn->close(); ?>

</body>
</html>