<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
            width: 350px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-box">
        <h3 class="text-center mb-4">Member Login</h3>
        <form id="loginForm" action="../control/verificaPass.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="clave" id="clave" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Login</button>
        </form>
    </div>
</div>

<script>
    document.getElementById("loginForm").addEventListener("submit", function(e) {
        let usuario = document.getElementById("usuario").value.trim();
        let clave = document.getElementById("clave").value.trim();
        let errores = [];

        if (usuario === "" || clave === "") {
            errores.push("Debe completar todos los campos.");
        }
        if (clave.length < 8) {
            errores.push("La contraseña debe tener al menos 8 caracteres.");
        }
        if (clave === usuario) {
            errores.push("La contraseña no puede ser igual al usuario.");
        }
        if (!(/[a-zA-Z]/.test(clave) && /\d/.test(clave))) {
            errores.push("La contraseña debe contener letras y números.");
        }

        if (errores.length > 0) {
            e.preventDefault();
            alert(errores.join("\n"));
        }
    });
</script>

</body>
</html>
