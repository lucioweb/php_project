<?php


use Source\MinhaClasse;
use Source\Pessoa;
use Source\SayHello;
use Source\FsPhp;

require './vendor/autoload.php';


$saudacao = new SayHello();
echo "1 - CHAMADA DO  MÉTODO sayHello()" .PHP_EOL;
echo $saudacao->sayHello() . PHP_EOL;

/**
 * Instancia-se a classe (new Pessoa), ou seja, cria-se um fsphpeto.
 * Diz-se também que o fsphpeto é uma instância da classe.
 */
$pessoa1 = new Pessoa("lucio", 56 );
/**
 * Com o fsphpeto criado, ou seja com a classe instanciada,
 * agora é possível acessar os métodos disponíveis na classe.
 */
echo "2 - CHAMADA DO  MÉTODO showInfo()" . PHP_EOL;
$pessoa1->showInfo();
//$pessoa1->PessoaAndar();

$dev = new FsPhp("Mysql","Apache", "PHP", "Ubuntu", "PhpStorm","HTML");
echo "3 - CHAMADA DO  MÉTODO showInfoFsphp()" . PHP_EOL;
$dev->showInfoFsphp();

$fsphp = new MinhaClasse([
    "db_name" => "MySql",
    "server_name" => "Apache",
    "lang_name" => "PHP",
    "os_name" => "Ubuntu 22.04",
    "ide_name" => "PhpStorm",
    "markup_lang" => "HTML"
]);

$array = $fsphp->getArray(); //get para acessar a proriedade da classe a atribuí-la à variável $array.
echo "4 - ACESSANDO UM VALOR CONTIDO NUMA CHAVE ESPECÍFICA." . PHP_EOL;
echo "O SGBD utilizado na stack é o {$array ["db_name"]}." . PHP_EOL;
echo "5 - print_r no array original" . PHP_EOL;
print_r($array);

$array["dev_name"]= "Lúcio"; // Adiciona o value "Lúcio" à Key "dev_name" ao ao final do array.
$fsphp->setArray($array); //set para alterar a propriedade $fsphp da classe.
echo "6 - print_r no array após a inserção de dados" . PHP_EOL;
print_r($array);

echo "7 - foreach no array". PHP_EOL;
$total = count($array);
foreach ($array as $key => $valor) {
    echo $valor . PHP_EOL;
    if ($key < $total - 1) {
        echo ", ";
    }
}

/*foreach ($array as $key => $valor) {
    echo "{$key}: {$valor}";
}*/