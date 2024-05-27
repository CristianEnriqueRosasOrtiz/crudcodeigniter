<?php

namespace App\Controllers;

use App\Models\Genre_model;
use CodeIgniter\Controller;

class Genres extends Controller
{
    public function __construct()
    {
        $this->genreModel = new Genre_model();
    }

    //Nos muestra la vista de generos
    public function index()
    {
        $data['genres'] = $this->genreModel->get_genres();
        return view('genres/index', $data);
    }
    
    //nos muestra la vista de un genero nuevo
    public function create()
    {
        return view('genres/create');
    }

    //almacena un nuevo genero 
    public function store()
    {
        $data = [
            'name' => $this->request->getPost('name')
        ];
        $this->genreModel->insert_genre($data);
        return redirect()->to('/genres');
    }

    //carga la vista para editar un genero
    public function edit($id)
    {
        $data['genre'] = $this->genreModel->get_genre($id);
        return view('genres/edit', $data);
    }

    //Nos actualiza un genero exsitente
    public function update($id)
    {
        $data = [
            'name' => $this->request->getPost('name')
        ];
        $this->genreModel->update_genre($id, $data);
        return redirect()->to('/genres');
    }

    public function delete($id)
    {
        $this->genreModel->delete_genre($id);
        return redirect()->to('/genres');
    }
}

