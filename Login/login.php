<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textilandia - Inicio de Sesión</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h1>Textilandia - Inicio de Sesión</h1>
        <form action="procesar_login.php" method="POST">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <div class="opciones">
                <label>
                    <input type="checkbox" name="recordarme"> Recordarme
                </label>
                <label>
                    <input type="checkbox" name="ofertas"> Acepto recibir ofertas y promociones por correo.
                </label>
            </div>

            <button type="submit">Iniciar Sesión</button>

            <div class="links">
                <a href="../Registro/registro.php">Registrar nueva cuenta</a>
                <a href="../Olvido_password/olvido_password.php">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</body>
</html>