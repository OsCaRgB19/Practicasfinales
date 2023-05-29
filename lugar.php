








<?php  include " conexión.php ";
// Recuperar e insertar datos        
 si (isset ( $ _POST [ 'btn' ])) {
    $ nombre_lugar = $ conex -> real_escape_string ( $ _POST [ 'nombre_lugar' ]);
    $ descripcion = $ conex -> real_escape_string ( $ _POST [ 'descripcion' ]);
    $ telefono_lugar = $ conex -> real_escape_string ( $ _POST [ 'telefono_lugar' ]);
    $ email_lugar = $ conex -> real_escape_string ( $ _POST [ 'email_lugar' ]);
    $ Facebook = $ conex -> real_escape_string ( $ _POST [ 'Facebook' ]);
    $ horario = $ conex -> real_escape_string ( $ _POST [ 'horario' ]);
    if ( $ nombre_lugar =="" || $ descripcion =="" || $ telefono_lugar =="" || $ email_lugar =="" || $ Facebook =="" || $ horario ==""){
        $ alerta =" ALGUNO DE LOS DATOS ESTAN VACIOS ";
    }
    más {
 $ lugar =" INSERTAR EN practica_3.lugar(nombre_lugar, descripcion, telefono_lugar, email_lugar, Facebook, horario) VALORES(' $ nombre_lugar ', ' $ descripcion ', ' $ telefono_lugar ', ' $ email_lugar ', ' $ Facebook ', ' $ horario ') ";
 $ lugar = $ conex -> consulta ( $ lugar );
 si ( $ lugar > 0 ){   
    echo " registro exitoso ";
}
 más {
    echo " error al registrador ";
}
    }
}
?>