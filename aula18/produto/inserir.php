<?php include_once "../controla_sessao/controla.php"; ?>
<?php

require_once "../conexao.php";
if (isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"]) && isset($_POST["categoria"])) {

  require_once "salvar_foto.php";

  $nome = $_POST["nome"];
  $descricao = $_POST["descricao"];
  $preco = $_POST["preco"];
  $foto = $nome_arquivo;
  $categoria = $_POST["categoria"];

  //String com o comando SQL para ser executado no DB
  $sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`,`categoria`) VALUES (?, ?, ?, ?, ?); ";
  echo $sql;

  //Prepara o SQL para ser executado no banco de dados
  $comando = $conexao->prepare($sql);

  //adiciona os valores nos parâmetros
  $comando->bind_param("ssdss", $nome, $descricao, $preco, $foto, $categoria);

  //executa o SQL - Comando no Banco de Dados
  $comando->execute();
}
//abre o arquivo form.php
header("Location: index.php");
