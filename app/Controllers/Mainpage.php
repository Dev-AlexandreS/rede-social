<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUsuario;
use App\Models\Posts;
use CodeIgniter\HTTP\ResponseInterface;



class Mainpage extends BaseController
{
    public function index()
    {
        $model = new ModelUsuario();
        
        $id = session()->get("id");

        $dados = $model->BuscaId($id);

        $modelPost = new Posts();
        $posts = $modelPost->BuscaPosts();
        // $donoPost = $model->BuscaId();
        // dd($donoPost);


        $infos = ["foto" => $dados->caminho_foto_perfil, "nome" => $dados->nome, "banner" => $dados->caminho_foto_fundo,
         "posts" => $posts];

        return view("/mainpage", $infos);
    }
}
