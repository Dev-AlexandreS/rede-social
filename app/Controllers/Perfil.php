<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUsuario;
use CodeIgniter\HTTP\ResponseInterface;

class Perfil extends BaseController
{
    public function index()
    {
        $model = new ModelUsuario();
        
        $id = session()->get("id");

        $dados = $model->BuscaId($id);

        $infos = ["foto"   => $dados->caminho_foto_perfil,
                  "nome"   => $dados->nome,
                  "email"  => $dados->email,
                  "senha"  => $dados->senha,
                  "banner" => $dados->caminho_foto_fundo];

        return view("perfil", $infos);
    }
}
