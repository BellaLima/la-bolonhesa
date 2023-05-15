<?php

namespace Lib;


class View{
    static public function render(string $view_path, array $context=[]): void
    {
        require_once BASE_PATH . '/App/Views/' . $view_path . '/index.php';
    }
}