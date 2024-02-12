<?php

require __DIR__."/vendor/autoload.php";

use App\Mensageiro;

$msg = new Mensageiro();
$msg->setCanal("email");
$msg->enviarToken();

echo '<br>';

$msg2 = new Mensageiro();
$msg2->setCanal("sms");
$msg2->enviarToken();