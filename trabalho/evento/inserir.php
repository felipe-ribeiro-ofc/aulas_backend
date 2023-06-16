<?php

require_once "../conexao.php";

if (isset($_POST["nome"])) {

  $nome = $_POST["nome"];
  $esporte = $_POST["esporte"];
  $data = $_POST["data"];
  $local = $_POST["local"];

  //String com o comando SQL para ser executado no DB
  $sql = "INSERT INTO evento (`nome`, `esporte`, `data`, `local`) VALUES (?, ?, ?, ?);";

  //Prepara o SQL para ser executado no banco de dados
  $comando = $conexao->prepare($sql);

  //adiciona os valores nos parâmetros
  $comando->bind_param("ssss", $nome, $esporte, $data, $local);

  //executa o SQL - Comando no Banco de Dados
  $comando->execute();
}
//abre o arquivo form.php
header("Location: index.php");
