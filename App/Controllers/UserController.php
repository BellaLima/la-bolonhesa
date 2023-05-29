<?php

namespace App\Controllers;

use App\Models\UserModel as UserModel;
use App\Lib\Sessao as Sessao;
use App\Lib\Debug as Debug;

Class UserController extends Controller
{

  public function login(){
      if(isset($_POST['email']) && isset($_POST['password'])){
            $email = strtoupper($_POST['email']);
            $senha = md5($_POST['password']);
            
            $User = (new UserModel())->verificar_usuario($email, $senha);

            if($User[0]){
                $verificaSessao = (new Sessao())->criarSessaoUsuario($User[0]);
                if($verificaSessao){
                    if($_SESSION['nivel'] == 1){
                        echo json_encode(array('status' => 'success', 'message' => 'Usuário logado com sucesso', 'redirect' => 'http://'.APP_HOST));
                        exit;
                    } else {
                        echo json_encode(array('status' => 'success', 'message' => 'Usuário logado com sucesso', 'redirect' => 'http://'.APP_HOST));
                        exit;
                    }
                } else {
                    $_SESSION['error'] = 'Erro ao criar sessão';
                    echo json_encode(array('status' => 'error', 'message' => 'Erro ao criar sessão'));
                    exit;
                }
            } else {
                $_SESSION['error'] = 'Usuário ou senha inválidos';
                echo json_encode(array('status' => 'error', 'message' => 'Usuário ou senha inválidos'));
                exit;
            }
      }
  }

}