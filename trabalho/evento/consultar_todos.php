<?php

require_once "../conexao.php";
$sql = "SELECT * FROM evento";
$comando = $conexao->prepare($sql);
$comando->execute();
$resultado = $comando->get_result();
$eventos = [];
while ($evento = $resultado->fetch_assoc()) {
   $eventos[] = $evento;
}
