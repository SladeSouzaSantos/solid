<?php

namespace App;

class Poligonos {
    private $forma;

    public function setForma(object $forma) : void{
        $this->forma = $forma;
    }

    public function getForma() : object{
        return $this->forma;
    }

    public function getArea() : float{
        return $this->forma->getLargura()*$this->forma->getAltura();
    }
}