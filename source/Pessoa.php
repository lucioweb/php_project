<?php


namespace Source;

/**
 * Class Pessoa
 * @package Source
 */
class Pessoa
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $age;
    /**
     * Pessoa constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }


    public function showInfo() {
        echo "Nome: " . $this->name . "\n" . "Idade: " . $this->age . PHP_EOL;
    }

    /*public function PessoaAndar() {
        return "Está se movendo";
    }*/

}