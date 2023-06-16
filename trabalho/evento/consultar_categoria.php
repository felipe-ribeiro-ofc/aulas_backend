<?php

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT distinct esporte FROM evento";


//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();
//adiciona o produto (linha do resultado) no vetor
$esps = [];

//pegar a primeira linha de resultado
while ($esp = $resultado->fetch_assoc()) {
   $esps[] = $esp;
}
