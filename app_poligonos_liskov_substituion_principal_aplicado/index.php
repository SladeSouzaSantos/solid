<?php

require __DIR__.'/vendor/autoload.php';
use App\Poligonos;
use App\poligonos\Retangulo;
use App\poligonos\Quadrado;

$poligono = new Poligonos();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setLargura(10);
$poligono->getForma()->setAltura(4);

echo "<pre>";
print_r($poligono);
echo "</pre>";
echo "<h3> Área do Retângulo: ".$poligono->getArea()."m²</h3>";

$poligono = new Poligonos();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);

echo "<pre>";
print_r($poligono);
echo "</pre>";
echo "<h3> Área do Quadrado: ".$poligono->getArea()."m²</h3>";