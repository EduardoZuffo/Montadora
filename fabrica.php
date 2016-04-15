<pre>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//use Montadora\Motor\Motor1000;
use Montadora\Motor\Motor1600;
use Montadora\Motor\MotorTurbo;

use Montadora\Volante\VolanteComum as volante;

require_once './Carro.php';
require_once './Pickup.php';
require_once './Motor.php';
require_once './Motor1000.php';
require_once './Motor1600.php';
require_once './MotorTurbo.php';
require_once './VolanteComum.php';



$motor1 = new Montadora\Motor\Motor1000();
$motor2 = new Motor1600();
$motort = new MotorTurbo();

//$volante = new VolanteComum();
$volante = new volante();

$carro1 = new Carro($motort, $volante);
$carro2 = new Carro($motort, $volante);



try
{
    
    $carro1->abastecer(20);
    $carro1->ligar();
    $carro1->acelerar(30);
    
} catch (Exception $e)
{
    echo "\n".$e->getMessage()."\n";
}

$carro3->cor = "Preto";

var_dump($carro1, $carro2, $carro3);

if ($carro1 instanceof Countable)
{
    echo "São iguais";
} else 
{
    echo "São diferentes";
}

?>
</pre>