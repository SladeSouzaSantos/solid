<?php

namespace App;

use App\IMensagemToken;

class Sms implements IMensagemToken{
    public function enviar(): void{
        echo 'SMS: seu token é 5631';
    }
}