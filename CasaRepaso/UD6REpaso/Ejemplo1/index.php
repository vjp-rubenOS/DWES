<?php
require 'entities/Coches.class.php';

$miCoche = new Coche('Seat', 'Leon', []);

echo "Marca coche: " . $miCoche->getMarca() . "<br>";
echo "Modelo coche: " . $miCoche->getModelo() . "<br>";

$miCoche->motor = '165cv';
$miCoche->pintura = 'metalizada';

$miCoche->combustible = 'gasolina';

$array = $miCoche->getCaracteristicas();
echo "Caracteristicas del coche: <br>";
foreach ($array as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}

echo "<br> Motor del coche: " . $miCoche->motor . "<br>";
echo "Tienes valor /$miCoche->motor: ";
var_dump(isset($miCoche->motor));

unset($miCoche->motor);
echo "<br> Tras ejecutar unset, tiene valor \$miCoche->motor: ";
var_dump(isset($miCoche->motor));

?>
