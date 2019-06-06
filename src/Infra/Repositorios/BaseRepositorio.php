<?php

namespace Infra\Repositorio;

require_once '../Infra/BD/Conexao.php';
use Infra\BD\PdoConexao;

class BaseRepositorio{
    
    protected $conexao;
    
    public function __construct()
    {
        $this->conexao = PdoConexao::getInstancia();
    }
}
?>