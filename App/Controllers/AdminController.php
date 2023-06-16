<?php

namespace App\Controllers;

use App\Models\UserModel as UserModel;
use App\Lib\Debug as Debug;
use App\Models\CategoriaModel;
use App\Models\TamanhoModel;

Class AdminController extends Controller
{ 
    public function userlist(){
        $usuarios = (new UserModel())->getAllUsers();
        
        $data['style'] = [''];
        $data['script'] = ['user'];
        $data['usuarios'] = $usuarios;
        $this->renderadm('/adm/user/userlist', $data);
        exit;
    }

    public function usercreate($id){
        $data['style'] = [''];
        $data['script'] = ['user'];

        $this->renderadm('/adm/user/usercreate', $data);
        exit;
    }

    public function editeuser($id){
        $this->verify();
        
        $usuario = (new UserModel())->getUser($id[0]);
        
        $data['style'] = [''];
        $data['script'] = ['user'];
        $data['usuario'] = $usuario;
        $this->renderadm('/adm/user/useredit', $data);
        exit;
    }

    public function tamanholist(){
        $tamanhos = (new TamanhoModel())->getAllTamanhos();
        
        $data['style'] = [''];
        $data['script'] = [''];
        $data['tamanhos'] = $tamanhos;
        $this->renderadm('/adm/tamanho/tamanholist', $data);
        exit;
    }

    public function tamanhocreate($id){
        $data['style'] = [''];
        $data['script'] = ['tamanho'];

        $this->renderadm('/adm/tamanho/tamanhocreate', $data);
        exit;
    }

    public function tamanhoedit($id){
        $this->verify();
        
        $tamanho = (new TamanhoModel())->getTamanho($id[0]);
        
        $data['style'] = [''];
        $data['script'] = ['tamanho'];
        $data['tamanho'] = $tamanho;
        $this->renderadm('/adm/tamanho/tamanhoedit', $data);
        exit;
    }

    public function categorialist(){
        $categorias = (new CategoriaModel())->getAllCategoria();
        
        $data['style'] = [''];
        $data['script'] = [''];
        $data['categorias'] = $categorias;
        $this->renderadm('/adm/categoria/categorialist', $data);
        exit;
    }

    public function categoriacreate($id){
        $data['style'] = [''];
        $data['script'] = ['categoria'];

        $this->renderadm('/adm/categoria/categoriacreate', $data);
        exit;
    }

    public function categoriaedit($id){
        $this->verify();
        
        $categoria = (new CategoriaModel())->getCategoria($id[0]);
        
        $data['style'] = [''];
        $data['script'] = ['categoria'];
        $data['categoria'] = $categoria;
        $this->renderadm('/adm/categoria/categoriaedit', $data);
        exit;
    }
}