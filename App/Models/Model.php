<?php

namespace App\Models;

use PDO;
use PDOException;

use App\Lib\Conexao;

abstract class Model
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::getConnection();
    }

    public function select($table, $cols, $where = null)
    {
        if(!empty($table) && !empty($cols))
        {
            try{
                $stmt = $this->conexao->prepare("SELECT $cols FROM $table $where");
                $stmt->execute();
                $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $dados;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        } else {
            return false;
        }
    }

    public function selectwithjoin($table, $cols, $join = null, $where = null, $params = array())
    {
        if(!empty($table) && !empty($cols))
        {
            try{
                $sql = "SELECT $cols FROM $table $join";
                if (is_string($where)) {
                    $sql .= " $where";
                } else {
                    $sql .= "";
                }
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute($params);
                $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $dados;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        } else {
            return false;
        }
    }

    public function insert($table, $cols, $values) 
    {
        if(!empty($table) && !empty($cols) && !empty($values))
        {
            try{
                $colunas = str_replace(":", "", $cols);
                $stmt = $this->conexao->prepare("INSERT INTO $table ($colunas) VALUES ($cols)");
                $status = $stmt->execute($values);
                return $status;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        } else {
            return false;
        }
    }


    public function update($table, $cols, $where)
    {
        if(!empty($table) && !empty($cols) && !empty($where))
        {
            try{
                $set = "";
                foreach ($cols as $col => $value) {
                    $set .= substr($col, 1) . " = " . $col . ",";
                }
                $set = rtrim($set, ",");
                $stmt = $this->conexao->prepare("UPDATE $table SET $set $where");
                $status = $stmt->execute($cols);
                return $status;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }else{
            return false;
        }
    }

    public function delete($table, $where)
    {
        if(!empty($table) && !empty($where))
        {
            try{
                $set = "active = 0";
                $stmt = $this->conexao->prepare("UPDATE $table SET $set $where");
                $status = $stmt->execute();
                return $status;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }else{
            return false;
        }
    }
}