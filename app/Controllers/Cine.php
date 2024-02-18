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



    public function calcularPrecio()
    {
        $nombre = $this->request->getPost('nombre');
        $entradas = $this->request->getPost('entradas');
        $pago = $this->request->getPost('pago');
        
        if (!$nombre || !$entradas || !$pago) {
            return redirect()->to(base_url('Cine/formulario'))->with('error', 'Por favor, complete todos los campos.');
        }

        $precio_unitario = 10; // Precio de una entrada
        $total = $precio_unitario * $entradas;
        $cambio = $pago - $total;

        // Pasamos los datos necesarios directamente a la vista del formulario
        return view('formulario', ['nombre' => $nombre, 'total' => $total, 'cambio' => $cambio, 'pago' => $pago]);
    }
    


}