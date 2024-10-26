<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="olvido_password.css">
</head>
<body>
    <div class="recuperar-container">
        <h1>Recuperar Contraseña</h1>
        <form action="procesar_recuperacion.php" method="POST">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Recuperar</button>
        </form>
    </div>
</body>
</html>