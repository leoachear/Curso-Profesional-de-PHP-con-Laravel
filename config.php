<?php

	//Para loguear errores
	ini_set('display_errors', true);
	error_reporting(E_ALL);

	//en caso que sea un ambiente productivo conviene poner:
	//ini_set('display_errors', false);
	//esto es para que no tire los errores en el navegador.  Por un tema de que queda "feo" y además por un tema
	//de seguridad, ya que hay errores que tiran la ruta de los archivos u otra información.