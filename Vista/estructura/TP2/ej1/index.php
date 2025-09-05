<?php include("../../header.php"); ?>

<div class="container mt-4">
  <h2>Ejercicio 1 - Validación de formularios con librerías JavaScript</h2>
  
  <p>
    En este ejercicio se investiga y prueba la validación de formularios utilizando alguna 
    librería o framework de JavaScript, como por ejemplo 
    <strong>jQuery, Mootools, Dojo o Prototype</strong>.
  </p>
  
  <p>
    Estas librerías facilitan la validación de datos ingresados por el usuario en un formulario, 
    evitando que se envíen campos vacíos o con formatos incorrectos. También permiten mejorar 
    la experiencia del usuario mostrando mensajes dinámicos de error o confirmación antes de 
    enviar la información al servidor.
  </p>

  <p>
    Ejemplo común de validación con jQuery:
  </p>
  <pre><code>// Validar que un campo no esté vacío
$("#miFormulario").submit(function(e) {
  if ($("#nombre").val().trim() === "") {
    alert("El campo nombre es obligatorio");
    e.preventDefault(); // Evita el envío del formulario
  }
});
</code></pre>

  <p>
    Con este tipo de validaciones se mejora la robustez de las aplicaciones web y 
    se disminuyen errores por datos mal cargados.
  </p>
</div>
<!-- Botón para volver al inicio -->
<div class="mt-3 text-center">
  <a href="estructura/index.php" class="btn btn-secondary">Volver al inicio.</a>
</div>
<?php include("../../footer.php"); ?>
