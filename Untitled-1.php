<?php
/* foreach(expresion as $Variable){
    acciones que se tardan dentro del bucle
} 
*/
$Arreglo = ["ABCDEFGHIJKLMNÑOPQRS",28,'N',9.3,true,false,6];
echo "<pre>\n";
var_dump($Arreglo);
echo "</pre>\n";
foreach($Arreglo as $Recorrido){
    echo "<p>$Recorrido</p>\n";
}
echo "Termina el ciclo <br>";
?>