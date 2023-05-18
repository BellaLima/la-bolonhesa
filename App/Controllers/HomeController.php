<?php

namespace App\Controllers;


Class HomeController extends Controller
{
    public function index()
    {
        $data['style'] = [];
        $data['script'] = [''];
        $this->render('/home/index', $data);
    }
    
}