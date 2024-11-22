<?php 
echo "hola Mundo";
echo "<br>";
print "Hola"."Mundo2";

$ciclo ="DAW";

$modulo="DWES";

$formato="%s es un modulo de %d curso de %s";
print"<p>";
printf("%s es un modulo de %d curso de %s", $modulo,2,$ciclo);
print "</p>";
echo gettype($ciclo);
echo "<br>";

echo is_string($ciclo);


 ?>