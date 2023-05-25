<?php

require_once "../conexao.php";
if (isset($_POST["nome"]) && isset($_POST["login"]) && isset($_POST["senha"])) {

  require_once "salvar_foto.php";

  $nome = $_POST["nome"];
  $login = $_POST["login"];
  $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
  $foto = $nome_arquivo;

  //String com o comando SQL para ser executado no DB
  $sql = "INSERT INTO `usuario` (`login`, `senha`, `nome`, `foto`) VALUES (?, ?, ?, ?); ";
  echo $sql;

  //Prepara o SQL para ser executado no banco de dados
  $comando = $conexao->prepare($sql);

  //adiciona os valores nos parâmetros
  $comando->bind_param("ssss", $login, $senha, $nome, $foto);

  //executa o SQL - Comando no Banco de Dados
  $comando->execute();
}
//abre o arquivo form.php
header("Location: index.php");
