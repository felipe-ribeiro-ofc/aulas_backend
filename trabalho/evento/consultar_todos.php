<?php

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM evento";


//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);
//$esporte= $_GET['esporte'] ?? "";
//$esporte="%$esporte%";

//$comando->bind_param("s",$esporte);
//adiciona os valores nos parâmetro

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();
//adiciona o produto (linha do resultado) no vetor
$eventos = [];

//pegar a primeira linha de resultado
while ($evento = $resultado->fetch_assoc()) {
   $eventos[] = $evento;
}

