<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Cine extends Controller
{
    public function cine()
    {
        // Lógica para cargar la vista de la cartelera de cine
        return view('cine');
    }

    public function formulario()
    {
        // Lógica para cargar la vista del formulario de compra de entradas
        return view('formulario');
    }

    public function agregarPelicula()
    {
        // Lógica para manejar la inserción de la película en la base de datos
        // Asegúrate de validar los datos y manejar la carga de imágenes de manera segura

        $nombre = $this->request->getPost('nombre');
        $rutaImagen = $this->request->getPost('ruta_imagen');
        $costo = $this->request->getPost('costo');

        // Aquí deberías validar y procesar la imagen (guardar en el servidor, manejar nombres únicos, etc.)
        // También deberías validar que los datos son seguros antes de insertarlos en la base de datos.

        // Ejemplo de cómo podrías insertar en la base de datos
        $peliculaModel = new \App\Models\PeliculaModel(); // Asegúrate de tener un modelo asociado
        $data = [
            'Pelicula_Pelicula' => $nombre,
            'Pelicula_Imagen' => $rutaImagen, // Esto es simplificado, deberías procesar la imagen correctamente
            'Pelicula_Costo' => $costo,
            'Pelicula_Activo' => 1,
        ];

        $peliculaModel->insert($data);

        // Después de agregar la película, puedes redirigir al usuario a la cartelera
        return redirect()->to(base_url('Cine/cine'));
    }
}
