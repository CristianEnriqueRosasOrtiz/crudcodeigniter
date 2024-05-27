<?php

namespace App\Models;

use CodeIgniter\Model; //importamos la clase MODEl de del Framework


//nuestra clase interactua con la base de datos en especifico con la tabla albums
class Album_model extends Model
{
    protected $table = 'albums';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'author', 'genre_id'];

    // obtenemos los albumes y generos correspondientes
    public function get_albums()
    {
        return $this->select('albums.*, genres.name as genre_name')
                    ->join('genres', 'genres.id = albums.genre_id')
                    ->findAll();
    }

    //  álbum específico por ID
    public function get_album($id)
    {
        return $this->where('id', $id)->first();
    }

    // insertamos nuevo album BD
    public function insert_album($data)
    {
        return $this->insert($data);
    }

    //  actualiza album 
    public function update_album($id, $data)
    {
        return $this->update($id, $data);
    }

    //eliminamos 
    public function delete_album($id)
    {
        return $this->delete($id);
    }
}
