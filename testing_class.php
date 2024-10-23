<?php

/* Fazendo o auto-import das classes, quando o objeto é criado (classe instanciada) */

use Source\FullStack;
use Source\Pessoa;
use Source\SayHello;
use Source\FsPhp;

require './vendor/autoload.php';

/* 
Criando os objetos (instâncias das classes). 
Quando o objeto é criado diz-se que a classe foi instanciada. 
A instância da classe é atribuída a uma variável (o objeto).
Quando a classe é instanciada, seus métodos são inicializados 
e ficam disponíveis para o objeto que recebeu a intância da classe.
*/
// INSTANCIANDO TODAS AS CLASSE em source
$obj_saudacao = new SayHello();
$obj_pessoa = new Pessoa("lucio", 56);
$obj_dev = new FsPhp("Mysql", "Apache", "PHP", "Ubuntu", "PhpStorm", "HTML");
$obj_fullstack = new FullStack([
    "db_name" => "MySql",
    "server_name" => "Apache",
    "lang_name" => "PHP",
    "os_name" => "Ubuntu 22.04",
    "ide_name" => "PhpStorm",
    "markup_lang" => "HTML"
]);

echo "1 - CHAMADA DO  MÉTODO sayHello() - CLASSE SayHello." . PHP_EOL;
$obj_saudacao->sayHello() . PHP_EOL;
echo PHP_EOL;

echo "2 - CHAMADA DO  MÉTODO showInfo() - CLASSE Pessoa." . PHP_EOL;
$obj_pessoa->showInfo() . PHP_EOL;
echo PHP_EOL;

echo "3 - CHAMADA DO  MÉTODO showInfoFsphp() - CLASSE FsPhp" . PHP_EOL;
$obj_dev->showInfoFsphp() . PHP_EOL;
echo PHP_EOL;

echo "4 - A CLASSE class FullStack SENDO INSTANCIADA - CRIAÇÃO DO OBJETO obj_fullstack" . PHP_EOL;
// O OBJETO $obj_fullstack ACESSANDO O MÉTODO getArray().
$array = $obj_fullstack->getArray();
print_r($array);
echo PHP_EOL;

echo "5 - ACESSANDO UM VALOR CONTIDO NUMA CHAVE ESPECÍFICA." . PHP_EOL;
echo "Exemplo: O SGBD utilizado na stack é o {$array["db_name"]}, value \"MySql\" NA Key \"db_name\"." . PHP_EOL;
echo PHP_EOL;

echo "6 - print_r no array original" . PHP_EOL;
print_r($array);
echo PHP_EOL;

echo "7 - INSERINDO O value \"Lúcio\" NA Key \"dev_name\" NO ARRAY ORIGINAL E print_r NO ARRAY APÓS A INSERÇÃO." . PHP_EOL;
$array["dev_name"] = "Lúcio"; // Adiciona o value "Lúcio" à Key "dev_name" ao ao final do array.
$obj_fullstack->setArray($array); //set para alterar a propriedade $fsphp da classe.
print_r($array);
echo PHP_EOL;

echo "8 - foreach no array" . PHP_EOL;
$total = count($array);
foreach ($array as $key => $valor) {
    echo $valor . PHP_EOL;
    if ($key < $total - 1) {
        echo ", ";
    }
}