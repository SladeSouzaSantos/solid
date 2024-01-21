<?php

namespace App;
use App\CarrinhoCompra;

class Pedido {
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    public function __construct(){
        $this->status = "aberto";
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0.0;
    }

    public function getCarrinhoCompra(){
        return $this->carrinhoCompra;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getValorPedido(){
        $this->valorPedido = 0;
        foreach($this->carrinhoCompra->getItens() as $key => $item){
            $this->valorPedido += $item->getValor();
        }
        return $this->valorPedido;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function confirmar(){
        if($this->carrinhoCompra->validarCarrinho()){
            $this->setStatus("confirmado");
            return true;
        }

        return false;
    }
}