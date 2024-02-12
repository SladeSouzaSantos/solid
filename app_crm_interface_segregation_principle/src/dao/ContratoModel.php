<?php

namespace App\dao;

use App\BD;
use App\interfaces\ICadastro;
use App\componentes\Log;
use App\componentes\Notificacao;

class ContratoModel extends BD implements ICadastro{

    public function salvar(){

    }

    public function registrarLog(Log $log)
    {
        //Não se aplica...
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        //Não se aplica...
    }
    
}