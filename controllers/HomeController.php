<?php

/*
	$confidencial = "esto es privado";
	$language = "PHP";
	$titulo = 'MejorandoPHP';

	view('home', compact('language','titulo'));
	//La de arriba es una forma mejor de hacer lo de abajo.
	//view('view', ['language' => $language, 'titulo' => $titulo]);


*/

	class HomeController
	{
		public function indexAction()
		{
			$view = new View('home', ['titulo' => 'MejorandoPHP']);

			$view->execute();
		}
	}