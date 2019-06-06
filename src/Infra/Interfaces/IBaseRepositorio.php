<?php 
namespace Infra\Interfaces;
/**
* IBaseRepositorio – representa as funcionalidade basicas que um objeto terá que suportar para interagir com o banco de dados.
*
* @author James Yuri
*/

    interface IBaseRepositorio {
        public function Adicionar( $object );
        public function Get( $param );
        public function Atualizar( $object );
        public function Remover( $param );
    }
?>