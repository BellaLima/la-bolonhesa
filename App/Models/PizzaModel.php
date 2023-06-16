<?php

namespace App\Models;
use App\Lib\Debug as Debug;

Class PizzaModel extends Model 
{
    public function getAllPizza(){
        try{
            $pizzas = $this->select('pizza', '*', "WHERE ativo = 1");
            if($pizzas){
                return $pizzas;
            } else {
                return false;
            }
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }
    }

    public function insertCategoria($dados){
        $cols = ":nome, :imagem, :ativo";
        
        $values = [
            ':nome' => $dados['nome'],
            ':imagem' => $dados['image'],
            ':ativo' => 1
        ];

        if($this->insert('categoria', $cols, $values)){
            return true;
        }else {
            return false;
        }
    }

    public function updateCategoria($dados, $id){
        if(!empty($dados['image'])){
            $cols = [
                ':nome' => $dados['nome'],
                ':imagem' => $dados['image'],
            ];
        }else{
            $cols = [
                ':nome' => $dados['nome'],
            ];
        }

        $where = "WHERE id = '$id'";

        if($this->update('categoria', $cols, $where)){
            return true;
        }else {
            return false;
        }
    }

    public function categoriaDelete($id){
        try{
            $cols = [
                ':ativo' => 0,
            ];
            
            $where = "WHERE id = '$id[0]'";
            
            $this->update('categoria', $cols, $where);
            
            return true;
        } catch(\Exception $e){
            echo $e->getMessage();
            exit;
        }
    }

    public function getCategoria($id){
        try{
            $tamanho = $this->select('categoria', '*', "WHERE ativo = 1 AND id = ".$id);
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
}