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

        /* Estilos para la cartelera */
        .cartelera {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .info {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .imagenes {
            width: 150px;
            height: 300px;
            cursor: pointer;
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

    <!-- Cartelera -->
    <div class="secundaria">
        <h2>Cartelera</h2>
        <div class="cartelera">
            <!-- Aquí deberías mostrar dinámicamente la información de la cartelera -->
            <?php foreach ($peliculas as $pelicula): ?>
                <div class="info">
                    <div class="pelicula">
                        <img src="<?php echo base_url($pelicula['Pelicula_Imagen']); ?>" alt="<?php echo $pelicula['Pelicula_Pelicula']; ?>" class="imagenes" data-bs-toggle="modal" onclick="abrir('<?php echo $pelicula['Pelicula_Pelicula']; ?>')">
                        <h2><?php echo $pelicula['Pelicula_Pelicula']; ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>
