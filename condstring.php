<?php
$nome = 'Markus';
$bloco = 'B';
$apart = 704;

if($bloco=='A'& $apart==202)
{
    echo"Olá, $nome, Siga a esquerda, 2º Andar";
}
elseif ($bloco=='B' & $apart==704)
{
    echo "Olá, $nome, Siga a Direita, 7ºandar";
}
else{
    echo"Não encontramos sua identicação";
}


?>