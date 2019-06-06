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

//Redireciona para o metodo que vem como parametro do post
if(!empty($_POST) && isset($_GET['action'])) {
  $animalController = new AnimalController();

  //ADICIONAR
  if($_GET['action'] == 'Adicionar'){
      $nome = $_POST["nome"];
      $especie = $_POST["especie"];
      $genero = $_POST["genero"];
      $situacao = $_POST["situacao"];
      $dataNascimento = $_POST["dataNascimento"];
      $historico = $_POST["historico"];
      $raca = $_POST["raca"];
      $animalController->AdicionarAnimal($nome, $especie, $genero, $situacao, $dataNascimento, $historico, $raca);
  }
  //REMOVER
  if($_GET['action'] == 'Remover'){
    $id = $_POST["id"];
    $animalController->RemoverAnimal($id);
}
}

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

    public function RemoverAnimal( $id ){
      if($this->animalRepositorio->Remover($id)){
          echo json_encode(
              array(
                'success' => true,
                'message' => "removido"
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