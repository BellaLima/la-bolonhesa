<?php

namespace App\Models;
use App\Lib\Debug as Debug;

Class TamanhoModel extends Model 
{
    public function getAllTamanhos(){
        try{
            $tamanhos = $this->select('tamanho', '*', "WHERE ativo = 1");
            if($tamanhos){
                return $tamanhos;
            } else {
                return false;
            }
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }
    }

    public function insertTamanho($dados){
        $cols = ":nome, :multiplicador, :ativo";

        $values = [
            ':nome' => $dados['nome'],
            ':multiplicador' => $dados['multiplicador'],
            ':ativo' => 1
        ];

        if($this->insert('tamanho', $cols, $values)){
            return true;
        }else {
            return false;
        }
    }

    public function tamanhoDelete($id){
        try{
            $cols = [
                ':ativo' => 0,
            ];
            
            $where = "WHERE id = '$id[0]'";
            
            $this->update('tamanho', $cols, $where);
            
            return true;
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }
    }

    public function getTamanho($id){
        try{
            $tamanho = $this->select('tamanho', '*', "WHERE ativo = 1 AND id = ".$id);
            if($tamanho[0]){
                return $tamanho[0];
            } else {
                return false;
            }
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }
    }

    public function tamanhoUpdate($cols, $id){
        try{
            
            $where = "WHERE id = '$id'";
            $this->update('tamanho', $cols, $where);
            
            return true;
        } catch(\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
}