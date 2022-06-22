<?php 
$nome = "Markus";
$salario = 4000;
$valorImovel = 300000;
$parcela = 120;
$calculo = $valorImovel/$parcela;
$renda = ($salario*30)/100;
echo "Olá, $nome, seu limite é $renda, para ser aprovado é preciso ter parcela igual ou superior à $calculo. ";
if($renda>$calculo){
    echo"Parabens! Sua renda é compativel com financimento";
}
else{
    echo "Sua renda não é compativel";
}
?>