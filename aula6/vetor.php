<h2>Vetores (array)</h2>
<p>
São estruturas de armazenamento compostas heterôgeneas(1-dim), que podem ser indexadas numericamente ou textualmente.
</p>
<?php
//exemplo variável simples
$nota=6;
$nota=3;
echo $nota . "<br>";//. é um join ou contatenador
//exemplo vetor indexado numericamente
$notas=[];//outra forma $notas=array();
$notas[]=6;
$notas[]=3;
var_dump($notas);
//imprimir só a primeira nota

//média
echo ($notas[0]+$notas[1])/2;

//Vetores com índice textual 
$notas=[];//cria um vetor  vazio
$notas["debora"]=7;
$notas["murilo"]=7.8;
$notas["poliana"]=9;
echo "<p></p>";
echo "A Poliana tirou nota ". $notas['poliana'];

//criar vetor com núemros
$valores=[];
$valores[]=2;
$valores[]=4;
$valores[]=8;
$valores[]=10;
$valores[]=12;
$valores[]=14;
$valores[]=16;
// ou - $valores=[2,4,8,10,12,14,16];

//imprimindo o conteúdo de um vetor numérico.
echo "<br>";
for($i = 0; $i <= 6; $i++){
    echo $valores[$i]."<br>";
    }
    
    //somar valores de um vetor
    $acumulador = 0;
    for($i=0; $i<=6; $i++){
        $acumulador = $acumulador + $valores[$i];
    }
    
    echo "<br> A soma dos valores é $acumulador";


    ?>


