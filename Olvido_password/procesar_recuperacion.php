<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo "Se ha enviado un enlace de recuperación a $email.";
}
?>