<?php

require_once 'cidadao.php';
class guerreiro extends cidadao
{
    private $moedasOuro;

    public function __construct($funcao)
    {
        $this->nome = "Izaias";
        $this->patente = "Cabo";
        $this->funcao = $funcao;
    }

    function acatarOrdem()
    {
        echo "<p>Estoy obediente</p>";
    }

    function guerrear()
    {
        echo "<p>Sou um guerreiro e estoy a guerrear</p>";
    }
}
