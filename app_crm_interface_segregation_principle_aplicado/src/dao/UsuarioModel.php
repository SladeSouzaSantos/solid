<?php

namespace App\dao;

use App\BD;
use App\interfaces\ICadastro;
use App\componentes\Log;
use App\componentes\Notificacao;
use App\interfaces\ILog;
use App\interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao{

    public function salvar(){

    }

    public function registrarLog(Log $log)
    {
        
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        
    }
    
}