<?php

namespace App;

use App\IMensagemToken;

class Email implements IMensagemToken{
    public function enviar(): void{
        echo 'E-mail: seu token é 5631';
    }
}