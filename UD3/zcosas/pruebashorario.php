<?php
$hoy= new DateTime('now');
echo $hoy->format("d-m-y h:m;s"),"<br>";
echo $hoy->format("d-m-y h:i;s"),"<br>";



?>