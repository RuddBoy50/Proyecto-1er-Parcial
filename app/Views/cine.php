<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CINE</title>
    <link rel="stylesheet" href="css/estilos.css">

    <style>
        /* Estilos para el menú */
        .menu {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #333;
            color: white;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        .menu a:hover {
            background-color: #555;
        }
    </style>

</head>

<body>
    <!-- Menú -->
    <div class="menu">
        <h1>Cine el Rudo</h1>
        <a href="<?php echo base_url('Cine/cine'); ?>">Cartelera</a>
        <a href="<?php echo base_url('Cine/formulario'); ?>">Agregar Película</a>
    </div>

    <!-- Contenido principal -->
    <div class="principal">
        <h1>Cine el Rudo</h1>
    </div>

    <!-- Cartelera y contenido restante -->
    <div class="secundaria">
        <!-- ... Tu código actual para mostrar la cartelera ... -->
    </div>

</body>

</html>
