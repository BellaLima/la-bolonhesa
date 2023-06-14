<?php

namespace App\Controllers;

use App\Models\UserModel as UserModel;

use App\Lib\Debug as Debug;

Class AdminController extends Controller
{

    public function verify(){
        if($_SESSION['loged']){
            if($_SESSION['nivel'] != 1){
                $data['style'] = [''];
                $data['script'] = [''];
                $this->render('/', $data);
            }
        }
    }

    public function userlist(){
        $this->verify();

        $usuarios = (new UserModel())->getAllUsers();
        
        $data['style'] = [''];
        $data['script'] = [''];
        $data['usuarios'] = $usuarios;
        $this->render('/adm/userlist', $data);
    }
    
}