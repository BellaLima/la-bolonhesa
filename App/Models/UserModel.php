<?php

namespace App\Models;
use App\Lib\Debug as Debug;

Class UserModel extends Model 
{
    public function verificar_usuario($email, $senha){
        try{
            $user = $this->select('users', '*', "WHERE email = '$email' AND senha = '$senha'");
            if($user){
                return $user;
            } else {
                return false;
            }
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }

    }

    public function getAllUsers(){
        try{
            $users = $this->select('users', '*', "WHERE ativo = 1");
            if($users){
                return $users;
            } else {
                return false;
            }
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }
    }

    public function deletuser($id){
        try{
            $cols = [
                ':ativo' => 0,
            ];
            
            $where = "WHERE id = '$id[0]'";
            
            $this->update('users', $cols, $where);
            
            return true;
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }
    }

    public function insertUser($dados){
        $cols = ":nivel, :nome, :email, :cpf, :senha, :telefone, :ativo";
        $values = [
            ':nivel' => $dados['nivel'],
            ':nome' => $dados['nome'],
            ':email' => $dados['email'],
            ':cpf' => $dados['cpf'],
            ':telefone' => $dados['telefone'], 
            ':senha' => $dados['senha'],
            ':ativo' => 1
        ];

        if($this->insert('users', $cols, $values)){
            return true;
        }else {
            return false;
        }
    }

    public function getUser($id){
        try{
            $user = $this->select('users', '*', "WHERE ativo = 1 AND id = ".$id);
            if($user[0]){
                return $user[0];
            } else {
                return false;
            }
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }
    }

    public function updateUser($cols, $id){
        try{
            
            $where = "WHERE id = '$id'";
            $this->update('users', $cols, $where);
            
            return true;
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }
    }

}