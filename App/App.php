<?php

namespace App;

use App\Controllers\HomeController;
use Exception;
use Lib\Controller;

class App {
    private Controller | null $controller;
    private string $action = "";
    private array $params = [];
    public string $controllerName;

    public function __construct()
    {
        define('APP_HOST'       , $_SERVER['HTTP_HOST']);
        define('TITLE'          , "La Bolonhesa");
        define('DB_HOST'        , $_SERVER["DB_HOST"]);
        define('DB_USER'        , $_SERVER["DB_USER"]);
        define('DB_PASSWORD'    , $_SERVER["DB_PASSWORD"]);
        define('DB_NAME'        , $_SERVER["DB_NAME"]);
        define('DB_DRIVER'      , $_SERVER["DB_DRIVER"]);
        $this->getUrl();
    }

    /**
     * @throws Exception
     */
    public function run(): void
    {
        if (isset($this->controller)) {
            $this->controllerName = ucwords($this->controller) . 'Controller';
            $this->controllerName = preg_replace('/[^a-zA-Z]/i', '', $this->controllerName);
        } else {
            $this->controllerName = "HomeController";
        }

        $controllerFile = $this->controllerName . '.php';
        $this->action = preg_replace('/[^a-zA-Z]/i', '', $this->action);

        if (!isset($this->controller)) {
            $this->controller = new HomeController();
            $this->controller->index();
        }

        if (!file_exists(BASE_PATH . '/App/Controllers/' . $controllerFile)) {
            throw new Exception("Página não encontrada.", 404);
        }

        $nomeClasse     = "\\App\\Controllers\\" . $this->controllerName;
        $objetoController = new $nomeClasse($this);

        if (!class_exists($nomeClasse)) {
            throw new Exception("Erro na aplicação", 500);
        }

        if (method_exists($objetoController, $this->action)) {
            $objetoController->{$this->action}($this->params);
        } else if (!$this->action && method_exists($objetoController, 'index')) {
            $objetoController->index($this->params);
        } else {
            throw new Exception("Nosso suporte já esta verificando desculpe!", 500);
        }
        throw new Exception("Página não encontrada.", 404);
    }

    public function getUrl (): void {

        if ( isset( $_GET['url'] ) ) {

            $path = $_GET['url'];
            $path = rtrim($path, '/');
            $path = filter_var($path, FILTER_SANITIZE_URL);

            $path = explode('/', $path);

            $this->controller  = $this->verificaArray( $path, 0 );
            $this->action = $this->verificaArray( $path, 1 );

            if ( $this->verificaArray( $path, 2 ) ) {
                unset( $path[0] );
                unset( $path[1] );
                $this->params = array_values( $path );
            }
        }
    }

    private function verificaArray ( $array, $key ): array | null {
        if ( isset( $array[ $key ] ) && !empty( $array[ $key ] ) ) {
            return $array[ $key ];
        }
        return null;
    }
}