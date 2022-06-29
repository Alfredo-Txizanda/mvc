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
        protected function getMethod() {return $this->Method;}

        /**
         * @param mixed $Method
         */
        public function setMethod($Method) {$this->Method = $Method;}

        /**
         * @return array
         */
        protected function getParam() { return $this->Param;}

        /**
         * @param array $Param
         */
        public function setParam($Param) {$this->Param = $Param;}

        /**
         * @return mixed
         */
        public function getObj(){return $this->Obj;}

        /**
         * @param mixed $Obj
         */
        public function setObj($Obj) {$this->Obj = $Obj;}

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
                $this->setMethod(("{$this->parserUrl()[1]}"));
                self::addParam();
                call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
            }
        }

        //método add parâmetros do controller
        private function addParam(){}
    }
