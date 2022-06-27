<?php

    namespace Src\Classes;

    use Src\Traits\TraitUrlParser;

    class ClassRoutes {
        use TraitUrlParser;

        //declaração de variável
        private $Rota;

        //método de retorno da rota
        public function getRota() {
            $Url = $this->parserUrl();
            
            $I = $Url[0];

            $this->Rota = array (
                ""=>"ControllerHome",
                "home"=>"ControllerHome",
                "sitemap"=>"ControllerSitemap"
            );

            if (array_key_exists($I, $this->Rota)) {
                if (file_exists(DIRREQ."app/controller/{$this->Rota[$I]}.php")) {
                    return $this->Rota[$I];
                } else {
                    return "ControllerHome";
                }
            } else {
                return "ControllerHome";
            }
        }
    }