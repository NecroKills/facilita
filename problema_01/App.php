<?php
require_once("Pessoa.php");

$juca = new Pessoa("Juca", 1.10, 0.03);
$chico = new Pessoa("Chico", 1.50, 0.02 );

for ($ano = 0; ($juca->tamanho) < ($chico->tamanho); $ano++) {
  $juca->crescer();
  $chico->crescer();
}

print_r("Serão necessarios $ano anos para que Juca seja maior que Chico <br>");
print_r("Em $ano anos Juca medirá $juca->tamanho e Chico medirá $chico->tamanho.");

?>
