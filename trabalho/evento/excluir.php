<?php

require_once "../conexao.php";
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $sql = "DELETE FROM evento WHERE idevento=?; ";
   $comando = $conexao->prepare($sql);
   $comando->bind_param("i", $id);
   $comando->execute();
}
header("Location:index.php");