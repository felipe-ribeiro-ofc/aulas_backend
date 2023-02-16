<h2>Operadores lógicos</h2>
<hr>
<p>É utilizado para avaliar uma expressão formada por um conjunto de operadores lógicos.</p>
<ul>
    <li>and | E></li>
    <li>or | ou</li>
    <li>&& | E</li>
    <li>|| | ou</li>
    <li>! | não</li>
    <li>xor | ou exclusivo</li>
</ul>
<h3>Tabela Verdade</h3>
<table border=1>
<tr>
<th colspan=3>Tabela do E</th>
    </tr>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>
<br>
<strong>Exemplo</strong><br>
Murilo disse a Bruna que iria ao parque se:<br>
1) Domingo estivesse de sol;<br>
2) Tivesse realizado todas as atividades do IF.
<br>

<?php
$condicao1=true;
$condicao2=false;
$acao_murilo=$condicao1 && $condicao2;
var_dump($acao_murilo);
?>
<h3>Tabela Verdade</h3>
<table border=1>
<tr>
<th colspan=3>Tabela do OU</th>
    </tr>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>
<br>

<strong>Exemplo</strong><br>
Murilo disse a Bruna que iria ao parque se:<br>
1) Domingo estivesse de sol;<br>
2) Tivesse realizado todas as atividades do IF.
<br>
<?php
$condicao1=true;
$condicao2=false;
$acao_murilo=($condicao1 or $condicao2);
var_dump($acao_murilo);
?>
<h3>Tabela Verdade</h3>
<table border=1>
<tr>
<th colspan=3>Tabela do NÃO</th>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
    </tr>
</table>
<br>
<strong>Exemplo</strong><br>
Murilo é um cara legal:<br>
<?php
$condicao1=true;
$acao_murilo=!(!$condicao1);
var_dump($acao_murilo);
?>

