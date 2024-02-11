<?php

namespace App\poligonos;

class Quadrado{
    protected $altura;
    protected $largura;

    public function setLargura(float $largura) : void{
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function getAltura() : float{
        return $this->altura;
    }

    public function getLargura() : float{
        return $this->largura;
    }
}