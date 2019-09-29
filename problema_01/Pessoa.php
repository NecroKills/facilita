<?php
/**
 * [Classe Pessoa]
 *
 */
class Pessoa {
  var $nome;
  var $tamanho;
  var $taxaDeCrescimento;

  /**
   * [Metodo construtor]
   * @param [type] $nome              [description]
   * @param [type] $tamanho           [description]
   * @param [type] $taxaDeCrescimento [description]
   */
  function __construct ($nome, $tamanho, $taxaDeCrescimento){
    $this->nome = $nome;
    $this->tamanho = $tamanho;
    $this->taxaDeCrescimento = $taxaDeCrescimento;
  }

/**
 * [Metodo que fazer a pessoa crescer]]
 */
function crescer (){
  $this->tamanho = $this->tamanho + $this->taxaDeCrescimento;
  }

}

?>
