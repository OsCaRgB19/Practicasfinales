<?php
// Declarar una variable $ + identificador + asignacion del tipo de dato
$ Variable = 15 ;
$ Mensaje = " El valor de la Variable es: ";
$ Numero1 = 2 ; $ Numero2 = 87 ; $ Numero3 = 65 ;
$ Suma = $ Número1 + $ Número2 + $ Número3 ;
$ Resta = $ Numero1 - $ Numero2 - $ Numero3 ;
$ Multiplicacion = $ Numero1 * $ Numero2 * $ Numero3 ;
$ División = $ Número1 / $ Número2 / $ Número3 ;
$ radio = 5 ;
definir ( 'Pi' , '3.1416' );
$ Decremento = 6 ;
$ Incremento = 18 ;
echo " La suma de ". $ Numero1 ." + ". $ Numero2 ." + ". $ Numero3 . " es: ". $ suma ." <br> ";
echo " La resta de ". $ Numero1 ." - ". $ Numero2 ." - ". $ Numero3 . " es: ". $ Resta ." <br> ";
echo " La multiplicación de ". $ Numero1 ." * ". $ Numero2 ." * ". $ Numero3 . " es: ". $ Multiplicacion ." <br> ";
echo " La división de ". $ Numero1 ." / ". $ Numero2 ." / ". $ Numero3 . " es: ". $ División ." <br> ";
// echo var_dump(constant('Hora))."<br>";
// echo var_dump($Suma);
// echo $Mensaje, $Variable;
// area de un circulo
$ Ejemplo = Pi * $ Radio * $ Radio ;
$ Mensaje2 = " El Area del circulo con la radio de: ". $ Radio ." por el valor de Pi que es: ". Pi ." el resultado es: ". $ Ejemplo ;
echo  $ Mensaje2 ." <br> ";
echo var_dump(constante( 'Pi' ))." <br> ";
echo " El valor de Descremento es: ".-- $ Decremento ." <br> ";
echo " El valor de Incremento es: ".++ $ Incremento ." <br> ";
?><?php
/* Usando las sentencias de flujo if y else en su metodo alterno utilizar constantes, variables, operadores aritmeticos, logicos y de relacion
    Ejercicio : Calcular la edad con años, meses, dias y horas utilizando un año de Nacimiento e Indicando si es mayor o menor de edad imprimiendo los datos
    como años, meses, dias y horas
*/
define( 'Tope' , 2023 );
define( 'Meses' , 12 );
define( 'Dias' , 364 );
define( 'Horas' , 24 );
$ Nacimiento = 2004 ;
$ Mayoría = 18 ;
$ Edad = Tope - $ Nacimiento ;
$ Meses = $ Edad * Meses ;
$ Dias = $ Edad * Dias ;
$ Horas = Días * Horas * $ Edad ;
if (es_numeric( $ Nacimiento ) && es_numeric( $ Mayoria ) && es_numeric( $ Edad ) && es_numeric( $ Meses ) && es_numeric( $ Dias ) && es_numeric( $ Horas )):
    si ( $ Edad >= $ Mayoria ):   
        echo " Eres Mayor de Edad porque ";
        echo " tienes: ". $ Edad ." años de vida</br> ";
        echo " hijo: ". $ Meses ." meses de vida</br> ";
        echo " hijo: ". $ Dias ." dias de vida</br> ";
        echo " hijo: ". $ Horas ." horas de vida</br> ";  
    más :
        echo " Eres Menor de Edad porque ";
        echo " tienes: ". $ Edad ." años de vida</br> ";
        echo " hijo: ". $ Meses ." meses de vida</br> ";
        echo " hijo: ". $ Dias ." dias de vida</br> ";
        echo " hijo: ". $ Horas ." horas de vida</br> ";
     endif ;
        más :
        echo " Alguno de los valores asignados no son valores numericos ";
    
    endif ;
?>