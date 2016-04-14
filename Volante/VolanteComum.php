<?php

namespace Montadora\Volante;

use Montadora\Volante\InterfaceVolante;

class VolanteComum implements InterfaceVolante
{
    private $direcao;


    public function girar($direcao)
    {
        $this->direcao = $direcao;
    }

}

?>