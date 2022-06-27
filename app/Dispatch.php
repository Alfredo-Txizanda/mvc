<?php

    namespace App;

    use Src\Classes\ClassRoutes;

    class Dispatch extends ClassRoutes {

        //atributos
        private $Method;
        private $Param = [];
        private $Obj;
        
        //método Constructor
        public function __construct() {
            self::addController();
        }

        //método add controller
        private function addController() {
            $rotaController = $this->getRota();
            $nameSpace = "App\Controller\\{$rotaController}";
            $thi
        }

        //método add método controller
        private function addMethod() {}

        //método add parâmetros do controller
        private function addParam(){}
    }
