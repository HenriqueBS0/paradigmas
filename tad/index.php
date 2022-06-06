<?php

require_once './Inteiros.php';

$inteirosUm = new Inteiros();

$inteirosUm->inserirFinal(3);
$inteirosUm->inserirFinal(4);
$inteirosUm->inserirInicio(2);
$inteirosUm->inserirInicio(1);

$inteirosDois = new Inteiros();

$inteirosDois->inserirFinal(5);
$inteirosDois->inserirFinal(6);
$inteirosDois->inserirInicio(4);
$inteirosDois->inserirInicio(3);


var_dump($inteirosUm->isVazio());