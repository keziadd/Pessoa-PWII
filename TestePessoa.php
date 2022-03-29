<?php
require_once("Pessoa.class.php"); //Importação da classe Pessoa

$pessoa = new Pessoa(); //Instância da classe Pessoa
$pessoa->setNome("Kezia Dias Domingos"); //Definição do valor da variável "$nome"
echo $pessoa->getNome(); //Impressão do conteúdo da variável "$nome" através do comando "echo"

?>