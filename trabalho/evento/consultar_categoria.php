<?php

require_once "../conexao.php";
$sql = "SELECT distinct esporte FROM evento";
$comando = $conexao->prepare($sql);
$comando->execute();
$resultado = $comando->get_result();
$esps = [];
while ($esp = $resultado->fetch_assoc()) {
   $esps[] = $esp;
}