<?php

namespace App;
use App\Arquivo;

class Leitor{
    private $diretorio;
    private $arquivo;

    public function getDirectorio() : string{
        return $this->diretorio;
    }

    public function getArquivo() : string{
        return $this->arquivo;
    }

    public function setDirectorio($diretorio) : void{
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo) : void{
        $this->arquivo = $arquivo;
    }

    public function lerArquivo() : array{
        $caminho = $this->getDirectorio().'/'.$this->getArquivo();

        $arquivo = new Arquivo();
        
        $extensao = explode('.', $this->getArquivo());

        $index = count($extensao) - 1;
        
        if($extensao[$index] == 'csv'){
            $arquivo->lerArquivoCSV($caminho);
        }else if($extensao[$index] == 'txt'){
            $arquivo->lerArquivoTXT($caminho);
        }

        return $arquivo->getDados();
    }
}