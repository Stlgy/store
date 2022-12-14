<?php
    namespace app\core;

use Controller;
use Response;

class Application
    {
        public static string $ROOT_DIR;
        public Router $router;
        public Request $request;
        public Response $response;
        public static Application $app;
        public Controller $controller;
        public function __constructor ($rootPath)
        {
            self::$ROOT_DIR = $rootPath;
            self::$app = $this;
            $this->request = new Request();
            $this->response = new Response(); 
            $this->router  = new Router($this->request, $this->response);
        }
        public function run()
        {
            echo $this->router->resolve();
        }
        /**
         * @return \app\core\Controller
         */
        public function getController(): \app\core\getController
        {
            return $this->controller;
        }
        /**
        *@param \app\core\Controller $controller
        */
        public function setController(\app\core\Controller $controller) :void
        {
            $this->controller = $controller;
        }
    }
?>
