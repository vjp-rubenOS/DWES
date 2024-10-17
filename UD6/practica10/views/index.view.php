<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
    //creamos los contactos de la agenda
    $miAgenda = new Agenda('Mi Primera Agenda');
    $miAgenda->addContact(new Contacto(1, 'Raquel', 684622773, new DateTime(), 'foto1.jpg'));
    $miAgenda->addContact(new Contacto(2, 'Juan', 684622773, new DateTime(), 'foto2.jpg'));
    $miAgenda->addContact(new Contacto(3, 'Pedro', 684622773, new DateTime(), 'foto3.jpg'));

    echo $miAgenda->__toString();

    echo '<h1>Segunda Agenda</h1>';
    $miAgenda->removeContact($miAgenda->getAgenda()[0]);//Eliminamos el primer contacto
    $copiaSegundoContacto = clone $miAgenda->getAgenda()[1];
    $miAgenda->addContact($copiaSegundoContacto);//Añadimos una copia del segundo contacto

    echo $miAgenda->__toString();

    $miAgenda->addContact(new Contacto(1, 'Miguel', 684622773, new DateTime(), 'foto4.jpg'));
    $miAgenda->addContact(new Contacto(2, 'Juanita', 684622773, new DateTime(), 'foto5.jpg'));
    $miAgenda->addContact(new Contacto(3, 'Petra', 684622773, new DateTime(), 'foto6.jpg'));

    $cloneAgenda = clone $miAgenda;
    $miAgenda->removeContact($miAgenda->getAgenda()[1]);
    $cloneAgenda->getAgenda()[2]->setNombre('Nombre Cambiado');

    echo'<h1>Agenda Original</h1>';
    echo $miAgenda->__toString();

    echo'<h1>Agenda Clonada</h1>';
    echo $cloneAgenda->__toString();



    ?>
</body>
</html>