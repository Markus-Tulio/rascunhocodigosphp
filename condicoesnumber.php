<?php

$n1 = (int)5;
$n2 = (int)1;
$n3 = (int)5;
$n4 = (int)5;
$media = ($n1+$n2+$n3+$n4)/4;
if($media>=7)
{
    echo "Sua média foi $media, Parabens você foi aprovado!";
}
if($media<7 & $media>5)
{
    echo "Sua media foi $media, você está de recuperação";
}
else{
    echo "Sua média foi $media, Você foi reprovado!";
}


?>