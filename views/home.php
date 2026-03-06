<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    include './views/navbar.php'; ?>

    <!-- CONTENEDOR PRINCIPAL -->
    <div class="container">
        /// Incluye el sidebar
        <?php include 'sidebar.php';
        // Area de contenido principal
        include $contenido;
        ?>
    </div>
</body>

</html>