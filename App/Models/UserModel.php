<?php

namespace App\Models;

Class UserModel extends Model
{

    public function verificar_usuario($email, $senha){
        echo 'Email: ' . $email . '<br>';
        echo 'Senha: ' . $senha . '<br>';
        
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