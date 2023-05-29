<?php
//sempre que for trabalhar com sessões é necessário iniciar a sessão
session_start();
//verifica se existe a vssariável 
if (!isset($_SESSION['usuario'])) {
header("Location:../site/login.php");
}
