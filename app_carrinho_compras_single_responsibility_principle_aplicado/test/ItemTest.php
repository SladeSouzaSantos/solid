<?php

use App\Item;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class ItemTest extends TestCase{
    public function testConstrutor(){
        $item = new Item();

        $this->assertEquals("", $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testSetGetDescricao(){
        $descricao = "Cadeira";
        $item = new Item();
        $item->setDescricao($descricao);

        $this->assertEquals($descricao, $item->getDescricao());
    }

    public function testSetGetValor(){
        $valor = 50.0;
        $item = new Item();
        $item->setValor($valor);

        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValido(){
        $descricao = "Cadeira";
        $valor = 50.0;
        $item = new Item();

        $this->assertEquals(false, $item->itemValido());
        
        $item->setValor($valor);
        $item->setDescricao($descricao);
        $this->assertEquals(true, $item->itemValido());
    }

    public function testItemValidoValorError(){
        $descricao = "Cadeira";
        $valor = 0.0;
        $item = new Item();
                
        $item->setValor($valor);
        $item->setDescricao($descricao);
        $this->assertEquals(false, $item->itemValido());
    }

    public function testItemValidoDescricaoError(){
        $descricao = "";
        $valor = 50.0;
        $item = new Item();
        
        $item->setValor($valor);
        $item->setDescricao($descricao);
        $this->assertEquals(false, $item->itemValido());
    }
}