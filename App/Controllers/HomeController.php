<?php

namespace App\Controllers;


Class HomeController extends Controller
{
    public function index()
    {

        $data['style'] = [''];
        $data['script'] = [''];
        $this->render('/home/index', $data);
    }

    public function login(){

        if($_SESSION['loged']){
            $data['style'] = [''];
            $data['script'] = ['login'];
            $this->render('/home/index', $data);
            exit;
        }

        $data['style'] = [''];
        $data['script'] = ['login'];
        $this->render('/home/login', $data);
    }
    
}