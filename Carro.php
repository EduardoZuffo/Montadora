<?php

namespace Montadora;



use Montadora\Motor\Motor;
use Montadora\Volante\InterfaceVolante;

class Carro
{
    const ANO_FABRICACAO = 2016;
    
    public $cor = 'Branco';
    public $rodas = 14;
    public $arCondicionado = false;
    public $farol = true;
    private $tipoCombustivel = 'flex';
    private $quantCombustivel = 0;
    
    /**
     *
     * @var Motor 
     */
    private $motor;
    private $volante;
    private $ligado = false;
    
    /**
     * Função construtora
     * @param string $motor
     */
    public function __construct(Motor $motor, InterfaceVolante $volante)
    {
        $this->motor = $motor;
        $this->volante = $volante;
    }
            
    /**
     * Acelera ou desacelera conforme o valor da aceleração informada
     * @param int $aceleracao
     */        
    private function andar($aceleracao)
    {
        if ($this->ligado == true)
        {
            echo "Andou:".$aceleracao."\n\n";
            $gasto = $this->motor->acelerar($aceleracao);
            
            $this->quantCombustivel -= $gasto;
        }

    }
    
    public function virar($direcao)
    {
        $this->volante->girar($direcao);
    }
    
    /**
     * Faz emitir um som chato
     * @param string $intensidade
     * @return string
     * @author John Doe <john.doe@example.com>
     */
    public function buzinar($intensidade)
    {
        return "Buzinei $intensidade!!! \n\n";
    }
    
    /**
     * Liga o Veiculo
     */ 
    public function ligar()
    {
        if ($this->quantCombustivel > 0)
        {
            $this->ligado = true;
            $this->motor->ligar();
        } else {
            //echo "Sem combustivel \n\n";
            throw new Exception('Sem Combustivel');
        }

    }
        
    public function acelerar($potencia)
    {
        $this->andar($potencia);
    }
        
    public function frear()
    {
        $this->andar(0);
    }
        
    public function re($potencia)
    {
        $this->andar($potencia*-1);
    }
    
    public function abastecer($litros)
    {
        $this->quantCombustivel += $litros;
    }
    
    
}


?>