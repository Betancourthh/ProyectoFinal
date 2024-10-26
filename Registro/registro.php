<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div class="registro-container">
        <h1>Registro de Usuario</h1>
        <form action="procesar_registro.php" method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <div class="opciones">
                <label>
                    <input type="checkbox" name="ofertas"> Acepto recibir ofertas y promociones por correo.
                </label>
            </div>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>