<?php
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