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

    public function logout(){
        $destroiSessao = (new Sessao())->destruirSessao();
        $data['style'] = [''];
        $data['script'] = [''];
        $this->render('/home', $data);
    }

    public function userstore(){ 
        $this->verify();

        $cols = [
            'nivel' => trim($_POST['type-user']),
            'nome' => strtoupper(preg_replace('/[^a-zA-Z0-9\s]/', '',trim($_POST['nome']))),
            'email' => trim($_POST['email']),
            'cpf' => preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['cpf']))),
            'telefone' => preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['telefone']))),
            'senha' => md5(trim($_POST['senha'])),
        ];

        $insert = (new UserModel())->insertUser($cols);
        
        if($insert){
            $data = [
                'stattus' => 'success',
                'message' => 'Usuário cadastrado com sucesso',
                'host' => APP_HOST
            ];
            echo json_encode($data);
            exit;
        }else{
            $data = [
                'stattus' => 'error',
                'message' => 'Erro ao cadastrar usuário',
            ];
            echo json_encode($data);
            exit;
        }
        exit;
    }

    public function userupdate(){
        $this->verify();

        $id = preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['id'])));

        $cols = [
            ':nivel' => trim($_POST['type-user']),
            ':nome' => strtoupper(preg_replace('/[^a-zA-Z0-9\s]/', '',trim($_POST['nome']))),
            ':email' => trim($_POST['email']),
            ':cpf' => preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['cpf']))),
            ':telefone' => preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['telefone']))),
            ':senha' => md5(trim($_POST['senha'])),
        ];

        $update = (new UserModel())->updateUser($cols, $id);

        if($update){
            $data = [
                'stattus' => 'success',
                'message' => 'Usuário atualizado com sucesso',
                'host' => APP_HOST
            ];
            echo json_encode($data);
            exit;
        }else{
            $data = [
                'stattus' => 'error',
                'message' => 'Erro ao atualizar usuário',
            ];
            echo json_encode($data);
            exit;
        }
        exit;
    }
    
    public function deleteuser($id){
        $this->verify();

        $deletuser = (new UserModel())->deletuser($id);
        
        if($deletuser){
           $this->redirect('/admin/userlist');
        };
        exit;
    }

}