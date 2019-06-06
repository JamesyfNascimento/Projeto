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

    public function AdicionarAnimal($nome, $especie, $genero, $situacao, $dataNascimento, $historico, $raca){
        // Nesta etapa criamos um objeto de contato e logo em seguida vamos fazer destes dados persistentes no banco de dados
        $animal = new Animal( null, $nome, $especie, $genero, $situacao, $dataNascimento, $historico, $raca);
        if($this->animalRepositorio->Adicionar($animal)){
            echo json_encode(
                array(
                  'success' => true,
                  'message' => "adicionado"
                )
              );
        }else{
            echo json_encode(
                array(
                  'success' => false,
                  'message' => "Error"
                )
              );
        }
    }
}
?>