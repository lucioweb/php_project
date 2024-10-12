<?php

use Source\MinhaClasse;
use Source\Pessoa;
use Source\SayHello;
use Source\FsPhp;

require './vendor/autoload.php';

$obj_saudacao = new SayHello(); //Instanciando a classe
$obj_pessoa = new Pessoa("lucio", 56 ); //Instanciando a classe
$obj_dev = new FsPhp("Mysql","Apache", "PHP", "Ubuntu", "PhpStorm","HTML");
$obj_fsphp = new MinhaClasse([
    "db_name" => "MySql",
    "server_name" => "Apache",
    "lang_name" => "PHP",
    "os_name" => "Ubuntu 22.04",
    "ide_name" => "PhpStorm",
    "markup_lang" => "HTML"
]);

echo "1 - CHAMADA DO  MÉTODO sayHello()" . PHP_EOL;
$obj_saudacao->sayHello() . PHP_EOL;
echo PHP_EOL;

echo "2 - CHAMADA DO  MÉTODO showInfo()" . PHP_EOL;
$obj_pessoa->showInfo() . PHP_EOL;
echo PHP_EOL;

echo "3 - CHAMADA DO  MÉTODO showInfoFsphp()" . PHP_EOL;
$obj_dev->showInfoFsphp() . PHP_EOL;
echo PHP_EOL;

echo "4 - A CLASSE MinhaClasse SENDO INSTANCIADA - CRIAÇÃO DO OBJETO obj_fsphp" . PHP_EOL;
// CHAMADA DO MÉTODO getArray() SENDO ARMAZENADA EM $array" . PHP_EOL;
$array = $obj_fsphp->getArray(); 
//Entenda o código: um pouco acima foi criado o objeto $fsphp, instância da classe MinhaClasse.
//Com o objeto $fsphp criado, podemos agora acessar os métodos da classe MinhaClasse.
print_r($array);
echo PHP_EOL;

echo "5 - ACESSANDO UM VALOR CONTIDO NUMA CHAVE ESPECÍFICA." . PHP_EOL;
echo "Exemplo: O SGBD utilizado na stack é o {$array ["db_name"]}, value \"MySql\" NA Key \"db_name\"." . PHP_EOL;
echo PHP_EOL;

echo "6 - print_r no array original" . PHP_EOL;
print_r($array);
echo PHP_EOL;

echo "7 - INSERINDO O value \"Lúcio\" NA Key \"dev_name\" NO ARRAY ORIGINAL E print_r NO ARRAY APÓS A INSERÇÃO." . PHP_EOL;
$array["dev_name"]= "Lúcio"; // Adiciona o value "Lúcio" à Key "dev_name" ao ao final do array.
$obj_fsphp->setArray($array); //set para alterar a propriedade $fsphp da classe.
print_r($array);
echo PHP_EOL;

echo "8 - foreach no array". PHP_EOL;
$total = count($array);
foreach ($array as $key => $valor) {
    echo $valor . PHP_EOL;
    if ($key < $total - 1) {
        echo ", ";
    }
}