<?php


namespace Source;


class MinhaClasse
{
    private $fsPhp;

    /**
     * MinhaClasse constructor.
     * @param array $arrayInicial
     */
    public function __construct(array $arrayInicial = [])
    {
        $this->fsPhp = $arrayInicial; //Diz que a propriedade fsPhp recebe um array vazio ($arrayInicial=[]).
    }

    /**
     * Métodos getArray e setArray são adicionados para acessar e modificar a propriedade.
     * @return array
     */
    public function getArray()
    {
        return $this->fsPhp;
    }

    public function setArray(array $novoArray)
    {
        $this->fsPhp = $novoArray;
    }
}