<?php

require __DIR__."/vendor/autoload.php";

use App\Mensageiro;
use App\Email;
use App\Sms;

$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br>';

$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();