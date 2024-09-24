<?php




/**
 * para sacar por pantalla
 */
echo "Diferencia entre echo y print <br>";
echo "hola ", " mundo <br>";
print "hola " . "mundo <br>";
/**
 * asignar variables
 */
$ciclo = "DAW";
$modulo = "DAWS";


/**
 * imprimir por pantallas utilizando una estructura
 */
echo "Utilizacion de printf para estructuras <br>";
printf("%s es un modulos del %s curso  de %s <br> ", $modulo, 2, $ciclo);


/**
 * funcion para sacar el tipo de la variable
 */
$num = 2;
echo "Gettype <br>";
echo gettype($num), "<br>";


/**
 * funcion para comprobar que una funcion es del tipo dado
 */
echo "Is_int <br>";
echo is_int($num), "<br>";
/**
 * funcion que da el tipo y el valor de una variable interesante para arrays
 */
echo var_dump($num), "<br>";


/**
 * comillas dobles interpreta lo que hay dentro
 * comilla simple no interpreta lo de dentro
 */
echo "Diferencia entre comillas simples y dobles <br>";
echo "$ciclo <br>";
echo '$ciclo <br>';


/**
 * Operadores combinados : -=,+=,*=,/=,.=,%=
 */




$a = 3;
$a += 5;
$a *= 2;
echo "Operadores combinados <br>";
echo $a . "<br>";


$b = "hola";
$b .= " que pasa";


echo $b . "<br>";
/**
 * con htmlspecialchars podemos salvar las etiquetas de html
 */
echo " Htmlspecialchars <br>";
echo htmlspecialchars("<br>");
echo "<br>";


/**
 * para dar valor a una constante se usa define y no =
 */
echo "Define","<br>";
define("PI", 3.1416);


echo PI . "<br>";


/**
 *          Estructura de datos
 * Sentencias condicionales
 * Estructurar repetitivas
 */


/**
 * if [..] else [.. ] elseif [.. ]
 */


$a = 3;
$b = 5;
echo " If ... elseif.....else","<br>";
if ($a > $b) {
    print "a es mayor que b"."<br>";
} elseif ($a == $b) {
    print " a es igual que b"."<br>";
} else
    print " b es mayor que a"."<br>";


/**
 * switch case
 */
$i = 5;
echo "Switch case <br>";
switch($i){
    case 0:{
        echo "$i es igual a 0";
        break;


    }
       
     case 1:{
        echo "$i es igual a 1";
        break;


     }
     case 2:{
        echo "$i es igual a 2";
        break;
     }
     default:{
        echo "Esa opcion no esta disponible ";
        break;
     }
    }


     


    /**
     * while
     */
    echo "While <br>";
    $i = 0;
    while ($i <= 5) {
        echo "<li>$i</li>";  // Añadimos <br> para saltar de línea
        $i++;
    }


    echo "<br>";


    /**
     * do while
     */
    echo "Do while <br>";
    $i = 5;
    do {
        echo "<ul>$i</ul>";  // Añadimos <br> para saltar de línea
        $i--;
    } while ($i >= 0);


    /**
     * for
     */
    echo "For <br>";
    for($i=0;$i<=5;$i++){
        print " hola ".$i;


    }
    echo"<br>";


    /**
     * for each
     * el primer ejemplo es sin key (clave)
     * el segundo ejemplo es con el key (clave)
     */


     echo "For each <br>";


     $vector = array("HOLA 1"," HOLA 2","3HOLA 3<br>");


     foreach ($vector as  $valor) {
       print " Elementos de la matriz: ".$valor."<br>";
     }


     $vector2["elemento 1"]= 1;
     $vector2["segundo elemento"]=2;
     $vector2[" 3 ELEMENTO"]=3;
     foreach($vector2 as $clave => $valor2){
        print $clave." valor ".$valor2."<br>";
     }
     /**
      * Se puede aceder a un caracter de una cadena con [ ]
      */
      echo "Acceder a un caractr con un [] <br>";
      $frase = "hola ";
      echo $frase[2]."<br>";


      $terceraLetra=$frase[2]; // de esta forma guardariamos el tercer elemento de la cadena


      /**
       * diferencias entre echo y print
       */


        echo "Diferencia entre echo y print con las comillas dobles o simples <br>";
       echo " hola "," que pasa","<br>"; // echo permite utilizar la coma para separar elementos y tambien punto para concatenar
       print " hola"." que pasa"."<br>"; // print no acepta la coma y solo puede hacerse con punto, para concatenar


       echo "<br>";
       echo "<br>";
       echo " Empezamos  con las funciones mas destacadas ";
       echo "<br>";
       echo "<br>";
       echo "<br>";


       /**
        * funciones destacadas
        */
        echo "Funciones destacadas <br>";


        /**
         * strstr Devuelve desde LA PRIMERA  aparicion de la cadena ES CASE-SENSITIVE
         */
        echo strstr("que pasa gente","a"),"<br>";


        /**
         * strrchr Devuelve desde LA ULTIMA  aparicion del 1º caracter incluido ES CASE-SENSITIVE
         */
        echo strrchr("que pasA gente","a"),"<br>";


        /**
         * stristr Devuelve desde la LA ULTIMA aparicion del 1º caracter incluido NO ES CASE-SENSITIVE
         */
        echo strstr("que pAsa gente ","a"),"<br>";


        /**
         * strpos Busca la primera posicion de aparicion de la cadena a partir del desplazamiento (por defecto 0)
         */
        echo strpos("Este espacio es muy bonito","es"),"<br>";
        echo strpos("Este espacio es muy bonito","es",7),"<br>";


        /**
         * strrpos Devulve la ultima posicion de la cadena, sino la encuentra false
         */
        echo strrpos("Este espacio es muy bonito","es"),"<br>";
                // en el anterior coge la posicion 13 por que elgimos a partir de 7 en esta directamente coge la 13
        /**
         * strspn(cadena,mascara,comienzo,longitud): devuelve la longitud del segmento inicial de un string,
         * solo los caracteres dentro de la mascara CASE-SENSITIVE
         */
        echo strspn("Este espacio es muy bonito","Estela"),"<br>";
        echo strspn("Este espacio es muy bonito","el"),"<br>";// en este no sale nada no hay ningun el
        /**
         * strcmp(cad1,cad2)compara dos cadenas no  es Case-Sensitive devuelve 0 si son iguales y luego mayor o menor dependiendo de cual sea mas larga
         */
        echo strcmp("hola","Hola"),"<br>";
        /**
         * strcasecmp igual que la anterior pero no es CASE-SENSITIVE
         * con los mismos string salen distintos resultados devido al case-sensitive
         */
        echo "strcasecmp","<br>";
        echo strcasecmp("hola","Hola"),"<br>";
        /**
         * strncmp (cad1,cad2,longitud), solo compara longitud de los primeros caracter
         */


         echo "strncmp","<br>";


        echo strncmp("hola","Hola",5),"<br>";









