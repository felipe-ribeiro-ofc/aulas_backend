<?php include_once "../controla_sessao/controla.php"; ?>
<?php
require_once "../conexao.php";
if (isset($_POST["nome"]) && isset($_POST["login"]) && isset($_POST["senha"])) {
   require_once "salvar_foto.php";
   $id = $_POST["id"];
   $nome = $_POST["nome"];
   $login = $_POST["login"];
   $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
   $foto = $nome_arquivo;

   //String com o comando SQL para ser executado no DB
   $sql = "UPDATE usuario SET `login`=?, `senha`=?, `nome`=?, `foto`=? WHERE  `idusuario`=?;";

   //Prepara o SQL para ser executado no banco de dados
   $comando = $conexao->prepare($sql);

   //adiciona os valores nos parâmetros
   $comando->bind_param("ssssi", $login, $senha, $nome, $foto, $id);

   //executa o SQL - Comando no Banco de Dados
   $comando->execute();
}
//abre o arquivo form.php
header("Location: index.php");
