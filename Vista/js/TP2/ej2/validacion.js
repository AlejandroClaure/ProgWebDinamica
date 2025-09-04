$(document).ready(function () {
  $("#form2").validate({
    rules: {
      numero: {
        required: true,
        number: true
      },
      edad: {
        required: true,
        number: true,
        min: 1,
        max: 120
      }
    },
    messages: {
      numero: {
        required: "Por favor ingrese un número",
        number: "Debe ingresar un número válido"
      },
      edad: {
        required: "Por favor ingrese su edad",
        number: "Debe ser un número válido",
        min: "La edad mínima es 1",
        max: "La edad máxima es 120"
      }
    },
    errorClass: "invalid-feedback",
    highlight: function (element) {
      $(element).addClass("is-invalid").removeClass("is-valid");
    },
    unhighlight: function (element) {
      $(element).removeClass("is-invalid").addClass("is-valid");
    },
    errorPlacement: function (error, element) {
      error.insertAfter(element);
    },
    submitHandler: function (form) {
      form.submit(); // ✅ solo se envía si pasa validación
    }
  });
});
