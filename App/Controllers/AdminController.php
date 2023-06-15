<?php

namespace App\Controllers;

use App\Models\UserModel as UserModel;


Class AdminController extends Controller
{
    public function userlist(){

        $usuarios = (new UserModel())->getAllUsers();
        
        $data['style'] = [''];
        $data['script'] = [''];
        $data['usuarios'] = $usuarios;
        $this->renderadm('/adm/userlist', $data);
        exit;
    }

    public function usercreate($id){
        $data['style'] = [''];
        $data['script'] = ['user'];

        $this->renderadm('/adm/usercreate', $data);
        exit;
    }

    public function userstore(){
        
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