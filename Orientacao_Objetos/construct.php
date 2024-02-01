<?php

class carro 
{

    public $name;
    public $rodas;

    public function __construct($name, $rodas)
    {
        $this->name = $name;
        $this->rodas = $rodas;
    }

    public function andar()
    {
        echo "esse carro andou";
    }


};

$meucarro = new carro('camaro', 4 );

echo "o nome do meu carro é: " . $meucarro->name . "<br>";
echo "meu carro tem " . $meucarro->rodas . " rodas" . "<br>"; 
$meucarro->andar();