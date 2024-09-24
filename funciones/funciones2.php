<?php
function insert($sql, $tabla, $campos, $valores){
    $sql = str_replace("tabla", $tabla, $sql);
    $sql = str_replace("campos", $campos, $sql);
    $sql = str_replace("valores", $valores, $sql);
    return $sql;
}
$alumnos =array(
    ["dni"=> 111, "nombre"=> "Marta", "apellidos"=>'Garcia', "edad"=>21, "ciclo"=>"daw"],
    ["dni"=> 222, "nombre"=> "Lucia", "apellidos"=>'Perez', "edad"=>18, "ciclo"=>"daw"],
    ["dni"=> 333, "nombre"=> "Maya", "apellidos"=>'Rodriguez', "edad"=>22, "ciclo"=>"daw"],
    ["dni"=> 444, "nombre"=> "Rita", "apellidos"=>'Gutierrez', "edad"=>25, "ciclo"=>"daw"],


);


$sql = "INSERT INTO tabla (campos) VALUES (valores)";
$tabla = "alumnos";
$campos = "dni, nombre, apellidos, edad, ciclo";
foreach($alumnos as $alumno){
    $valores = $alumno["dni"].", '".$alumno["nombre"]."', '".$alumno["apellidos"]."', ".$alumno["edad"].", '".$alumno["ciclo"]."'";
    echo insert($sql, $tabla, $campos, $valores)."<br>";
}



?>