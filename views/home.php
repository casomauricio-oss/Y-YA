<?php 
    // Define el contenido por defecto si no está definido
    if (!isset($contenido)) {
        $contenido = "dashboard.php";
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi Dashboard</title>
    <!-- Vincula los archivos de estilo -->
    <link rel="stylesheet" type="text/css" media="screen" href="../public/css/style.css"> <!-- Estilos generales -->
    <link rel="stylesheet" type="text/css" media="screen" href="../public/css/navbar.css"> <!-- Estilos para la barra de navegación -->
    <link rel="stylesheet" type="text/css" media="screen" href="../public/css/sidebar.css"> <!-- Estilos para la barra lateral -->
    <link rel="stylesheet" type="text/css" media="screen" href="../public/css/content.css"> <!-- Estilos para el contenido principal -->
    <link rel="stylesheet" type="text/css" media="screen" href="../public/css/container.css"> <!-- Estilos para el contenedor principal -->
    <link rel="stylesheet" type="text/css" media="screen" href="../public/css/footer.css"> <!-- Estilos para el pie de página -->
    <link rel="stylesheet" type="text/css" media="screen"  href="../public/css/formRegisterUsers.css"> <!-- Estilos para la sección de información -->
</head>

<body>
    <?php
    include __DIR__ . '/navbar.php'; ?>

    <!-- CONTENEDOR PRINCIPAL -->
    <div class="container">
        <!-- Incluye el sidebar -->
        <?php include __DIR__ . '/sidebar.php'; ?>
        <!-- Area de contenido principal -->
        <?php include_once __DIR__ . '/' . $contenido; ?>
    </div>
    <?php include __DIR__ . '/footer.php'; ?>
</body>

</html>