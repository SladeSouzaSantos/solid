<?php

namespace App;

use App\Email;

class Mensageiro{

    private $canal;

public function setCanal(string $canal): void{
    $this->canal = $canal;
}

public function getCanal() : string{
    return $this->canal;
}

    public function enviarToken(): void{
        $classe = '\App\\'.ucfirst($this->getCanal());
        echo $classe;
        echo '<br>';
        $obj = new $classe;
        $obj->enviar();
    }
}