<?php

namespace Montadora\Motor;

use Montadora\Motor\Motor;

/**
 * Modelo Base do Motor
 * @author John Doe <john.doe@example.com>
 * @link http://www.google.com
 */
abstract class Motor
{
    //private $cilindada = 1000;
    private $combustivel = "Gasolina";
    protected $aceleracao = 0;
    private $ligado = false;
    
    /**
     * Liga ou desliga o Motor
     * @return bool
     */
    public function ligar()
    {
        $this->ligado = !$this->ligado;
        return $this->ligado;
    }
    
    /**
     * Acelera o Motor
     * @param int $potencia
     * @return int Combustivel gasto
     */
    public function acelerar($potencia)
    {
        $this->aceleracao = $potencia;
        $gasto = $potencia * $this->getCilindrada();
        return $gasto / 1000;
    }
    
    abstract public function getCilindrada();

}
?>