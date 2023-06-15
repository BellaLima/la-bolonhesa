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

}