<?php

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM produto where categoria like ?";


//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);
$categoria= $_GET['categoria'] ?? "";
$categoria="%$categoria%";

$comando->bind_param("s",$categoria);
//adiciona os valores nos parâmetro

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();
//adiciona o produto (linha do resultado) no vetor
$produtos = [];

//pegar a primeira linha de resultado
while ($produto = $resultado->fetch_assoc()) {
   $produtos[] = $produto;
}

