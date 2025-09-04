$(document).ready(function () {
  // Método personalizado para validar que la contraseña sea segura
  $.validator.addMethod(
    "claveSegura",
    function (value) {
      let usuario = $("#usuario").val(); // obtenemos el valor del usuario
      // Condiciones:
      // - mínimo 8 caracteres
      // - no igual al usuario
      // - al menos una letra
      // - al menos un número
      return (
        value.length >= 8 &&
        value !== usuario &&
        /[a-zA-Z]/.test(value) &&
        /\d/.test(value)
      );
    },
    "La contraseña debe tener al menos 8 caracteres, contener letras y números y no ser igual al usuario."
  );

  // Inicializamos la validación en el formulario
  $("#loginForm").validate({
    // Clases de Bootstrap para inputs válidos o inválidos
    errorClass: "is-invalid",
    validClass: "is-valid",
    // Contenedor del mensaje de error
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback"); // clase Bootstrap
      error.insertAfter(element); // se coloca después del input
    },
    // Reglas de validación por campo
    rules: {
      usuario: {
        required: true, // obligatorio
      },
      clave: {
        required: true, // obligatorio
        claveSegura: true, // debe cumplir la regla personalizada
      },
    },
    // Mensajes de error por campo
    messages: {
      usuario: {
        required: "Ingrese su usuario",
      },
      clave: {
        required: "Ingrese su contraseña",
      },
    },
  });
});
