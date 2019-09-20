<?php

require_once 'cidadao.php';
class chefe extends cidadao
{

    private  $exercito;

    function ComandarCidade()
    {
        echo "<p>Estou regendo a cidade e pah</p>";
    }

    function Diplomacia()
    {
        echo "<p>Estou diplomaciando as pessoa tudo e pah tbm </p>";
    }

    function OrdenarExercito()
    {
        echo "<p>Ordeno meu exército para a atacar e pah sei que lá </p>";
    }
    function guerrear()
    {
        echo "<p>Sou um chefe e estoy a guerrear</p>";
    }
}
