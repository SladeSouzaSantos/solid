<?php
require('lib/fpdf/fpdf.php');
// Dados de Entrada
// Dados Gerais
$nome = $_GET["nome"];//"Francisco de Assis Lopes";
$email = $_GET["email"];
$telefone = $_GET["telefone"];
$contacontrato = $_GET["contacontrato"];
$cpf_cnpj = $_GET["cpf_cnpj"];//"007.673.078-60"
$cidade = $_GET["cidade"];//"Parnamirim";
$estado = $_GET["estado"];//"RN";
// Dados Dimensionamento
$consumoMedio = $_GET["consumoMedio"];//283;
$potenciaSistema = $_GET["potenciaSistema"];//2.68;
$areaSistema = $_GET["areaSistema"];//16.27;
$energiaGeradaMedia = $_GET["energiaGeradaMedia"];//343;
$energiaGeradaJan = $_GET["energiaGeradaJan"];//357;
$energiaGeradaFev = $_GET["energiaGeradaFev"];//370;
$energiaGeradaMar = $_GET["energiaGeradaMar"];//345;
$energiaGeradaAbr = $_GET["energiaGeradaAbr"];//347;
$energiaGeradaMai = $_GET["energiaGeradaMai"];//288;
$energiaGeradaJun = $_GET["energiaGeradaJun"];//290;
$energiaGeradaJul = $_GET["energiaGeradaJul"];//275;
$energiaGeradaAgo = $_GET["energiaGeradaAgo"];//355;
$energiaGeradaSet = $_GET["energiaGeradaSet"];//356;
$energiaGeradaOut = $_GET["energiaGeradaOut"];//376;
$energiaGeradaNov = $_GET["energiaGeradaNov"];//390;
$energiaGeradaDez = $_GET["energiaGeradaDez"];//372;
// Dados Custo
$preco = $_GET["preco"];//13725.00;
$precoEquipamento = $_GET["precoEquipamento"];//8150.00;
//$precoEquipamento = $precoEquipamento*1.3;
$precoServico = $preco - $precoEquipamento;
$valorKw = $preco/$potenciaSistema;
// BNB - Financiamento
$amortizacao = $preco/60;
$taxaJuros = 0.52/100;
$parcelaBNB = array();
$parcelaBNB[] = ($preco*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(1*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(2*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(3*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(4*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(5*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(6*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(7*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(8*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(9*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(10*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(11*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(12*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(13*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(14*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(15*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(16*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(17*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(18*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(19*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(20*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(21*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(22*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(23*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(24*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(25*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(26*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(27*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(28*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(29*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(30*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(31*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(32*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(33*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(34*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(35*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(36*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(37*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(38*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(39*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(40*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(41*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(42*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(43*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(44*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(45*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(46*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(47*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(48*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(49*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(50*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(51*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(52*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(53*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(54*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(55*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(56*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(57*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(58*$amortizacao))*$taxaJuros)+$amortizacao;
$parcelaBNB[] = (($preco-(59*$amortizacao))*$taxaJuros)+$amortizacao;
// Equipamentos
$numeroModulos = $_GET["numeroModulos"];//8;
$potenciaModulos = $_GET["potenciaModulos"];//335;
$numeroInversor = $_GET["numeroInversor"];//1;
$potenciaInversor = $_GET["potenciaInversor"];//3.0;
$numeroStringBoxDC = $_GET["numeroStringBoxDC"];//1;
$numeroStringBoxAC = $_GET["numeroStringBoxAC"];//1;
// Garantias
$garantiaModulo = $_GET["garantiaModulo"];//12;
$garantiaInversor = $_GET["garantiaInversor"];//5;
// Modulos Fotovoltaicos
$moduloFabricante = $_GET["moduloFabricante"];//'BYD';
$moduloModelo = $_GET["moduloModelo"];//'335PHK-36';
$moduloPotencia = $_GET["moduloPotencia"];//335;
$moduloTensaoVoc = $_GET["moduloTensaoVoc"];//45.44;
$moduloCorrenteIsc = $_GET["moduloCorrenteIsc"];//9.25;
$moduloDimensoesA = $_GET["moduloDimensoesA"];//1.992;
$moduloDimensoesL = $_GET["moduloDimensoesL"];//0.992;
$moduloDimensoesC = $_GET["moduloDimensoesC"];//0.035;
$moduloPeso = $_GET["moduloPeso"];//22.2;
// Inversor
$inversorFabricante = $_GET["inversorFabricante"];//'Canadian Solar';
$inversorModelo = $_GET["inversorModelo"];//'CSI-3K-TL';
$inversorPotencia = $_GET["inversorPotencia"];//3.0;
$inversorTensãoMinima = $_GET["inversorTensãoMinima"];//80.0;
$inversorTensãoMaxima = $_GET["inversorTensãoMaxima"];//500.0;
$inversorCorrenteMaximaSaida = $_GET["inversorCorrenteMaximaSaida"];//14.3;
$inversorConexao = $_GET["inversorConexao"];//'Monofásico';
// Dados Tarifa
$tarifa = $_GET["tarifa"]*0.30642;//0.63927;
// FIM - Dados de Entrada
$tarifaPayback = array();
$tarifaPayback[] = $tarifa*.3;//2024
$tarifaPayback[] = $tarifa*1.04*0.45;
$tarifaPayback[] = $tarifa*1.04*1.04*0.6;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*0.75;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*0.9;//2028
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*0.09;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$tarifaPayback[] = $tarifa*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04*1.04;
$producaoEnergetica = array();
$producaoEnergetica[] = $energiaGeradaMedia*12;
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$producaoEnergetica[] = $energiaGeradaMedia*12*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008)*(1-0.008);
$economiaAnual = array();

$fatorEnergiaInstantanea = 0.8;

for($indice = 0; $indice < 25; $indice++){
	$custoDisponibilidade = 12*100*$_GET["tarifa"]*(1.04 ** $indice);
	$fioB = ($producaoEnergetica[$indice]*$fatorEnergiaInstantanea*$tarifaPayback[$indice]);

	if($fioB > $custoDisponibilidade){
		$economiaAnual[] = ($producaoEnergetica[$indice]*$_GET["tarifa"]*(1.04 ** $indice)) - ($producaoEnergetica[$indice]*$fatorEnergiaInstantanea*$tarifaPayback[$indice]);
	}else{
		$economiaAnual[] = ($producaoEnergetica[$indice]*$_GET["tarifa"]*(1.04 ** $indice)) - ($custoDisponibilidade);
	}
	
}
$balanco = array();
$balanco[] = -$preco+$economiaAnual[0];
for($i = 1; $i<25; $i++){
	$balanco[] = $balanco[$i-1]+$economiaAnual[$i];
}
$situacao = array();
$retorno = 1;
$anoPayback = 0;
$mesPayback = 0;
$mesPaybackRef = "";
for($i = 0; $i < 25; $i++){
	if($balanco[$i] < 0){
		$situacao[] = 'Investimento';
	}else{
		if($retorno > 0){
			$retorno = -1;
			$situacao[] = 'Retorno';
            $anoPayback = $i;
            $mesPayback = ceil(12-($balanco[$i]/($economiaAnual[$i]/12)));
            if($mesPayback == 0){
                $mesPaybackRef = "";
            }else if($mesPayback == 0){
                $mesPaybackRef = "mês";
            }else{
                $mesPaybackRef = "meses";
            }
		}else{
			$situacao[] = 'Lucro';
		}
	}
}
$payback = $anoPayback." anos e ".$mesPayback." ".$mesPaybackRef;
// Fim - Payback
$sinalBalanco = array();
for($i = 0; $i < 25; $i++){
	if($balanco[$i] < 0){
		$sinalBalanco[] = '-';
		$balanco[$i] = $balanco[$i]*(-1);
	}else{
		$sinalBalanco[] = '';
	}
}

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('img/oficial_logo_transparent.png',5,9,45);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,12,'PROPOSTA COMERCIAL',0,0,'C');
    // Line break
    $this->Ln(50);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
	// Contato
	$this->SetTextColor(255,255,255);
	$this->Cell(0,4,'www.greencity.net.br',0,1,'C');
	$this->Cell(0,4,''.date("d/m/Y"),0,1,'C');	
}
}

// Capa
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('img/orcamento/capa.png', 0, 0, 210, 300);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,utf8_decode('À '.$nome.','),0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,utf8_decode('Proposta técnica comercial da implantação de usina fotovoltaica em '.$cidade.'/'.$estado.'.'),0,1);
$pdf->Ln(300);
$pdf->SetTextColor(0,0,0);

// Introdução
// Introdução - A EMPRESA
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('A EMPRESA'),0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('A Greencity Energia Sustentável é uma empresa de energia renovaveis, que tem o víeis de atuação focado na'),0,1);
$pdf->Cell(0,5,utf8_decode('implantação de geradores de energia, derivadas de fontes renovaveis (solar, eólica e biomassa), e incentivar o uso'),0,1);
$pdf->Cell(0,5,utf8_decode('dessas tecnologias, oferecendo cursos e palestras de conscientização , além de se dispor a oferecer orientações'),0,1);
$pdf->Cell(0,5,utf8_decode('sobre estratégias para que seja possível conquistar-se a independência energética de forma eficiente e à preços'),0,1);
$pdf->Cell(0,5,utf8_decode('mais acessíveis. A Greencity ingressa no mercado com a promessa de aproximar a sociedade com as energias'),0,1);
$pdf->Cell(0,5,utf8_decode('sustentáveis e engajar o crescimento sociocultural e tecnológico regional.'),0,1);
//Introdução - Benefícios
$pdf->Ln(10);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('BENEFÍCIOS'),0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('Investir em energia solar, hoje, é antecipar uma consciência sustentável que, em breve, será uma tendência'),0,1);
$pdf->Cell(0,5,utf8_decode('irreversível no mundo, dado a necessidade de diversificarmos nossa matriz energética e o tamanho dos benefícios'),0,1);
$pdf->Cell(0,5,utf8_decode('envolvidos, tais como:'),0,1);
$pdf->Ln(5);
$pdf->Cell(0,5,utf8_decode('           <> Economia financeira;'),0,1);
$pdf->Cell(0,5,utf8_decode('           <> Valorização imobiliária;'),0,1);
$pdf->Cell(0,5,utf8_decode('           <> Redução de emissão de gases poluentes na atmosfera;'),0,1);
$pdf->Cell(0,5,utf8_decode('           <> Pioneirismo tecnológico.'),0,1);
// Introdução - Como funciona?
$pdf->Ln(10);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('ENERGIA FOTOVOLTAICA - COMO FUNCIONA?'),0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('Os painéis solares transformam a radiação do sol em energia elétrica, posteriormente o inversor converte a energia'),0,1);
$pdf->Cell(0,5,utf8_decode('gerada para que se possa ser consumida e/ou injeção à rede elétrica.'),0,1);
$pdf->Cell(0,5,utf8_decode('Durante o dia a energia é consumida e/ou injetada na rede. À noite, quando não há geração, a energia é consumida'),0,1);
$pdf->Cell(0,5,utf8_decode('da rede elétrica, cujos os créditos gerados anteriormente serão utilizados.'),0,1);
$pdf->Image('img/orcamento/comofunciona.png',60,205,100);
$pdf->Ln(100);
// FIM - Introdução
// Proposta
// Proposta - Informações do Cliente
$pdf->SetFont('Times','I',10);
$pdf->SetFillColor(0,0,80);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,7,utf8_decode('Informações do Cliente'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,7,utf8_decode('Nome'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($nome),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('CPF/CNPJ'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($cpf_cnpj),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Consumo Médio de Energia'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($consumoMedio.' kWh/mês'),1,0,'C');
$pdf->Ln();
// Proposta - Descrição da Usina
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,7,utf8_decode('Descrição da Usina'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,7,utf8_decode('Localização'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($cidade.'/'.$estado),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Potência do Sistema'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($potenciaSistema.' kWp'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Área Ocupada'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($areaSistema.' m²'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Geração Média de Energia'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($energiaGeradaMedia.' kWh/mês'),1,0,'C');
$pdf->Ln();
// Proposta - Equipamentos
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,7,utf8_decode('Equipamentos'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,7,utf8_decode('Módulos Fotovoltaicos'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($numeroModulos.' módulo(s) de '.$potenciaModulos.' Wp.'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Inversor'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($numeroInversor.' inversor(es) de '.$potenciaInversor.' kW.'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Proteções'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($numeroStringBoxDC.' String box CC e '.$numeroStringBoxAC.' String box AC.'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Cabos e Acessórios'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('Cabos solares e conectores MC4 fêmea/macho.'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Suportes'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('Estruturas de fixação em alumínio.'),1,0,'C');
$pdf->Ln();
// Proposta - Garantias
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,7,utf8_decode('Garantias'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,7,utf8_decode('Módulos Fotovoltaicos'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($garantiaModulo.' de eficiência energética. 10 anos por defeitos de fábrica.'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Inversor'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($garantiaInversor.' anos por defeitos de fábrica.'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Proteções'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('12 meses.'),1,0,'C');
$pdf->Ln(10);
// Proposta - Observações
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('*Equipamentos descritos para fins de dimensionamento preliminar conforme conta de energia fornecida'),0,1);
$pdf->Cell(0,5,utf8_decode('pelo cliente, podendo ser alterados sem que haja ônus para o cliente.'),0,1);
$pdf->Cell(0,5,utf8_decode('**A garantia exclui materiais ou componentes sujeitos a desgaste sob condições normais de uso e danos'),0,1);
$pdf->Cell(0,5,utf8_decode('causados por acidentes ou uso indevido do material.'),0,1);
$pdf->Cell(0,5,utf8_decode('***Estrutura para suportação das placas em instalações que não sejam diretamente no telhado devem ser'),0,1);
$pdf->Cell(0,5,utf8_decode('orçadas à parte.'),0,1);
$pdf->Cell(0,5,utf8_decode('****Relógio medidor Bidirecional por conta da concessionária para sistemas potência até 75Kw.'),0,1);
$pdf->Ln();
// Proposta - Turn Key
$pdf->SetFont('Times','I',10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,7,utf8_decode('Turn Key'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,7,utf8_decode('Valor da Usina Fotovoltaica'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$preco, 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Valor por kWp'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$valorKw, 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Previsão do Retorno do Investimento'),1,0,'C');
$pdf->Cell(100,7,utf8_decode($payback.'.'),1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('A proposta não inclui: Obras em estruturas existentes, caso necessário.'),0,1);
$pdf->Ln(50);
// Detalhamento Técnico
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('DETALHAMENTO TÉCNICO'),0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('Os componentes utilizados para o dimensionamento da usina solar escopo desta proposta são todos certificados'),0,1);
$pdf->Cell(0,5,utf8_decode('pelo INMETRO, o que garante o atendimento aos mais rigorosos padrões de qualidade.'),0,1);
$pdf->Ln(10);
// Detalhamento Técnico - Tabela Equipamentos
$pdf->SetFont('Times','I',10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(95,7,utf8_decode('Módulo Fotovoltaico'),1,0,'C',1);
$pdf->Cell(95,7,utf8_decode('Inversor'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(40,7,utf8_decode('Fabricante'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($moduloFabricante),1,0,'C');
$pdf->Cell(40,7,utf8_decode('Fabricante'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($inversorFabricante),1,0,'C');
$pdf->Ln();
$pdf->Cell(40,7,utf8_decode('Modelo'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($moduloModelo),1,0,'C');
$pdf->Cell(40,7,utf8_decode('Modelo'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($inversorModelo),1,0,'C');
$pdf->Ln();
$pdf->Cell(40,7,utf8_decode('Potência'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($moduloPotencia.' Wp'),1,0,'C');
$pdf->Cell(40,7,utf8_decode('Potência'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($inversorPotencia.' kW'),1,0,'C');
$pdf->Ln();
$pdf->Cell(40,7,utf8_decode('Tensão - Voc'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($moduloTensaoVoc.' V'),1,0,'C');
$pdf->Cell(40,7,utf8_decode('Tensão Mínima'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($inversorTensãoMinima.' V'),1,0,'C');
$pdf->Ln();
$pdf->Cell(40,7,utf8_decode('Corrente - Isc'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($moduloCorrenteIsc.' A'),1,0,'C');
$pdf->Cell(40,7,utf8_decode('Tensão Máxima'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($inversorTensãoMaxima.' V'),1,0,'C');
$pdf->Ln();
$pdf->Cell(40,7,utf8_decode('Dimensões'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($moduloDimensoesA.' x '.$moduloDimensoesL.' x '.$moduloDimensoesC.'m'),1,0,'C');
$pdf->Cell(40,7,utf8_decode('Corrente Máxima - Saída'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($inversorCorrenteMaximaSaida.' A'),1,0,'C');
$pdf->Ln();
$pdf->Cell(40,7,utf8_decode('Peso'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($moduloPeso.' kg'),1,0,'C');
$pdf->Cell(40,7,utf8_decode('Conexão'),1,0,'C');
$pdf->Cell(55,7,utf8_decode($inversorConexao),1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('Os cabos elétricos utilizados possuem proteção contra raios UV, propriedade de não propagação de chama e'),0,1);
$pdf->Cell(0,5,utf8_decode('auto extinção do fogo.'),0,1);
$pdf->Ln(5);
$pdf->Cell(0,5,utf8_decode('As estruturas para fixação dos módulos são fabricadas em alumínio, garantindo a maior durabilidade da instalação.'),0,1);
// FIM - Proposta

// Gráfico
$pdf->Ln(5);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('ESTIMATIVA DE PRODUÇÃO DE ENERGIA'),0,1,'C');
// Gráfico - Position
$chartX = 30;
$chartY = 182;
// Gráfico - Dimension
$chartWidth = 150;
$chartHeigth = 100;
// Gráfico - Padding
$chartTopPadding = 10;
$chartLeftPadding = 20;
$chartBottomPadding = 20;
$chartRightPadding = 5;
// Gráfico - Box
$chartBoxX = $chartX + $chartLeftPadding;
$chartBoxY = $chartY + $chartTopPadding;
$chartBoxWidth = $chartWidth - $chartLeftPadding - $chartRightPadding;
$chartBoxHeigth = $chartHeigth - $chartTopPadding - $chartBottomPadding;
// Gráfico - Bar Width
$barWidth = 5;
// Gráfico - Dados
$dados = Array(
	'Jan'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaJan
	],
	'Fev'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaFev
	],
	'Mar'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaMar
	],
	'Abr'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaAbr
	],
	'Mai'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaMai
	],
	'Jun'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaJun
	],
	'Jul'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaJul
	],
	'Ago'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaAgo
	],
	'Set'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaSet
	],
	'Out'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaOut
	],
	'Nov'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaNov
	],
	'Dez'=>[
		'color'=>[255,255,0],
		'value'=>$energiaGeradaDez
	],
);
// Gráfico - Dados Máx
$dadosMax = 0;
foreach($dados as $item){
	if($item['value']>$dadosMax)
		$dadosMax = $item['value'];
}
$dadosMax = ceil($dadosMax/10)*10;
// Gráfico - Dados Step
$dadosStep = ceil($dadosMax/10);
// Gráfico - Set line Width, font, color
$pdf->SetFont('Arial','',9);
$pdf->SetLineWidth(0.2);
$pdf->SetDrawColor(0);
// Gráfico - Bordas
//$pdf->Rect($chartX,$chartY,$chartWidth,$chartHeigth);
// Gráfico - Vertical Line
$pdf->Line(
	$chartBoxX,
	$chartBoxY,
	$chartBoxX,
	$chartBoxY + $chartBoxHeigth
);
// Gráfico - Horizontal Line
$pdf->Line(
	$chartBoxX - 2,
	$chartBoxY + $chartBoxHeigth,
	$chartBoxX + $chartBoxWidth,
	$chartBoxY + $chartBoxHeigth
);
// Gráfico - Vertical Axis
// Scale Y
$yAxisUnits = $chartBoxHeigth/$dadosMax;
// Draw Y And Axis Label
for($i = 0; $i<=$dadosMax; $i+=$dadosStep){
	// Y Position
	$yAxisPos = $chartBoxY + ($yAxisUnits*$i);
	// Draw Y
	$pdf->Line(
		$chartBoxX-2,
		$yAxisPos,
		$chartBoxX,
		$yAxisPos
	);
	//Draw Labels
	$pdf->SetXY($chartBoxX - $chartLeftPadding, $yAxisPos-2);
	$pdf->Cell($chartLeftPadding-4,5,$dadosMax-$i,0,0,'R');
}
// Gráfico - Horizontal Axis
// Set Cell Position
$pdf->SetXY($chartBoxX,$chartBoxY+$chartBoxHeigth);
// Cell's Width
$xLabelWidth = $chartBoxWidth/count($dados);
// Draw Bars And Labels
$barXPos = 0;
foreach($dados as $itemName=>$item){
	// Labels
	$pdf->Cell($xLabelWidth,5,$itemName,0,0,'C');
	// Draw Bars
	// Bar Colors
	$pdf->SetFillColor($item['color'][0],$item['color'][1],$item['color'][2]);
	// Bar Height
	$barHeight = $yAxisUnits * $item['value'];
	// Bar X Position
	$barX = ($xLabelWidth/2)+($xLabelWidth*$barXPos);
	$barX = $barX - ($barWidth/2);
	$barX = $barX + $chartBoxX;
	// Bar Y Position
	$barY = $chartBoxHeigth - $barHeight;
	$barY = $barY + $chartBoxY;
	// Draw
	$pdf->Rect($barX,$barY,$barWidth,$barHeight,'DF');
	$barXPos++;
}
// Axis Labels
$pdf->SetFont('Arial','B',12);
$pdf->SetXY($chartX, $chartY);
$pdf->Cell(100,10,utf8_decode("kWh/mês"));
// Gráfico - Tabela de Dados
$pdf->Ln(85);
$pdf->SetFont('Times','I',8);
$pdf->Cell(14,4,utf8_decode('Jan'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Fev'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Mar'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Abr'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Mai'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Jun'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Jul'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Ago'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Set'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Out'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Nov'),1,0,'C');
$pdf->Cell(14,4,utf8_decode('Dez'),1,0,'C');
$pdf->Cell(22,4,utf8_decode('Média'),1,0,'C');
$pdf->Ln();
$pdf->Cell(14,4,utf8_decode($energiaGeradaJan),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaFev),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaMar),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaAbr),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaMai),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaJun),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaJul),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaAgo),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaSet),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaOut),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaNov),1,0,'C');
$pdf->Cell(14,4,utf8_decode($energiaGeradaDez),1,0,'C');
$pdf->Cell(22,4,utf8_decode($energiaGeradaMedia),1,0,'C');
// FIM - Gráfico
// Detalhamento Financeiro
$pdf->Ln();
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('DETALHAMENTO FINANCEIRO'),0,1);
// Detalhamento Financeiro - Presupostos
$pdf->SetFillColor(0,0,80);
$pdf->SetFont('Times','I',10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,7,utf8_decode('Pressuposto'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,7,utf8_decode('Valor da tarifa por kWh'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$_GET["tarifa"], 5, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Taxa de inflação projetada'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('4,00 %'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Vida útil do sistema fotovoltaico'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('25 anos.'),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Perda de eficiência anual projetada'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('0,80 %'),1,0,'C');
$pdf->Ln(20);
// Detalhamento Financeiro - Payback
$pdf->SetFont('Times','I',10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,7,utf8_decode('Economia Gerada pela Usina Fotovoltaica'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(36,7,utf8_decode('Situação'),1,0,'C');
$pdf->Cell(10,7,utf8_decode('Ano'),1,0,'C');
$pdf->Cell(36,7,utf8_decode('Tarifa (Fio B)'),1,0,'C');
$pdf->Cell(36,7,utf8_decode('Produção Energetica'),1,0,'C');
$pdf->Cell(36,7,utf8_decode('Economia Anual'),1,0,'C');
$pdf->Cell(36,7,utf8_decode('Balança Financeiro'),1,0,'C');
$pdf->Ln();
$pdf->SetFont('Times','I',8);
for($ano = 1; $ano <=25; $ano++){
	$pdf->Cell(36,5,utf8_decode($situacao[$ano -1]),1,0,'C');
	$pdf->Cell(10,5,utf8_decode($ano),1,0,'C');
	$pdf->Cell(36,5,utf8_decode('R$ '.number_format((float)$tarifaPayback[$ano -1], 5, '.', '')),1,0,'C');
	$pdf->Cell(36,5,utf8_decode(number_format((float)$producaoEnergetica[$ano -1], 2, '.', '').' kWh/ano'),1,0,'C');
	$pdf->Cell(36,5,utf8_decode('R$ '.number_format((float)$economiaAnual[$ano -1], 2, '.', '')),1,0,'C');
	$pdf->Cell(36,5,utf8_decode($sinalBalanco[$ano -1].' R$ '.number_format((float)$balanco[$ano -1], 2, '.', '')),1,0,'C');
	$pdf->Ln();
}
// FIM - Detalhamento Financeiro
// Detalhamento de Custo
$pdf->Ln(20);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('DETALHAMENTO DOS CUSTO'),0,1);
$pdf->SetFont('Times','I',10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(100,7,utf8_decode('Especificação'),1,0,'C',1);
$pdf->Cell(30,7,utf8_decode('Quantidade'),1,0,'C',1);
$pdf->Cell(30,7,utf8_decode('Preço Unitário'),1,0,'C',1);
$pdf->Cell(30,7,utf8_decode('Valor Total'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(100,7,utf8_decode('Kit Gerador Fotovoltaica'),1,0,'C');
$pdf->Cell(30,7,utf8_decode('1'),1,0,'C');
$pdf->Cell(30,7,utf8_decode('R$ '.number_format((float)$precoEquipamento, 2, '.', '')),1,0,'C');
$pdf->Cell(30,7,utf8_decode('R$ '.number_format((float)$precoEquipamento, 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Serviços (Projeto, Instalação e Insumos)'),1,0,'C');
$pdf->Cell(30,7,utf8_decode('1'),1,0,'C');
$pdf->Cell(30,7,utf8_decode('R$ '.number_format((float)$precoServico, 2, '.', '')),1,0,'C');
$pdf->Cell(30,7,utf8_decode('R$ '.number_format((float)$precoServico, 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Proposta'),1,0,'C');
$pdf->Cell(90,7,utf8_decode('R$ '.number_format((float)$preco, 2, '.', '')),1,0,'C');
// FIM - Detalhamento de Custo
// Processos
$pdf->Ln(20);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('PROCEDIMENTOS & PRAZOS'),0,1);
$pdf->SetFont('Times','I',10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(100,7,utf8_decode('Serviço'),1,0,'C',1);
$pdf->Cell(45,7,utf8_decode('Responsável'),1,0,'C',1);
$pdf->Cell(45,7,utf8_decode('Prazo'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(100,7,utf8_decode('Visita Técnica/Comercial'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Empresa/Cliente'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('-'),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Aprovação da proposta e assinatura do contrato'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Cliente'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('-'),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Desenvolvimento do projeto'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('GREENCITY'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Até 10 dias úteis'),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Solicitação de acesso junto à concessionária'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('GREENCITY/Concessionária'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Até 15 dias úteis'),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Instalação dos equipamentos'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('GREENCITY'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Até 6 dias úteis'),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Solicitação de vistoria técnica pela concessionária'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('GREENCITY/Concessionária'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Após a Instalação'),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Vistoria Técnica pela concessionária'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Concessionária'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Até 7 dias úteis'),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Entrega do relatório de vistoria técnica'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Concessionária'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Até 5 dias úteis'),1,0,'C');
$pdf->Ln();
$pdf->Cell(100,7,utf8_decode('Instalação do medidor bidirecional'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Concessionária'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Até 7 dias úteis'),1,0,'C');
$pdf->Ln();
$pdf->Cell(145,7,utf8_decode('Total de dias para entrada em funcionamento o sistema fotovoltaico'),1,0,'C');
$pdf->Cell(45,7,utf8_decode('Até 50 dias úteis'),1,0,'C');
// FIM - Processos
// Validade da Proposta
$pdf->Ln(20);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('VALIDADE DA PROPOSTA'),0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('Esta proposta é válida durante 7 dias a partir de sua emissão.'),0,1);
// FIM - Validade da Proposta
// Formas de Pagamentos
$pdf->Ln(10);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('FORMAS DE PAGAMENTOS'),0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('Cartões de débito e crédito, boleto bancário e transferência bancária.'),0,1);
$pdf->Cell(0,5,utf8_decode('Linhas de Financiamento Sugeridas:'),0,1);
$pdf->Ln(5);
$pdf->Cell(0,5,utf8_decode('           <> Banco do Nordeste - Programa FNE SOL;'),0,1);
//$pdf->Cell(0,5,utf8_decode('           <> BNDES - Programa Fundo Clima;'),0,1);
$pdf->Cell(0,5,utf8_decode('           <> Santander - CDC Socioambiental Solar;'),0,1);
$pdf->Cell(0,5,utf8_decode('           <> BV Financeira.'),0,1);
// FIM - Formas de Pagamentos
$pdf->Ln(20);
$pdf->Ln(80);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('CONTATO'),0,1,'C');
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('GREENCITY SUSTAINABLE ENERGY'),0,1,'C');
$pdf->Cell(0,5,utf8_decode('36.297.546/0001-01'),0,1,'C');
$pdf->Cell(0,5,utf8_decode('(84) 9 9173-0465'),0,1,'C');
$pdf->Cell(0,5,utf8_decode('(84) 9 8157-2977'),0,1,'C');
$pdf->Cell(0,5,utf8_decode('greencity@outlook.com.br'),0,1,'C');
$pdf->Cell(0,5,utf8_decode('www.greencity.net.br'),0,1,'C');
/*/ Tabela Financiamento
$pdf->Ln(20);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,utf8_decode('SIMULAÇÃO DE FINANCIAMENTO DO BNB - FNE SOL'),0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('Os valores apresentados, na tabela abaixo, trata-se de uma simulação.'),0,1);
$pdf->Cell(0,5,utf8_decode('Para obter uma proposta oficial, entre em contato conosco ou com o Banco do Nordeste.'),0,1);
$pdf->Ln();
$pdf->SetFillColor(0,0,80);
$pdf->SetFont('Times','I',10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,7,utf8_decode('Programa FNE SOL - BNB'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,7,utf8_decode('Valor Financiado'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$preco, 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('Taxa de Juros'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('6.24% a.a'),1,0,'C');
$pdf->Ln();
$pdf->SetFillColor(0,0,80);
$pdf->SetFont('Times','I',10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,7,utf8_decode('Simulação do Programa FNE SOL'),1,0,'C',1);
$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,7,utf8_decode('1º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[0], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('2º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[1], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('3º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[2], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('4º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[3], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('5º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[4], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('6º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[5], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('7º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[6], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('8º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[7], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('9º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[8], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('10º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[9], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('11º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[10], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('12º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[11], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('13º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[12], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('14º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[13], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('15º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[14], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('16º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[15], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('17º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[16], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('18º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[17], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('19º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[18], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('20º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[19], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('21º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[20], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('22º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[21], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('23º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[22], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('24º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[23], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('25º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[24], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('26º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[25], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('27º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[26], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('28º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[27], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('29º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[28], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('30º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[29], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('31º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[30], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('32º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[31], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('33º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[32], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('34º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[33], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('35º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[34], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('36º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[35], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('37º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[36], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('38º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[37], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('39º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[38], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('40º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[39], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('41º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[40], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('42º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[41], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('43º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[42], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('44º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[43], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('45º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[44], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('46º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[45], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('47º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[46], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('48º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[47], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('49º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[48], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('50º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[49], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('51º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[50], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('52º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[51], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('53º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[52], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('54º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[53], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('55º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[54], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('56º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[55], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('57º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[56], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('58º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[57], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('59º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[58], 2, '.', '')),1,0,'C');
$pdf->Ln();
$pdf->Cell(90,7,utf8_decode('60º Mês'),1,0,'C');
$pdf->Cell(100,7,utf8_decode('R$ '.number_format((float)$parcelaBNB[59], 2, '.', '')),1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5,utf8_decode('Obs.: Sugerimos a solicitação do financiamento com carência de 3 ou 6 meses.'),0,1);
// FIM - Tabela Financiamento*/
$pdf->Output($nome." - Proposta da Greencity.pdf", "D");

//Enviar Mensagem:
$assunto   = "Greencity WEB - Proposta";

$corpoMSG = "<strong>Nome:</strong> $nome<br> <strong>CPF/CNPJ:</strong> $cpf_cnpj<br> <strong>E-mail:</strong> $email<br> <strong>Telefone:</strong> $telefone<br> <strong>Local:</strong> $cidade/$estado<br> <strong>Consumo:</strong> $consumoMedio kWh/mes<br> <strong>Potencia do Sistema:</strong> $potenciaSistema kWp<br> <strong>Valor:</strong> R$ $preco<br> <strong>Conta-Contrato:</strong> $contacontrato<br>";

// chamada da classe		
require_once('class.phpmailer.php');
// instanciando a classe
$mail   = new PHPMailer();
// email do remetente
$mail->SetFrom('greencity.sustentavel@gmail.com', 'Greencity WEB');
// email do destinatario
$address = "greencity@outlook.com.br";
$mail->AddAddress($address, "destinatario");
// assunto da mensagem
$mail->Subject = $assunto;
// corpo da mensagem
$mail->MsgHTML($corpoMSG);
// enviar email
$mail->Send();
?>