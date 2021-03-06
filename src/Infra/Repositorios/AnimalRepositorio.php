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


    /**
       *
       * Adicionar: Insere informações do animal no banco de dados
       * Retorna: true para sucesso na criação,
       *          False para erro na criação
       * @param object $objeto
       * @return boolean
       */
      public function Adicionar( $objeto ) {
        $nome = $objeto->getNome();
        $especie = $objeto->getEspecie();
        $genero = $objeto->getGenero();
        $situacao = $objeto->getSituacao();
        $data_nascimento = $objeto->getDataNascimento();
        $historico = $objeto->getHistorico();
        $raca = $objeto->getRaca();

        $sqlStmt = "INSERT INTO {$this->tabela} (NOME, ESPECIE, GENERO, SITUACAO, DATANASCIMENTO, HISTORICO, RACA) VALUES (:nome, :especie, :genero, :situacao, :nascimento, :historico, :raca)";
        try {
           $operacao = $this->conexao->prepare($sqlStmt);
           $operacao->bindValue(":nome", $nome, PDO::PARAM_STR);
           $operacao->bindValue(":especie", $especie, PDO::PARAM_STR);
           $operacao->bindValue(":genero", $genero, PDO::PARAM_STR);
           $operacao->bindValue(":situacao", $situacao, PDO::PARAM_STR);
           $operacao->bindValue(":nascimento", $data_nascimento, PDO::PARAM_STR);
           $operacao->bindValue(":historico", $historico, PDO::PARAM_STR);
           $operacao->bindValue(":raca", $raca, PDO::PARAM_STR);
           if($operacao->execute()){
                 if($operacao->rowCount() > 0) {
                    return true;
                 } else {
                    return false;
                 }
              } else {
                 return false;
           }
        } catch( PDOException $excecao ) {
              echo $excecao->getMessage();
        }
     }

     /**
       *
       * Recuperar: Retorna um animal apartir o seu id
       *
       * @param int $id
       * @return object
       */
      public function Get( $id ) {
        $sqlStmt = "SELECT * from {$this->tabela} WHERE ID=:id";
        try {
           $operacao = $this->conexao->prepare($sqlStmt);
           $operacao->bindValue(":id", $id, PDO::PARAM_INT);
           $operacao->execute();
           $animal = $operacao->fetch(PDO::FETCH_OBJ);
           $id = $animal->ID;
           $nome = $animal->NOME;
             $especie = $animal->ESPECIE;
             $genero = $animal->GENERO;
             $situacao = $animal->SITUACAO;
             $data_nascimento = $animal->DATANASCIMENTO;
             $historico = $animal->HISTORICO;
             $raca = $animal->RACA;
           $objeto = new Animal($id, $nome, $especie, $genero, $situacao, $data_nascimento, $historico, $raca);
           return json_encode($objeto);;
        } catch( PDOException $excecao ){
           echo $excecao->getMessage();
        }
     }

      /**
       *
       * ListarTodos: Retorna todos os animais
       *
       * 
       * @return object lista de animas do banco de dados
       */
      public function ListarTodos( ) {
         $sqlStmt = "SELECT * from {$this->tabela}";
         try {
            $operacao = $this->conexao->prepare($sqlStmt);
            $operacao->execute();
            $animais = $operacao->fetchAll(PDO::FETCH_ASSOC);
            
            return  json_encode($animais);

            
         } catch( PDOException $excecao ){
            echo $excecao->getMessage();
         }
      }

      /**
       *
       * Filtra animais: Retorna uma lista de animais de acordo com o filtro
       * @param char $sexo
       *  @param bool $visitaAgendada
       *  @param bool $animalAtendimento
       * 
       * @return object lista de animas do banco de dados
       */
      public function Filtrar($sexo, $visitaAgendada, $animalAtendimento ) {
         if($visitaAgendada=="true" && $animalAtendimento=="true"){
            $sqlStmt = "SELECT * from {$this->tabela} a
            inner join Visita v on a.ID = v.id_animal
            inner join Atendimento c on a.ID = c.id_animal where a.GENERO = '{$sexo}';";
         }else if($visitaAgendada=="false" && $animalAtendimento=="false"){
            $sqlStmt = "SELECT * from {$this->tabela} a  
            inner join Atendimento c on a.ID != c.id_animal 
            inner join Visita v on a.ID != v.id_animal  where c.id_animal != v.id_animal and a.GENERO = '{$sexo}';";

         }else if($visitaAgendada == "true"){
            $sqlStmt = "SELECT * from {$this->tabela} a
            inner join Visita v on a.ID = v.id_animal  where a.GENERO = '{$sexo}';";
         }else if($animalAtendimento == "true"){
            $sqlStmt = "SELECT * from {$this->tabela} a
            inner join Atendimento c on a.ID = c.id_animal where a.GENERO = '{$sexo}';";
         }else{
            $sqlStmt = "SELECT * from {$this->tabela}";
         }
        
         // $sqlStmt = "SELECT * from {$this->tabela}";
         try {
            $operacao = $this->conexao->prepare($sqlStmt);
            $operacao->execute();
            $animais = $operacao->fetchAll(PDO::FETCH_ASSOC);
            //echo json_encode($animais);
            return  json_encode($animais);

            
         } catch( PDOException $excecao ){
            echo $excecao->getMessage();
         }
      }

     /**
       *
       * Atualizar: atualiza um animal
       * Retorna: true para sucesso na atualização,
       *          False para erro na atualização
       * @param object $objeto
       * @return boolean
       */
      public function Atualizar( $objeto ) {
        $id = $objeto->getId();
        $nome = $objeto->getNome();
        $especie = $objeto->getEspecie();
        $genero = $objeto->getGenero();
        $situacao = $objeto->getSituacao();
        $data_nascimento = $objeto->getDataNascimento();
        $historico = $objeto->getHistorico();
        $raca = $objeto->getRaca();

        $sqlStmt = "UPDATE {$this->tabela} SET NOME=:nome, ESPECIE=:especie, GENERO=:genero, SITUACAO=:situacao, DATANASCIMENTO=:dataNascimento, HISTORICO=:historico, RACA=:raca WHERE ID=:id";
        try {
           $operacao = $this->conexao->prepare($sqlStmt);
           $operacao->bindValue(":id", $id, PDO::PARAM_INT);
           $operacao->bindValue(":nome", $nome, PDO::PARAM_STR);
           $operacao->bindValue(":especie", $especie, PDO::PARAM_STR);
           $operacao->bindValue(":genero", $genero, PDO::PARAM_STR);
           $operacao->bindValue(":situacao", $situacao, PDO::PARAM_STR);
           $operacao->bindValue(":dataNascimento", $data_nascimento, PDO::PARAM_STR);
           $operacao->bindValue(":historico", $historico, PDO::PARAM_STR);
           $operacao->bindValue(":raca", $raca, PDO::PARAM_STR);
           if($operacao->execute()){
              if($operacao->rowCount() > 0){
                 return true;
              } else {
                 return false;
              }
           } else {
              return false;
           }
        } catch ( PDOException $excecao ) {
           echo $excecao->getMessage();
        }
     }

      /**
       *
       * DELETE exclui um animal no banco de dados conforme informado por id
       * Retorna: true para sucesso na remoção,
       *          False para erro na remoção
       * @param int $id
       * @return boolean
       */
      public function Remover( $id ) {
        $sqlStmt = "DELETE FROM {$this->tabela} WHERE ID=:id";
       try {
          $operacao = $this->conexao->prepare($sqlStmt);
          $operacao->bindValue(":id", $id, PDO::PARAM_INT);
          if($operacao->execute()){
             if($operacao->rowCount() > 0) {
                   return true;
             } else {
                   return false;
             }
          } else {
             return false;
          }
       } catch ( PDOException $excecao ) {
          echo $excecao->getMessage();
       }
    }

    
}
?>