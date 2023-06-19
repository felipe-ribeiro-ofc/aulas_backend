<?php

require_once "../conexao.php";
if (isset($_POST["nome"]) && isset($_POST["esporte"]) && isset($_POST["data"]) && isset($_POST["local"])) {
   $nome = $_POST["nome"];
   $esporte = $_POST["esporte"];
   $data = $_POST["data"];
   $local = $_POST["local"];
   $id = $_POST["id"];
   $sql = "UPDATE evento SET `nome`=?, `esporte`=?, `data`=?, `local`=? WHERE `idevento`=?";
   $comando = $conexao->prepare($sql);
   $comando->bind_param("ssssi", $nome, $esporte, $data, $local, $id);
   $comando->execute();
}
header("Location: index.php");