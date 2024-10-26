<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textilandia - Modelos de Telas</title>
    <link rel="stylesheet" href="principal.css">
</head>
<body>
    <div class="tela-container">
        <h1>Modelos de Telas Disponibles</h1>
        <div class="telas-grid">
            <?php
                $telas = [
                    "Licra" => "imagenes/licra.jpg",
                    "Escuba" => "imagenes/escuba.jpg",
                    "Acetato" => "imagenes/acetato.jpg",
                    "Chaliz" => "imagenes/chaliz.jpg",
                    "Noches de Viena" => "imagenes/noches_de_viena.jpg",
                    "Lino" => "imagenes/lino.jpg",
                    "Lino en algodón" => "imagenes/lino_en_algodon.jpg",
                    "Lino Flex" => "imagenes/lino_flex.jpg",
                    "Seda Poliéster" => "imagenes/seda_poliester.jpg",
                    "Dacron" => "imagenes/dacron.jpg",
                    "Antifluido" => "imagenes/antifluido.jpg",
                    "Satín Rígido" => "imagenes/satin_rigido.jpg",
                    "Satín Licrado" => "imagenes/satin_licrado.jpg",
                    "Tul" => "imagenes/tul.jpg"
                ];

                foreach ($telas as $tela => $imagen) {
                    echo "<div class='tela-item'>";
                    echo "<img src='$imagen' alt='Imagen de $tela' class='tela-img'>";
                    echo "<h2>$tela</h2>";
                    echo "<p>Colores disponibles:</p>";
                    echo "<select name='colores'>
                            <option value=''>Selecciona un color</option>
                            <option value='rojo'>Rojo</option>
                            <option value='azul'>Azul</option>
                            <option value='verde'>Verde</option>
                            <option value='negro'>Negro</option>
                            <option value='blanco'>Blanco</option>
                        </select>";
                    echo "<p>Metraje disponible: <input type='number' min='1' max='100' value='1'> metros</p>";
                    echo "<button class='add-to-cart'>Añadir al carrito</button>";
                    echo "</div>";
                }
            ?>
        </div>
        <a href="logout.php" class="logout-button">Cerrar sesión</a>
    </div>
</body>
</html>