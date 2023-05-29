<?php
// La salida de datos sera true el valor es tipo string y false de lo contrario
$ Valores = matriz ( falso , verdadero , nulo , 90 , '44' , 13 , '70.2' , '' , '' , '4' , 4 );
foreach ( $ Valores  como  $ Valor ){
    echo " Es una cadena( ";
    var_export( $ Valor );
    eco " ) = ";
    echo var_dump(es_cadena( $ Valor ));
    echo " <br><br> ";
}
$ mensaje = " Esto es una cadena de caracteres ";
if (es_cadena( $ mensaje )){
    echo  $ mensaje ." <br> ";
    var_dump( $ mensaje );
}
más {
    echo " El mensaje no es una cadena es: ". $ mensaje ;
}
?>