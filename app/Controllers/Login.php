<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelUsuario;

class Login extends BaseController
{
    public function login_submit(){
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $modelUser = new ModelUsuario();
        $login = $modelUser->login($email, $senha);
        if ($login == true){
            // iniciação de sessão com base no id do usuario
            session()->set("id", $login->id);
            
            return redirect()->to("/mainpage");
        }else{
            echo "Usuario não encontrado";
        }

    }
}
