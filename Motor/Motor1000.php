<?php

namespace Montadora\Motor;

use Montadora\Motor\Motor;

class Motor1000 extends Motor 
{

    private $cilindada = 1000;

    public function getCilindrada() 
    {
        return $this->cilindada;
    }

}

?>