<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Posts;
use CodeIgniter\HTTP\ResponseInterface;


class Main extends BaseController
{
    public function index()
    {
        return view('login');
    }
    
    public function cadastro()
    {
        return view('cadastro');
    }

    // rota de finalizar sessão
    public function closeSession()
    {
        session()->destroy();
        return redirect()->to("/");
    }
}
