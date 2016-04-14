<?php

namespace Montadora\Motor;

use Montadora\Motor\Motor;

class Motor1600 extends Motor
{
    private $cilindada = 1600;

    public function getCilindrada() 
    {
        return $this->cilindada;
    }
}


?>