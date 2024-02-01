<?php

//Array com Chaves Únicas:

$carros = ["Chevrolet" => "Celta", "Renault" =>"Clio", "Wolks"=> "Polo"];

echo $carros["Wolks"];

// Array de Modelos sob Cada Marca:
$carros = ["Wolks"=> "Gol", "Chevrolet" => "Celta", "Renault" =>"Clio", "Wolks"=> "Polo"];

echo $carros["Chevrolet"][1];
