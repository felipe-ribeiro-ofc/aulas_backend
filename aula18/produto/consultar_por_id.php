<?php

require_once "../conexao.php";
if (isset($_GET['id'])) {

   $id = $_GET['id'];

   //String com o comando SQL para ser executado no DB
   $sql = "SELECT * FROM produto WHERE idproduto=?; ";

   //Prepara o SQL para ser executado no banco de dados
   $comando = $conexao->prepare($sql);

   //adiciona os valores nos parâmetros
   $comando->bind_param("i", $id);

   //executa o SQL - Comando no Banco de Dados
   $comando->execute();

   //pegar o resultado da consulta
   $resultado = $comando->get_result();

   //pegar a primeira linha de resultado
   $linha = $resultado->fetch_assoc();
}
