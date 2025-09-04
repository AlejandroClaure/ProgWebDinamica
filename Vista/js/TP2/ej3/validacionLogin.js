$(document).ready(function(){
    $("#loginForm").validate({
        rules: {
            usuario: { required: true, minlength: 3 },
            clave: { required: true, minlength: 4 }
        },
        messages: {
            usuario: {
                required: "Ingrese su usuario",
                minlength: "Mínimo 3 caracteres"
            },
            clave: {
                required: "Ingrese su contraseña",
                minlength: "Mínimo 4 caracteres"
            }
        },
        submitHandler: function(form) {
            form.submit(); // Solo se envía si pasa la validación
        },
        errorClass: "text-danger"
    });
});
