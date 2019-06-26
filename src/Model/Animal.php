<?php
namespace Model;
/**
* Descrição da classe Animal – representa um objeto animal, sendo gato, cachorro, etc.
*
* @author James Yuri
*/
use JsonSerializable;
class Animal implements JsonSerializable{
 private $id;  
 private $nome;
 private $especie;
 private $genero;
 private $situacao;
 private $data_nascimento;
 private $historico;
 private $raca;
 

   public function __construct($idAnimal, $nomeAnimal, $especieAnimal, $generoAnimal, $situacaoAnimal, $data_nascimentoAnimal, $historicoAnimal, $racaAnimal) {
    $this->id = $idAnimal;
    Animal::setNome($nomeAnimal);
    Animal::setEspecie($especieAnimal);
    Animal::setGenero($generoAnimal);
    Animal::setSituacao($situacaoAnimal);
    Animal::setDataNascimento($data_nascimentoAnimal);
    Animal::setHistorico($historicoAnimal);
    Animal::setRaca($racaAnimal);
  }
  
  public function jsonSerialize(){
   return [
      'ID' => $this->id,
      'NOME' => $this->nome,
      'ESPECIE' => $this->especie,
      'GENERO' => $this->genero,
      'SITUACAO' => $this->situacao,
      'DATANASCIMENTO' => $this->data_nascimento,
      'HISTORICO' => $this->historico,
      'RACA' => $this->raca
  ];
  }

  public function getId(){
     return $this->id;
  }
  
 public function setNome($nomeAnimal) {
    $this->nome = $nomeAnimal;
 }

 public function getNome() {
    return $this->nome;
 }

 public function setEspecie($especieAnimal) {
    $this->especie = $especieAnimal;
 }

 public function getEspecie() {
    return $this->especie;
 }

 public function setGenero($generoAnimal) {
    $this->genero = $generoAnimal;
 }

 public function getGenero() {
    return $this->genero;
 }

 public function setSituacao($situacaoAnimal) {
    $this->situacao = $situacaoAnimal;
 }

 public function getSituacao() {
    return $this->situacao;
 }

 public function setDataNascimento($data_nascimentoAnimal) {
    $this->data_nascimento = $data_nascimentoAnimal;
 }

 public function getDataNascimento() {
    return $this->data_nascimento;
 }

 public function setHistorico($historicoAnimal) {
    $this->historico = $historicoAnimal;
 }

 public function getHistorico() {
    return $this->historico;
 }

 public function setRaca($racaAnimal) {
    $this->raca = $racaAnimal;
 }

 public function getRaca() {
    return $this->raca;
 }
  
}
 
?>