<?php

require_once "../conexao.php";
if (isset($_POST["nome"]) && isset($_POST["esporte"]) && isset($_POST["data"]) && isset($_POST["local"])) {
   $nome = $_POST["nome"];
   $esporte = $_POST["esporte"];
   $data = $_POST["data"];
   $local = $_POST["local"];
   $id = $_POST["id"];

   // String com o comando SQL para ser executado no DB
   $sql = "UPDATE evento SET `nome`=?, `esporte`=?, `data`=?, `local`=? WHERE `idevento`=?";

   // Prepara o SQL para ser executado no banco de dados
   $comando = $conexao->prepare($sql);

   // Adiciona os valores nos parâmetros
   $comando->bind_param("ssssi", $nome, $esporte, $data, $local, $id);

   // Executa o SQL - Comando no Banco de Dados
   $comando->execute();
}
// Abre o arquivo index.php
header("Location: index.php");
