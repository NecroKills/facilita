<?php

class Pessoa {
  var $nome;
  var $tamanho;
  var $taxaDeCrescimento;

  public function Pessoa ($nome, $tamanho, $taxaDeCrescimento){
    $this->nome = $nome;
    $this->tamanho = $tamanho;
    $this->taxaDeCrescimento = $taxaDeCrescimento;
  }

function crescer (){
  $this->tamanho = $this->tamanho + $this->taxaDeCrescimento;
  }
  
}

?>
