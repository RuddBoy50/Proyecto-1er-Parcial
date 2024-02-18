<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CINE</title>
    <link rel="stylesheet" href="css/estilos.css">


    <script>
    function abrir(pelicula) {
        var cantidadBoletos = prompt("¿Cuántos boletos deseas comprar para " + pelicula + "?", 1);
        
        if (cantidadBoletos !== null) {
            cantidadBoletos = parseInt(cantidadBoletos);
            
            if (!isNaN(cantidadBoletos) && cantidadBoletos > 0) {
                var precioBoleto = 10; // Precio ficticio por boleto
                var total = cantidadBoletos * precioBoleto;
                
                var cantidadPagada = prompt("El total es $" + total + ". ¿Con cuánto pagarás?");
                
                if (cantidadPagada !== null) {
                    cantidadPagada = parseFloat(cantidadPagada);
                    
                    if (!isNaN(cantidadPagada) && cantidadPagada >= total) {
                        var cambio = cantidadPagada - total;
                        alert("Compra exitosa:\n\nPelícula: " + pelicula + "\nBoletos: " + cantidadBoletos + "\nTotal: $" + total + "\nPagado: $" + cantidadPagada + "\nCambio: $" + cambio.toFixed(2));
                    } else {
                        alert("Cantidad insuficiente. La compra ha sido cancelada.");
                    }
                } else {
                    alert("La compra ha sido cancelada.");
                }
            } else {
                alert("Cantidad inválida. La compra ha sido cancelada.");
            }
        } else {
            alert("La compra ha sido cancelada.");
        }
    }
</script>


    
</head>

<body>
    <!-- Es aqui en donde se tendra el div del titulo -->
    <div class="principal">
        <h1>Cine el Rudo</h1>
    </div>

    <!-- Es aqui en donde se tendra el div de la cartelera -->
    <div class="secundaria">

        <div class="cartelera">
            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('imagenes/transformers.jpg'); ?>" alt="Transformers" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir('Transformers')" style="width: 150px; height: 300px;">
                    <h2>Transformers</h2>
                </div>
            </div>

            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('imagenes/charro_negro.jpg'); ?>" alt="Charro Negro" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir('Charro Negro')" style="width: 150px; height: 300px;">
                    <h2>Charro Negro</h2>
                    
                </div>
            </div>
            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('imagenes/distrito_rojo.jpg'); ?>" alt="Distrito Rojo" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir('Distrito Rojo')" style="width: 150px; height: 300px;">
                    <h2>Distrito Rojo</h2>
                    
                </div>
            </div>
            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('imagenes/golpe_bajo.jpg'); ?>" alt="Golpe Bajo" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir('Golpe Bajo')" style="width: 150px; height: 300px;">
                    <h2>Golpe Bajo</h2>
                    
                </div>
            </div>
            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('imagenes/jujutsu_kaisen.jpg'); ?>" alt="Jujutsu Kaisen" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir('Jujutsu Kaisen')" style="width: 150px; height: 300px;">
                    <h2>Jujutsu Kaisen</h2>
                </div>
            </div>
            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('imagenes/kunfu_panda.jpg'); ?>" alt="Kunfu Panda" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir('Kunfu Panda')" style="width: 150px; height: 300px;">
                    <h2>Kunfu Panda</h2>
                </div>
            </div>
            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('imagenes/rubias.jpg'); ?>" alt="Donde están las rubias?" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir('Rubias')" style="width: 150px; height: 300px;">
                    <h2>Donde están las rubias?</h2>
                </div>
            </div>

            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('imagenes/rudy.jpg'); ?>" alt="Rudy" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir('Rudy')" style="width: 150px; height: 300px;">
                    <h2>Rudy</h2>
                </div>
            </div>
            <div class="info">
                <div class="pelicula">
                    <img src="<?php echo base_url('imagenes/tren_infinito.jpg'); ?>" alt="Tren Infinito" class="imagenes"
                        data-bs-toggle="modal" onclick="abrir('Tren Infinito')" style="width: 150px; height: 300px;">
                    <h2>Tren Infinito</h2>
                </div>
            </div>
        </div>
    </div>

</body>

</html>