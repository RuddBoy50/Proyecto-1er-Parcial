<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CINE</title>
    <link rel="stylesheet" href="css/estilos.css">

    
</head>

<body>
    <!-- Es aqui en donde se tendra el div del titulo -->
    <div class="principal">
        <h1>Las mejores peliculas</h1>
    </div>

    <!-- Es aqui en donde se tendra el div de la cartelera -->
    <div class="secundaria">

        <div class="cartelera">
            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('resources/Psinaire.jpeg'); ?>" alt="Sin Aire" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir()">
                    <h2>Sin Aire</h2>
                    <p>Descripción de la película...</p>
                    <p>Horarios:</p>
                    <ul>
                        <li>Horario 1</li>
                        <li>Horario 2</li>
                    </ul>
                </div>
            </div>

            <img src="<?php echo base_url('resources/Pasesinos.jpg'); ?>" alt="Asesinos" class="imagenes">
            <a href="<?php echo base_url('Cine/formulario?nombre=The killer'); ?>"><img
                    src="<?php echo base_url('resources/Pkiller.jpeg'); ?>" alt="Killer" class="imagenes"></a>
            <a href="<?php echo base_url('Cine/formulario?nombre=Saltburn'); ?>"><img
                    src="<?php echo base_url('resources/Psaltburn.jpeg'); ?>" alt="Saltburn" class="imagenes"></a>
            <a href="<?php echo base_url('Cine/formulario?nombre=Adentro'); ?>"><img
                    src="<?php echo base_url('resources/Padentro.jpeg'); ?>" alt="Adentro" class="imagenes"></a>
            <a href="<?php echo base_url('Cine/formulario?nombre=Oppenhaimer'); ?>"><img
                    src="<?php echo base_url('resources/Poppenhaimer.jpg'); ?>" alt="Openhaimer" class="imagenes"></a>
            <a href="<?php echo base_url('Cine/formulario?nombre=Dejar atras'); ?>"><img
                    src="<?php echo base_url('resources/Pdejar.jpg'); ?>" alt="Dejar" class="imagenes"></a>
            <a href="<?php echo base_url('Cine/formulario?nombre=Saw'); ?>"><img
                    src="<?php echo base_url('resources/Psaw.jpg'); ?>" alt="Saw" class="imagenes"></a>
            <a href="<?php echo base_url('Cine/formulario?nombre=La sociedad de la nieve'); ?>"><img
                    src="<?php echo base_url('resources/Pnieve.jpg'); ?>" alt="La sociedad de la nieve"
                    class="imagenes"></a>

        </div>
    </div>



    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>