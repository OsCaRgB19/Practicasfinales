<?php
// Trabajaremos con el ciclo while y do..while
/* while(Expresion o Validacion){
    acciones se cumpla la expresion
} 
do{
    Sentencia o Accion
}
while(Expresion o Validacion);
*/
/* $Variable = 6;
while($Variable < 19){
    $Variable ++; //se incrementa $Variable uno en uno
    echo "El Valor de la variable es = ".$Variable."</br></br>";
}
echo "El ciclo while acaba en: ".$Variable;
*/
$Variable = 8;
do{
    echo $Variable." </br>";
    $Variable ++;
}
while($Variable <= 19);
?>