// Esperamos que el DOM esté cargado antes de ejecutar el script
$(document).ready(function () {
  // Inicializamos la validación sobre el formulario con id="peliculaForm"
  $("#peliculaForm").validate({
    // Clases que se aplican cuando hay error o cuando es válido
    errorClass: "is-invalid",
    validClass: "is-valid",

    // Los mensajes de error se mostrarán en un <div> debajo del input
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback"); // clase de bootstrap para mensajes de error
      error.insertAfter(element); // coloca el mensaje debajo del campo
    },

    // Definimos las reglas mínimas necesarias
    rules: {
      anio: {
        required: true, // el campo es obligatorio
        digits: true, // solo permite números
        rangelength: [4, 4], // debe tener exactamente 4 dígitos
      },
      duracion: {
        required: true, // el campo es obligatorio
        digits: true, // solo números
        maxlength: 3, // máximo 3 dígitos
      },
    },

    // Mensajes de error personalizados
    messages: {
      anio: {
        required: "Ingrese el año de la película",
        digits: "Solo se permiten números",
        rangelength: "Debe tener exactamente 4 dígitos",
      },
      duracion: {
        required: "Ingrese la duración de la película",
        digits: "Solo se permiten números",
        maxlength: "Máximo 3 dígitos",
      },
    },
  });
});
