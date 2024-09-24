<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hola.php</title>
</head>

<body>
    
    
    <?php
    $saludo = "hola ";
    
    if(isset($_GET['id'])){
        $nombre = $_GET['id'];

    }
    else{
        $nombre='Anonimo';
    }
   
    echo $saludo . $nombre;
    ?>
    <Script>alert("esto es una alerta")</Script>
    <script>var nombre= prompt ("introduce tu nombre")</script>
    <script>console.log ("ha entrado en el sistema"+nombre)</script>


</body>

</html>