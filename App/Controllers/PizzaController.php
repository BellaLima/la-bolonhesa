<?php

namespace App\Controllers;


Class PizzaController extends Controller
{
    public function index()
    {
        $data['style'] = [''];
        $data['script'] = [''];
        $this->render('/pizza/index', $data);
    }
    
}