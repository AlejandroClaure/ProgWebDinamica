$(document).ready(function () {
  // Inicializamos la validación en el formulario con id="formulario"
  $("#formulario").validate({
    // Clases de Bootstrap para inputs válidos o inválidos
    errorClass: "is-invalid",
    validClass: "is-valid",

    // Contenedor de cada mensaje de error
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback"); // clase Bootstrap para mensajes
      error.insertAfter(element); // se coloca después del campo
    },

    // Reglas de validación por campo
    rules: {
      nombre: {
        required: true, // obligatorio
        minlength: 2, // mínimo 2 caracteres
      },
      apellido: {
        required: true, // obligatorio
        minlength: 2, // mínimo 2 caracteres
      },
      edad: {
        required: true,
        number: true, // debe ser un número
        min: 0, // mínimo 0
      },
      direccion: {
        required: true, // obligatorio
        minlength: 5, // mínimo 5
      },
    },

    // Mensajes de error personalizados
    messages: {
      nombre: {
        required: "Por favor ingrese su nombre",
        minlength: "El nombre debe tener al menos 2 caracteres",
      },
      apellido: {
        required: "Por favor ingrese su apellido",
        minlength: "El apellido debe tener al menos 2 caracteres",
      },
      edad: {
        required: "Ingrese su edad",
        number: "Debe ser un número válido",
        min: "La edad no puede ser negativa",
      },
      direccion: {
        required: "Ingrese su dirección",
        minlength: "La dirección debe tener al menos 5 caracteres",
      },
    },
  });
});
