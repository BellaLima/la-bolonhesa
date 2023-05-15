<?php

namespace Lib;

use ReflectionClass;

abstract class Controller
{
    public function index(): void
    {
        $view_name = (new ReflectionClass(get_called_class()))->getShortName();
        View::render(str_replace("Controller", "", $view_name));
    }

    public function redirect($view): never
    {
        header('Location: http://' . APP_HOST . $view);
        exit;
    }
}