<?php

namespace App;

use App\IMensagemToken;


class Mensageiro{

    private $canal;

    public function __construct(IMensagemToken $canal){
        $this->canal = $canal;
    }

    public function getCanal() : IMensagemToken{
        return $this->canal;
    }

    public function enviarToken(): void{
        $this->getCanal()->enviar();
    }
}