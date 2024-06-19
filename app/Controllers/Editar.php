<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUsuario;
use CodeIgniter\HTTP\ResponseInterface;
use PhpParser\Node\Stmt\Return_;

class Editar extends BaseController
{
    public function index()
    {
        $model = new ModelUsuario();
        
        $id = session()->get("id");
        $nome = $this->request->getPost('nome');
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');
        $ftPerfil = $this->request->getFile('ft-perfil');
        $extP = pathinfo($ftPerfil, PATHINFO_EXTENSION);
        $ftBanner = $this->request->getFile('ft-banner');
        $extB = pathinfo($ftBanner, PATHINFO_EXTENSION);


        if ($ftPerfil->isValid() && !$ftPerfil->hasMoved()) {
            $nomeFoto = $ftPerfil->getRandomName();
            $ftPerfil->move(ROOTPATH . 'public/assets/img/', $nomeFoto);
            session()->set(["fotoPerfil" => $nomeFoto]);
            
        } else {
            $nomeFoto = session()->get("fotoPerfil");
        }
        
        if ($ftBanner->isValid() && !$ftBanner->hasMoved()) {
            $nomeBanner = $ftBanner->getRandomName();
            $ftBanner->move(ROOTPATH . 'public/assets/img/', $nomeBanner);
            session()->set(["fotoBanner" => $nomeBanner]);
            
            
        } else {
            $nomeBanner = session()->get("fotoBanner");
        }
       
        $dados = [
            "nome"                     =>       $nome,
            "email"                    =>       $email,
            "senha"                    =>       $senha,
            "caminho_foto_perfil"      =>      $nomeFoto,
            "caminho_foto_fundo"       =>      $nomeBanner
        ];

        $edicao = $model->Editar($id, $dados);

        if($edicao != true){
            echo "Erro ao alterar";
        }

        return redirect()->to("/meuPerfil");
    }
}
