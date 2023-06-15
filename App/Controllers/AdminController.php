<?php

namespace App\Controllers;

use App\Models\UserModel as UserModel;


Class AdminController extends Controller
{
    public function userlist(){
        $this->verify();

        $usuarios = (new UserModel())->getAllUsers();
        
        $data['style'] = [''];
        $data['script'] = [''];
        $data['usuarios'] = $usuarios;
        $this->render('/adm/userlist', $data);
        exit;
    }
    
    public function deleteuser($id){
        $this->verify();

        $deletuser = (new UserModel())->deletuser($id);
        
        if($deletuser){
           $this->userlist();
        };
        exit;
    }
}