<?php

namespace App\dao;

use App\BD;
use App\interfaces\ICadastro;
use App\componentes\Log;
use App\componentes\Notificacao;

class UsuarioModel extends BD implements ICadastro{

    public function salvar(){

    }

    public function registrarLog(Log $log)
    {
        
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        
    }
    
}