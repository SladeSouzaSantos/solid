<?php

namespace App\interfaces;

use App\componentes\Log;
use App\componentes\Notificacao;

interface ICadastro{
    public function salvar();
    public function registrarLog(Log $log);
    public function enviarNotificacao(Notificacao $notificacao);
}