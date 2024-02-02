<?php

abstract class animal {


    abstract public function fazersom();
    abstract public function andar();
}

class gato extends animal{

    public function fazersom(){
        echo "O gato fez Miauu\n";
}
    public function andar(){
        echo 'gato andou';
 }

}

$gato = new gato();

$gato->fazersom();
$gato->andar();
