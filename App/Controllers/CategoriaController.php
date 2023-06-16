<?php

namespace App\Controllers;

use App\Models\CategoriaModel as CategoriaModel;
use App\Lib\Sessao as Sessao;
use App\Lib\Debug as Debug;

Class CategoriaController extends Controller
{
    public function categoriastore(){
        if(isset($_FILES['imagem'])){
            $dados = [
                'nome' => strtoupper(preg_replace('/[^a-zA-Z0-9\s]/', '',trim($_POST['nome']))),
            ];
            $imagem = $_FILES['imagem'];
            $arquivo_tmp = $imagem['tmp_name'];
            $nome = $imagem['name'];
            $extensao = pathinfo($nome, PATHINFO_EXTENSION);
            $extensao = strtolower($extensao);
            if(strstr('.jpg;.jpeg;.gif;.png;.webp', $extensao)){
                $novoNome = uniqid(time()) . '.' . $extensao;
                $destino = 'public/images/uploads/' . $novoNome;
                if(move_uploaded_file($arquivo_tmp, $destino)){
                    $dados['image'] = $novoNome;
                    $movie = new CategoriaModel();
                    if($movie->insertCategoria($dados)){
                        $data = [
                            'stattus' => 'success',
                            'message' => 'Categoria cadastrado com sucesso',
                            'host' => APP_HOST
                        ];
                        echo json_encode($data);
                        exit;
                    }else{
                        $data = [
                            'stattus' => 'error',
                            'message' => 'Erro ao salvar o arquivo'
                        ];
                        echo json_encode($data);
                        exit;
                    }
                } else {
                    $data = [
                        'stattus' => 'error',
                        'message' => 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.'
                    ];
                    echo json_encode($data);
                    exit;
                }
            } else {
                $data = [
                    'stattus' => 'error',
                    'message' => 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"'
                ];
                echo json_encode($data);
                exit;
            }
        } else {
            $data = [
                'stattus' => 'error',
                'message' => 'Preencha todos os campos'
            ];
            echo json_encode($data);
            exit;
        }
    }

    public function categoriaupdate(){
        $dados = [
            'nome' => strtoupper(preg_replace('/[^a-zA-Z0-9\s]/', '',trim($_POST['nome']))),
        ];
        if(!empty($_FILES['imagem']['name'])){
            $imagem = $_FILES['imagem'];
            $arquivo_tmp = $imagem['tmp_name'];
            $nome = $imagem['name'];
            $extensao = pathinfo($nome, PATHINFO_EXTENSION);
            $extensao = strtolower($extensao);
            if(strstr('.jpg;.jpeg;.gif;.png;.webp', $extensao)){
                $novoNome = uniqid(time()) . '.' . $extensao;
                $destino = 'public/uploads/' . $novoNome;
                if(move_uploaded_file($arquivo_tmp, $destino)){
                    $dados['image'] = $novoNome;
                    $movie = new CategoriaModel();
                    if($movie->updateCategoria($dados , $_POST['id'])){
                        $data = [
                            'stattus' => 'success',
                            'message' => 'Categoria atualizado com sucesso',
                            'host' => APP_HOST
                        ];
                        echo json_encode($data);
                        exit;
                    }else{
                        $data = [
                            'stattus' => 'error',
                            'message' => 'Erro ao salvar o arquivo'
                        ];
                        echo json_encode($data);
                        exit;
                    }
                } else {
                    $data = [
                        'stattus' => 'error',
                        'message' => 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.'
                    ];
                    echo json_encode($data);
                    exit;
                }
            } else {
                $data = [
                    'stattus' => 'error',
                    'message' => 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"'
                ];
                echo json_encode($data);
                exit;
            }
        } else {
            $movie = new CategoriaModel();
            if($movie->updateCategoria($dados, $_POST['id'])){
                $data = [
                    'stattus' => 'success',
                    'message' => 'Categoria atualizado com sucesso',
                    'host' => APP_HOST
                ];
                echo json_encode($data);
                exit;
            }else{
                $data = [
                    'stattus' => 'error',
                    'message' => 'Erro ao salvar o arquivo'
                ];
                echo json_encode($data);
                exit;
            }
        }

    }

    public function categoriadelete($id){
        $this->verify();

        $delet = (new CategoriaModel())->categoriaDelete($id);
        
        if($delet){
           $this->redirect('/admin/categorialist');
        };
        exit;
    }
}