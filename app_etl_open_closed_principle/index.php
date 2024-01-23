<?php

require __DIR__."/vendor/autoload.php";

use App\Leitor;

//---------------TXT----------------
$leitorTXT = new Leitor();
$leitorTXT->setDirectorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();

//---------------CSV----------------
$leitorCSV = new Leitor();
$leitorCSV->setDirectorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();

//---------------MERGE----------------
echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv));
echo '</pre>';