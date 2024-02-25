<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Película</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <h1>Agregar Película</h1>

    <!-- Formulario para agregar película -->
    <form action="<?php echo base_url('Cine/agregarPelicula'); ?>" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre de la Película:</label>
        <input type="text" name="nombre" required>

        <label for="imagen">Agregar Imagen:</label>
        <input type="file" name="imagen" id="imagenInput" accept="image/*" required>
        <input type="hidden" name="ruta_imagen" id="rutaImagen">

        <label for="costo">Costo de la Película:</label>
        <input type="number" name="costo" required>

        <button type="submit">Guardar</button>
    </form>

    <script>
        // Script para manejar la carga de imágenes
        document.getElementById('imagenInput').addEventListener('change', function (event) {
            const fileInput = event.target;
            const rutaImagenInput = document.getElementById('rutaImagen');

            const reader = new FileReader();
            reader.onload = function () {
                rutaImagenInput.value = reader.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        });
    </script>
</body>

</html>
