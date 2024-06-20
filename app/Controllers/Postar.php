<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Posts;
use CodeIgniter\HTTP\ResponseInterface;

class Postar extends BaseController
{
    public function index()
    {
        $titulo = $this->request->getPost("nomePost");
        $postagem = $this->request->getFile("imgPost");

        if ($postagem->isValid() && !$postagem->hasMoved()) {
            $nomePost = $postagem->getRandomName();
            $postagem->move(ROOTPATH . 'public/assets/img/posts/', $nomePost);
        } 

        $id = session()->get("id");

        $modal = new Posts();
        $postar = $modal->Postar($id, $titulo, $nomePost);
        if ($postar != true){
            echo "Não postou";
        }
        return redirect()->to("/mainpage");
    }
}
