<?php

namespace App\Models;

use CodeIgniter\Model;

class Genre_model extends Model
{
    protected $table = 'genres';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];

    // todos los generos
    public function get_genres()
    {
        return $this->findAll();
    }

    // genero especifico por ID
    public function get_genre($id)
    {
        return $this->where('id', $id)->first();
    }

    // insertar nuevo genero
    public function insert_genre($data)
    {
        return $this->insert($data);
    }

    // Actualiza genero 
    public function update_genre($id, $data)
    {
        return $this->update($id, $data);
    }

    // Eliminar
    public function delete_genre($id)
    {
        return $this->delete($id);
    }
}

