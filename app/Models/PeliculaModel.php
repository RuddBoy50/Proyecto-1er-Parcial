<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculaModel extends Model
{
    protected $table = 'tbl_cat_Pelicula';
    protected $primaryKey = 'Pelicula_Id';
    protected $allowedFields = ['Pelicula_Pelicula', 'Pelicula_ImagenId', 'Pelicula_Costo', 'Pelicula_Activo']; 

    public function insertarPelicula($peliculaPelicula, $imagenId, $costo, $activo)
    {
        $query = "CALL InsertarPelicula('$peliculaPelicula', $imagenId, $costo, $activo)";
        $this->db->query($query);
    }
}
