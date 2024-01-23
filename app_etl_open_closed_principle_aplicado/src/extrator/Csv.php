<?php

namespace App\extrator;

class Csv extends Arquivo{

    public function lerArquivo(string $caminho) : array{
        $handle = fopen($caminho, 'r');

        while(($linha = fgetcsv($handle, 10000, ';')) != false){
            $this->setDados(
                $linha[0], //nome
                $linha[1], //cpf
                $linha[2] //email
            );
        }

        fclose($handle);

        return $this->getDados();
    }
        
}