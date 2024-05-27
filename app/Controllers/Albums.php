<?php

namespace App\Controllers;

use App\Models\Album_model;
use App\Models\Genre_model;
use CodeIgniter\Controller;

class Albums extends Controller
{
    public function __construct()
    {
        //inyeccion de dependencias
        //nos ayuda a que todo metodo del controlador acceda a metodos del modelo
        $this->albumModel = new Album_model();
        $this->genreModel = new Genre_model();
    }

    //vista principal 
    public function index()
    {
        $data['albums'] = $this->albumModel->get_albums();
        return view('albums/index', $data);
    }
    //vista para crear nuevo album
    public function create()
    {
        $data['genres'] = $this->genreModel->get_genres();
        return view('albums/create', $data);
    }
    
    //almacemoas su información con datos del formularo
    public function store()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'author' => $this->request->getPost('author'),
            'genre_id' => $this->request->getPost('genre_id')
        ];
        $this->albumModel->insert_album($data);
        return redirect()->to('/albums');
    }

    //Nos muestra la vista para editar datos
    public function edit($id)
    {
        $data['album'] = $this->albumModel->get_album($id);
        $data['genres'] = $this->genreModel->get_genres();
        return view('albums/edit', $data);
    }
    //actualiza el album de la BD de la mano con el formulario
    public function update($id)
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'author' => $this->request->getPost('author'),
            'genre_id' => $this->request->getPost('genre_id')
        ];
        $this->albumModel->update_album($id, $data);
        return redirect()->to('/albums');
    }

    //Elimina
    public function delete($id)
    {
        $this->albumModel->delete_album($id);
        return redirect()->to('/albums');
    }
}
