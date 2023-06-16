<?php

namespace App\Controllers;

use App\Models\TamanhoModel as TamanhoModel;
use App\Lib\Sessao as Sessao;
use App\Lib\Debug as Debug;

Class TamanhoController extends Controller
{
    public function tamanhostore(){
        $this->verify();
        
        $cols = [
            'nome' => strtoupper(preg_replace('/[^a-zA-Z0-9\s]/', '',trim($_POST['nome']))),
            'multiplicador' => preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['multiplicador']))),
        ];

        $insert = (new TamanhoModel())->insertTamanho($cols);
        
        if($insert){
            $data = [
                'stattus' => 'success',
                'message' => 'Tamanho cadastrado com sucesso',
                'host' => APP_HOST
            ];
            echo json_encode($data);
            exit;
        }else{
            $data = [
                'stattus' => 'error',
                'message' => 'Erro ao cadastrar tamanho',
            ];
            echo json_encode($data);
            exit;
        }
        exit;
    }

    public function tamanhodelete($id){
        $this->verify();

        $delet = (new TamanhoModel())->tamanhoDelete($id);
        
        if($delet){
           $this->redirect('/admin/tamanholist');
        };
        exit;
    }

    public function tamanhoupdate(){
        $this->verify();

        $id = preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['id'])));

        $cols = [
            ':nome' => strtoupper(preg_replace('/[^a-zA-Z0-9\s]/', '',trim($_POST['nome']))),
            ':multiplicador' => preg_replace('/\s+/', '', preg_replace('/[^a-zA-Z0-9\s]/', '', trim($_POST['multiplicador']))),
        ];
        
        $update = (new TamanhoModel())->tamanhoUpdate($cols, $id);

        if($update){
            $data = [
                'stattus' => 'success',
                'message' => 'Tamanho atualizado com sucesso',
                'host' => APP_HOST
            ];
            echo json_encode($data);
            exit;
        }else{
            $data = [
                'stattus' => 'error',
                'message' => 'Erro ao atualizar tamanho',
            ];
            echo json_encode($data);
            exit;
        }
        exit;
    }
}