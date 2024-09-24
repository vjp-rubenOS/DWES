<?php

/**
 * para sacar por pantall
 */
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
printf("%s es un modulos del %s curso  de %s <br> ", $modulo, 2, $ciclo);

/**
 * funcion para sacar el tipo de la variable
 */
$num = 2;
echo gettype($num), "<br>";

/**
 * funcion para comprobar que una funcion es del tipo dado 
 */
echo is_int($num), "<br>";
/**
 * funcion que da el tipo y el valor de una variable interesante para arrays
 */
echo var_dump($num), "<br>";

/**
 * comillas dobles interpreta lo que hay dentro
 * comilla simple no interpreta lo de dentro
 */
echo "$ciclo <br>";
echo '$ciclo <br>';

/**
 * Operadores combinados : -=,+=,*=,/=,.=,%=
 */


$a = 3;
$a += 5;
$a *= 2;
echo $a . "<br>";

$b = "hola";
$b .= " que pasa";

echo $b . "<br>";
/**
 * con htmlspecialchars podemos salvar las etiquetas de html
 */
echo htmlspecialchars("<br>");
echo "<br>";

/**
 * para dar valor a una constante se usa define y no =
 */
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
    $i = 0;
    while ($i <= 5) {
        echo "<li>$i</li>";  // Añadimos <br> para saltar de línea
        $i++;
    }

    echo "<br>";

    /**
     * do while
     */
    $i = 5;
    do {
        echo "<ul>$i</ul>";  // Añadimos <br> para saltar de línea
        $i--;
    } while ($i >= 0);

    /**
     * for
     */
    for($i=0;$i<=5;$i++){
        print " hola ".$i;

    }
    echo"<br>";

    /**
     * for each
     * el primer ejemplo es sin key (clave)
     * el segundo ejemplo es con el key (clave)
     */

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
      $frase = "hola ";
      echo $frase[2]."<br>";

      $terceraLetra=$frase[2]; // de esta forma guardariamos el tercer elemento de la cadena

      /**
       * diferencias entre echo y print
       */

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
    

