<?php
// una practica que calcule el promedio de 6 notas o calificando y verificando que los valores sean numericos y posteriormente
// indicar si esta aprobado o reprobado segun el valor por el promedio
$ Calificacion1 = 9 ;
$ Calificacion2 = 7 ;
$ Calificacion3 = 7 ;
$ Calificacion4 = 9 ;
$ Calificacion5 = 8 ;
$ Calificacion6 = 7 ;
$ mínimo = 7 ;
/*
if(is_numeric($Calificacion1) && is_numeric($Calificacion2) && is_numeric($Calificacion3) && is_numeric($Calificacion4) && is_numeric($Calificacion5) && is_numeric($Calificacion6)){
    $Promedio = ($Calificacion1+$Calificacion2+$Calificacion3+$Calificacion4+$Calificacion5+$Calificacion6)/6;
    if($Promedio >= $minimo){
        echo "<br><br> Tu Promedio es de: ".$Promedio." por lo tanto estas Aprobado";
    }
    demás{
        echo "<br><br> Tu Promedio es de: ".$Promedio." por lo tanto estas Reprobado";
    }
}
demás{
    $mensaje = "Alguno de los valores contenidos en las calificaciones no corresponde a un valor numerico";
    echo $mensaje;
}
*/
if (es_numeric( $ Calificacion1 )){
    $ Calificacion1 = $ Calificacion1 ;
}
más {
    echo " El valor de la calificacion 1 no es un numero ";
}
if (es_numeric( $ Calificacion2 )){
    $ Calificacion2 = $ Calificacion2 ;
}
más {
    echo " El valor de la calificacion 2 no es un numero ";
}
if (es_numeric( $ Calificacion3 )){
    $ Calificacion3 = $ Calificacion3 ;
}
más {
    echo " El valor de la calificacion 3 no es un numero ";
}
if (es_numeric( $ Calificacion4 )){
    $ Calificacion4 = $ Calificacion4 ;
}
más {
    echo " El valor de la calificacion 4 no es un numero ";
}
if (es_numeric( $ Calificacion5 )){
    $ Calificacion5 = $ Calificacion5 ;
}
más {
    echo " El valor de la calificacion 5 no es un numero ";
}
if (es_numeric( $ Calificacion5 )){
    $ Calificacion5 = $ Calificacion5 ;
}
más {
    echo " El valor de la calificacion 5 no es un numero ";
}
if (es_numeric( $ Calificacion6 )){
    $ Calificacion6 = $ Calificacion6 ;
}
más {
    echo " El valor de la calificacion 6 no es un numero ";
}
$ Promedio = ( $ Calificacion1 + $ Calificacion2 + $ Calificacion3 + $ Calificacion4 + $ Calificacion5 + $ Calificacion6 )/ 6 ;
if ( $ promedio >= $ minimo ){
    echo " Felicidades Aprobado: ". $ Promedio ."";
}
más {
    echo " Wstas Reprobado: ". $ Promedio ."";
}
?>