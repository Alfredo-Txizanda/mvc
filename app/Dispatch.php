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
            $this->Obj = new $nameSpace;

            if (isset($this->parserUrl()[1])) {
                self::addMethod();
            }
        }

        //método add método controller
        private function addMethod() {
            if (method_exists($this->Obj, $this->parserUrl()[1])) {

            } else {
                
            }
        }

        //método add parâmetros do controller
        private function addParam(){}
    }
