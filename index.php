<?php
	
	/*
	* El frontend controller se encarga de configurar nuestra aplicacion
	*/
	require 'config.php';
	require 'helpers.php';

	//Library
	require 'library/Request.php';
	require 'library/Inflector.php';
	require 'library/Response.php';
	require 'library/View.php';

	/*if (empty($_GET['url']))
	{
		$_GET['url'] = "home";
	}*/
	//Llamada al controlador indicado
	//controller($_GET['url']);

	if (empty($_GET['url']))
	{
		$url = "";
	}
	else
	{
		$url = $_GET['url'];
	}

	$request = new Request($url);
	$request->execute();

	var_dump($request->getParams());

	//De esta forma se llama a un método del objeto.  var_dump es para debbug.
	//var_dump($request->getUrl());

//	var_dump($_GET);

