<?php

namespace App;

class Item {
    private $descicao;
    private $valor;

    public function __construct(){
        $this->descicao = "";
        $this->valor = 0.0;
    }

    public function getDescricao(){
        return $this->descicao;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setDescricao(string $descicao){
        $this->descicao = $descicao;
    }

    public function setValor(float $valor){
        $this->valor = $valor;
    }

    public function itemValido(){
        if($this->descicao == ""){
            return false;
        }

        if($this->valor == 0){
            return false;
        }

        return true;
    }
}