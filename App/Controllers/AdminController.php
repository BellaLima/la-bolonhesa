<?php

namespace App\Controllers;

use App\Models\UserModel as UserModel;
use App\Lib\Debug as Debug;


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
        $this->verify();

        $cols = [
            'nivel' => trim($_POST['type-user']),
            'nome' => preg_replace('/[^a-zA-Z0-9\s]/', '',trim($_POST['nome'])),
            'email' => trim($_POST['email']),
            'cpf' => preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['cpf']))),
            'telefone' => preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['telefone']))),
            'senha' => md5(trim($_POST['senha'])),
        ];

        $insert = (new UserModel())->insertUser($cols);
        
        if($insert){
            $data = [
                'stattus' => 'success',
                'message' => 'Usuário cadastrado com sucesso',
                'host' => APP_HOST.'/admin/userlist'
            ];
            echo json_encode($data);
            exit;
        }else{
            $data = [
                'stattus' => 'error',
                'message' => 'Erro ao cadastrar usuário',
            ];
            echo json_encode($data);
            exit;
        }
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