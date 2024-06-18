<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelUsuario;

class Cadastro extends BaseController
{
    public function cadastrar()
    {
        $nome = $this->request->getPost('nome');
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');
        $ftPerfil = $this->request->getFile('ft-perfil');

        
        $modelUser = new ModelUsuario();
        // estrutura de upload de fotos
        // busca do nome do caminho da foto
        $nomeFoto = $ftPerfil->getName();
        $cadastro = $modelUser->cadastrar($nome, $email, $senha, $nomeFoto);
        // metodo move com ROOTPATH para designar onde vão ficar os uploads
        $ftPerfil->move(ROOTPATH . "public/assets/img");
        if($cadastro){
            // iniciação de sessão com base no id do usuario vindo da query de cadastro
            session()->set(["id" => $cadastro]);
            return redirect()->to("/mainpage");
        
        }else{

            echo "Deu ruim";
        
        }
        
    }
}
