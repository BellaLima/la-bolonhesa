<?php

namespace App\Controllers;


Class HomeController extends Controller
{
    public function index()
    {
        if($_SESSION['nivel'] == 1){
            $data['style'] = [''];
            $data['script'] = [''];
            $this->render('/adm/index', $data);
        } else {
            $data['style'] = [''];
            $data['script'] = [''];
            $this->render('/home/index', $data);
        }
    }

    public function login(){

        if($_SESSION['loged']){
            $this->index();
        }

        $data['style'] = [''];
        $data['script'] = ['login'];
        $this->render('/home/login', $data);
        exit;
    }
    
}