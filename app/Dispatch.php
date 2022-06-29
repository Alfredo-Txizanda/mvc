<?php

    namespace App;

    use Src\Classes\ClassRoutes;

    class Dispatch extends ClassRoutes {

        //atributos
        private $Method;
        private $Param = [];
        private $Obj;

        /**
         * @return mixed
         */
        public function getMethod() {return $this->Method;}

        /**
         * @param mixed $Method
         */
        public function setMethod($Method) {$this->Method = $Method;}

        /**
         * @return array
         */
        public function getParam() { return $this->Param;}

        /**
         * @param array $Param
         */
        public function setParam($Param) {$this->Param = $Param;}

        


        
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
