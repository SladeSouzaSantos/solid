<?php

require __DIR__."/vendor/autoload.php";
use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

echo "<h3>COM SRP</h3>";

$pedido = new Pedido();
//----------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao("Porta Copo");
$item1->setValor(4.55);

$item2->setDescricao("Lâmpada");
$item2->setValor(8.32);
//----------------------------------
echo "<h4>Pedido</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";
//----------------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
//----------------------------------
echo "<h4>Pedido</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";
//----------------------------------
echo "<h4>Itens do Carrinho</h4>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "</pre>";
//----------------------------------
echo "<h4>Valor do Pedido</h4>";
echo $pedido->getValorPedido();
//----------------------------------
echo "<h4>Carrinho está válido?</h4>";
echo $pedido->getCarrinhoCompra()->validarCarrinho();
//----------------------------------
echo "<h4>Status Pedido</h4>";
echo $pedido->getStatus();
//----------------------------------
echo "<h4>Confirmar Pedido</h4>";
echo $pedido->confirmar();
//----------------------------------
echo "<h4>Status Pedido</h4>";
echo $pedido->getStatus();
//----------------------------------
echo "<h4>E-mail</h4>";
if($pedido->getStatus() == "confirmado"){
    echo EmailService::dispararEmail();
}