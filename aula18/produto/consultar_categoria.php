<?php

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT distinct categoria FROM produto";


//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();
//adiciona o produto (linha do resultado) no vetor
$cats = [];

//pegar a primeira linha de resultado
while ($cat = $resultado->fetch_assoc()) {
   $cats[] = $cat;
}
