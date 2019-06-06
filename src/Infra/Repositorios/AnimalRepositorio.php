<?php 
namespace Infra\Repositorio;
/**
* Descrição da classe AnimalDao – classe responsável em interagir com o banco de dados.
*
* @author James Yuri
*/
Use PDO;
//incluindo o arquivo contendo a classe PdoConexao
require_once '../Infra/BD/Conexao.php';
use Infra\BD\PdoConexao;
//incluindo o arquivo da classe BaseRepositorio
require_once '../Infra/Repositorios/BaseRepositorio.php';
use Infra\Repositorio\BaseRepositorio;
//incluindo o arquivo contendo a classe Animal
require_once '../Model/Animal.php';
use Model\Animal;
//incluindo o arquivo da BaseRepositorio
require_once '../Infra/Interfaces/IBaseRepositorio.php';
use Infra\Interfaces\IBaseRepositorio;
//incluindo o arquivo contendo a classe PdoConexao
require_once '../Infra/Interfaces/IAnimalRepositorio.php';
use Infra\Interfaces\IAnimalRepositorio;

class AnimalRepositorio extends BaseRepositorio implements IAnimalRepositorio {
    private $tabela;
      
    public function __construct() {
      parent::__construct();
       $this->tabela = "Animal";
    }
}
?>