<?php
//O get é um método que você "pega" dados do servidor.
//Neste caso, pegamos o valor das variáveis inseridas na URL (numero1 e numero2) e depois a somamos.
$resultado=$_GET['numero1']+$_GET['numero2'];
echo "O resultado da soma é $resultado";