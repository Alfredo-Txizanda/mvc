<?php

namespace App\controller;

class ControllerCarro
{
    public function valorCarro($tipo, $motor) {
        if ($tipo == 'veiculos' && $motor == '1') {
            $valor = '1000,00';
        } elseif ($tipo == 'caminhao' && $motor == '2'){
            $valor = '2000,00';
        } elseif ($tipo == 'caminhao' && $motor == '1'){
            $valor = '5000,00';
        } elseif ($tipo == 'caminhao' && $motor == '2'){
            $valor = '10000,00';
        }
         echo "O tipo de carro é {$tipo} com motor {$motor} e o seu valor é {$valor}";
    }
}