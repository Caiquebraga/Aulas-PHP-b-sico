<?php

require_once 'construct.php';


class automovel extends carro
{
    public $tipo;

    public function andar()
    {
        echo "VRRRRRUM";
    }

    public function farois()
    {
        echo "farois ligados";
    }  
}

$meucarroextendido = new automovel('prisman', 4);
$meucarroextendido->tipo = 'sedan';

echo 'meu carro é um: ' . $meucarroextendido->name . "<br>";
echo 'meu carro tem: ' . $meucarroextendido->rodas . "<br>";
echo 'meu carro é do tipo: ' . $meucarroextendido->tipo . "<br>";


$meucarroextendido->andar();
$meucarroextendido->farois();
