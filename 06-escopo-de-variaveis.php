<?php
///ESCOPO GLOBAL
$nome = "Fabio Oliveira";
$a = 1;
$b = 3;
$c = 7;


function exibeNome() {
	global $nome;
	echo "$nome <hr>";
}

exibeNome();

/////////////////////////

function exibeCidade() {
///ESCOPO LOCAL
	global $cidade;
	$cidade = "Espirito Santo";
}

exibeCidade();
echo "$cidade <hr>";

/////////////////////////

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();