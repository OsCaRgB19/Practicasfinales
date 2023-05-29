<?php 
sesión_inicio();
informe_error( 0 );
//llamar a la conexión de la BD
incluir 'conexión.php' ;
if (isset ( $ _POST [ 'Registro' ])) {
	$ ruser = $ conex -> real_escape_string ( $ _POST [ 'usuario' ]);
$ rpass = $ conex -> real_escape_string (md5( $ _POST [ 'pass' ]));
//generar una consulta que extraiga los datos de la BD
$ consulta = " SELECT * FROM Usuarios WHERE Usuario = ' $ ruser ' y Contraseña = 'rpass' ";
if ( $ resultado = $ Cconecta -> consulta ( $ consulta )) {
	while ( $ fila = $ resultado -> fetch_array ()) {
		$ userok = $ fila [ 'Usuario' ];
		$ contraseñaok = $ fila [ 'Contraseña' ];
	}
 $ resultado -> cerrar ();

}
$ conectar -> cerrar ();
if (isset ( $ ruser ) && isset ( $ rpass )) {
	if ( $ usuario == $ usuariook && $ rpass == $ contraseñaok ) {
		$ _SESSION [ 'login' ] = VERDADERO ;
		$ _SESSION [ 'Usuario' ] = $ usuario ;
		encabezado(" ubicación:principal.php ");
	}
	más {
		$ mensaje .=" <div class='alerta alerta-peligro alerta-desechable fade show' role='alerta'>
                     <strong> ¡¡Lo siento tus datos no son correctos!! </strong> Verificalos.
                     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                     <span aria-hidden='true'>&veces;</span>
                     </botón>
                     </div> ";
	}
}
}

?>
<!DOCTYPEhtml >
< html  lang =" es " dir =" ltr " >
< cabeza >
	< juego de caracteres meta  =" utf-8 " >
	< enlace  rel =" hoja de estilo " tipo =" texto/css " href =" css/bootstrap.min.css " >
	< enlace  rel =" hoja de estilo " tipo =" texto/css " href =" css/fontello.css " >
	< enlace  rel =" hoja de estilo " tipo =" texto/css " href =" css/preloader.css " >
	< enlace  rel =" hoja de estilo " tipo =" texto/css " href =" css/main.css " >
	< enlace  href =" https://upkg.com/aos@2.3.1/dist/aos.css " rel =" hoja de estilo " >
	< guión  src =" js/jquery-3.5.1.min.js " > </ guión >
	< title > Login de Usuario </ title >
</ cabeza >
< cuerpo >
	 < div  class =" contenedor col-12 p-5 mt-5 " >

      < div  clase =" fila " >
	< div  class =" contenedor col-6 borde sombra p-2 " >
					< h4  class =" centro de texto del título de la tarjeta " > VFAST | Iniciar sesión </ h4 >
					< hora >
					< form  action =" <?php  echo  $ _SERVER [ 'PHP_SELF' ]; ?> " method =" post " >
						< div  clase =" formulario-grupo " >
							< clase div  =" grupo de entrada " >
								< label  for =" N_user " class =" form-label mt-4 ms-5 " > Escribe tu Usuario </ label >
								 < tipo de entrada  =" texto " clase =" formulario-control w-75 mx-auto " nombre =" usuario " marcador de posición =" Ingresa tus apellidos " requerido >
							</div> _ _
							< div  clase =" entrada-grupo py-2 " >
								< label  for =" Password " class =" form-label mt-4 ms-5 " > Escribe tu Contraseña </ label >
								< tipo de entrada  =" contraseña " clase =" formulario-control w-75 mx-auto "   nombre =" pase " placeholder =" Ingresa tu Contraseña " requerido >
							</div> _ _
							< div  class =" fila mx-auto text-center " >
                    < div  class =" col mx-auto " >
                        < a  href =" recuperar.html " target =" _blank " > Recuperar Contraseña </ a >
                    </div> _ _
                    < div  clase =" columna " >
                        < a  href =" index2R.php " > Registrarse </ a >
                    </div> _ _
                      < clase de entrada  =" contenedor " clase =" texto-centro " tipo =" enviar " nombre =" Registro " valor =" Iniciar " clase =" btn btn-sm btn-block btn-succes " >
                    </div> _ _
						</div> _ _
				</ artículo >
			</div> _ _
		</div> _ _
		<?php  echo mensaje ?>
	</div> _ _
< guión  src =" js/bootstrap.min.js " > </ guión >
< script  src =" js/preloader.js " > </ script >
< guión  src =" js/main.js " > </ guión >
</ cuerpo >
</html> _ _