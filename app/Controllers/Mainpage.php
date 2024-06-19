<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUsuario;
use CodeIgniter\HTTP\ResponseInterface;



class Mainpage extends BaseController
{
    public function index()
    {
        $model = new ModelUsuario();
        
        $id = session()->get("id");

        $dados = $model->BuscaId($id);

        $infos = ["foto" => $dados->caminho_foto_perfil, "nome" => $dados->nome, "banner" => $dados->caminho_foto_fundo];

        return view("/mainpage", $infos);
    }
}
