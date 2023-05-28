<?php

namespace App\Lib;

class Sessao
{
    function criarSessaoUsuario($user) {

        $duracaoEmSegundos = 2 * 60;

        session_set_cookie_params($duracaoEmSegundos);

        session_start();

        $_SESSION['id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['nivel'] = $user['nivel'];

        exit();
    }

    function destruirSessao() {
        session_start();
        session_destroy(); 
    }    

}