<?php

namespace App\Lib;

class Sessao
{
    function criarSessaoUsuario($user) {
        session_destroy(); 
        $duracaoEmSegundos = 2 * 60;

        session_set_cookie_params($duracaoEmSegundos);

        session_start();

        $_SESSION['id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['nivel'] = $user['nivel'];
        $_SESSION['loged'] = true;

        return true;
    }

    function destruirSessao() {
        session_start();
        session_destroy();
        $_SESSION['loged'] = false; 
    }    

}