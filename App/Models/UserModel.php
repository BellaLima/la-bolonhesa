<?php

namespace App\Models;

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

}