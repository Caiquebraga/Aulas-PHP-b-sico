<?php

interface veiculo{
    public function toconnect();
    public function run();
    public function applyBrakes();

}

    class car implements veiculo{
        
        public function toconnect()
        {
           echo 'LIGADO';
        }

         
        public function run()
        {
           echo 'acessos';
        } 

        public function applyBrakes()
        {
            echo "parado";
        }
    }

    $carro = new car();

    $carro->toconnect();
    $carro->run();
    $carro->applyBrakes();