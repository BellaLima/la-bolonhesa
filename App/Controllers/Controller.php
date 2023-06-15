<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Lib\Debug as Debug;

abstract class Controller
{
    protected $app;
    private $viewVar;

    public function __construct($app)
    {
        $this->setViewParam('nameController',$app->getControllerName());
    }

    public function verify(){
        if($_SESSION['loged']){
            if($_SESSION['nivel'] != 1){
                $data['style'] = [''];
                $data['script'] = [''];
                $this->render('/', $data);
            }
        }
    }

    public function render($view, $data = [])
    {
        $viewVar = $this->getViewVar();
        $Sessao  = Sessao::class;
        extract($data);

        if(empty($_SESSION['loged'])){
            $data['style'] = [''];
            $data['script'] = ['login'];
            
            extract($data);

            require_once PATH . '/App/Views/layouts/header.php';
            require_once PATH . '/App/Views/layouts/navbar.php';
            require_once PATH . '/App/Views/home/login.php';
            require_once PATH . '/App/Views/layouts/footer.php';
            exit;
        }


        require_once PATH . '/App/Views/layouts/header.php';
        if($_SESSION['nivel'] == 1){
            require_once PATH . '/App/Views/layouts/admnavbar.php';
        } else {
            require_once PATH . '/App/Views/layouts/navbar.php';
        }
        require_once PATH . '/App/Views/' . $view . '.php';
        require_once PATH . '/App/Views/layouts/footer.php';
        exit;
    }

    public function redirect($view)
    {
        header('Location: http://' . APP_HOST . $view);
        exit;
    }

    public function getViewVar()
    {
        return $this->viewVar;
    }

    public function setViewParam($varName, $varValue)
    {
        if ($varName != "" && $varValue != "") {
            $this->viewVar[$varName] = $varValue;
        }
    }
}