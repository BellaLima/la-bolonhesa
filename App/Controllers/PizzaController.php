<?php

namespace App\Controllers;

use App\Lib\Debug;
use App\Models\CategoriaModel;
use App\Models\PizzaModel;
use App\Models\TamanhoModel;

Class PizzaController extends Controller
{
    public function index()
    {

        $pizzas = (new PizzaModel())->getAllPizza();
        
        $data['style'] = [''];
        $data['script'] = [''];
        $data['pizzas'] = $pizzas;

        $categorias = (new CategoriaModel())->getAllCategoria();
        $tamanhos = (new TamanhoModel())->getAllTamanhos();

        $data['categorias'] = $categorias;
        $data['tamanhos'] = $tamanhos;
        $this->render('/pizza/index', $data);
    }

    public function pedido()
    {

        $data['style'] = [''];
        $data['script'] = [''];
        $this->render('/pizza/pedido', $data);
    }
    
    public function pizzastore(){
        if(isset($_FILES['imagem'])){
            $dados = [
                'nome' => strtoupper(preg_replace('/[^a-zA-Z0-9\s]/', '',trim($_POST['nome']))),
                'descricao' => strtoupper(preg_replace('/[^,a-zA-Z0-9\s]/', '',trim($_POST['descricao']))),
                'preco_base' => intval(preg_replace('/\s+/', '', preg_replace('/[^0-9\s]/', '', trim($_POST['preco_base'])))),
                'categoria_id' => intval(preg_replace('/[^a-zA-Z0-9\s]/', '',trim($_POST['categoria']))),
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
                    $dados['imagem'] = $novoNome;
                    $movie = new PizzaModel();
                    if($movie->insertPizza($dados)){
                        $data = [
                            'stattus' => 'success',
                            'message' => 'Pizza cadastrado com sucesso',
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

    public function pizzadelete($id){
        $this->verify();

        $delet = (new PizzaModel())->pizzaDelete($id);
        
        if($delet){
           $this->redirect('/admin/pizzalist');
        };
        exit;
    }

}