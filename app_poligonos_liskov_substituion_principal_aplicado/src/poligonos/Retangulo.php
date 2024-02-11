<?php

namespace App\poligonos;

class Retangulo {
    protected $altura;
    protected $largura;

    public function setAltura(float $altura) : void{
        $this->altura = $altura;
    }

    public function setLargura(float $largura) : void{
        $this->largura = $largura;
    }

    public function getAltura() : float{
        return $this->altura;
    }

    public function getLargura() : float{
        return $this->largura;
    }
    
}