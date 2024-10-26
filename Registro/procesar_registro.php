<?php
if (isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['email'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Mensaje de confirmación de registro
    echo "Registro exitoso. Usuario: $usuario, Email: $email";
}
?>