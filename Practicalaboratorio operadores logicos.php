<?php
$ Valor1 = 50 ;
$ Valor2 = 70 ;
$ Valor3 = 15 ;
$ Persona = " Ambos generos ";
$ letra = " b ";
// Sentencia si operadores relacionales u operadores logicos
 /* si(Condición){
     Codigo o accion a realizar en el navegador si se cumple la condicion
    }
    demás{
        si la accion es contraria al if dentro de las llaves la accion a ejecutarse
    }
*/
// este si ocupará operadores relacionales
/*si($Valor1 >= $Valor2){
    echo "Verdadero";
}
demás{
    echo "Falso";
}
*/
  /*
  Comparando el valor de la variable con un string
  if($Persona == 'Hombre'){
    echo "Como el genero de la variable persona es Hombre se llamara oscar Garniva <br>";
    }
    demás{
        echo"Como no se cumple el if entonces el genero no es hombre por lo tanto no puedo darle un nombre";
    }
  */
  /*
  si ($Valor1 > $Valor2 o $Valor1 > $Valor3){
    echo "El valor de: " .$Valor1."no es mayor a: " .$Valor2."pero si mayor a :".$Valor3;
  }
  si no ($Valor2 >= $Valor1 && $Valor2 >= $Valor3){
    echo "El valor de:".$Valor2."es mayor a:".$Valor1."y mayor a:".$Valor3;
  }
  otra cosa si ($Valor3 >= $Valor1 && $Valor3 >= $Valor2){
    echo "El valor de:".$Valor3."es mayor a:".$Valor1."y mayor a:".$Valor2;
  }
  demás{
    echo "No se cumple ninguna de las Condiciones";
  }
  */
  if ( $ letra == 'a' || $ letra == 'e' || $ letra == 'i' || $ letra == 'o' || $ letra == 'u' ){
    echo " El valor de la letra variable ". $ letra ." es una voz ";
  }
  más {
    echo " El valor de la letra variable es una consonante ";
  }
?>