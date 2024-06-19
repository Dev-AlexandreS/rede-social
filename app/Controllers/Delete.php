<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUsuario;
use CodeIgniter\HTTP\ResponseInterface;

class Delete extends BaseController
{
    public function index()
    {
        $email = $this->request->getPost("email");
        $senha = $this->request->getPost("senha");
        $id = session()->get("id");

        $modal = new ModelUsuario();

        $dados = $modal->BuscaId($id);
        
        if ($email == $dados->email && $senha == $dados->senha){
            $modal->Deletar($id);
        }

        return redirect()->to("/logout");
    }
}
