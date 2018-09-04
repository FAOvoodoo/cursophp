<?php

/************Escalares***********/
// String
$nome = "ola mundo 123 !@#";
echo "<br>";
var_dump($nome);
echo "<br>";
if (is_string($nome)):
	echo "É uma String";
else:
	echo "Não é uma string";
endif;

echo "<hr>";

//int
$idade = 27;
var_dump($idade);
echo "<br>";
if (is_int($idade)):
	echo "É um Inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

//float
$altura = 1.71;
var_dump($altura);
echo "<br>";
if (is_float($altura)):
	echo "É um Float";
else:
	echo "Não é um float";
endif;
echo "<hr>";

//bolean
$admin = true;
var_dump($admin);
echo "<br>";
if (is_bool($admin)):
	echo "É um Boolean";
else:
	echo "Não é um Boolean";
endif;
echo "<hr>";

/************COMPOSTOS***********/

//Array
$carros = array("gol","uno","camaro",12,20.6,true);
var_dump($carros);
echo "<br>";
if (is_array($carros)):
	echo "É um Array";
else:
	echo "Não é um Array";
endif;
echo "<hr>";

//Object
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this->nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirnome("Fabio");
var_dump($cliente);

echo "<br>";
if (is_object($cliente)):
	echo "É um Objeto";
else:
	echo "Não é um Objeto";
endif;
echo "<hr>";

//Object
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this->nome = $nome;
	}
}

echo "<hr>";

/************especiais***********/
//NULL
$cidade = NULL;
var_dump($cidade);

?>
