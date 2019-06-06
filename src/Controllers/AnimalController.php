<?php namespace InfraControllers;
/**
* AnimalController – classe responsável em receber o conteúdo da view 
* e mandar para camadas Infra que irá persistir no banco.
*
* @author James Yuri
*/

//incluindo o arquivo contendo a classe Animal
require_once '../Model/Animal.php';
use Model\Animal;
//incluindo o arquivo contendo a classe PdoConexao
require_once '../Infra/Repositorios/AnimalRepositorio.php';
use Infra\Repositorio\AnimalRepositorio;
class AnimalController {
    private $animalRepositorio;
   
    public function __construct() {
       $this->animalRepositorio = new AnimalRepositorio();
       
    }
}
?>