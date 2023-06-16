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

    public function insertPizza($dados){
        $cols = ":nome, :imagem, :descricao, :preco_base, :categoria_id, :tamanho_id, :ativo";
        
        $values = [
            ':nome' => $dados['nome'],
            ':imagem' => $dados['imagem'],
            ':descricao' => $dados['descricao'],
            ':preco_base' => $dados['preco_base'],
            ':categoria_id' => $dados['categoria_id'],
            ':tamanho_id' => $dados['tamanho_id'],
            ':ativo' => 1
        ];

        if($this->insert('pizza', $cols, $values)){
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