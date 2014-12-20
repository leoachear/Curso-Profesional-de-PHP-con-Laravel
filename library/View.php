<?php

	class View extends Response
	{
		protected $template;
		protected $vars = array();
	
		public function __construct($template, $vars = array())
		{
			$this->template = $template;
			$this->vars = $vars;
		}

		public function getTemplate()
		{
			return $this->template;
		}

		public function getVars()
		{
			return $this->vars;
		}

		public function execute()
		{
			$template = $this->getTemplate();
			$vars = $this->getVars();

			//con esto soluciono lo que está explicado más abajo.
			call_user_func(function () use ($template, $vars){
				extract($vars);

				//lo que hace es almacenar toda la salida de texto, y despues se puede mandar a una variable.
				ob_start();

				require "views/$template.tpl.php";

				$tpl_content = ob_get_clean();

				require "views/layout.tpl.php";

			});

			/*
			* 
			* Si dejo todo esto afuera como estaba, se rompe el modelo de MVC, ya que PHP lo que hace al 
			* hacer un require, es "pegar" el texto del archivo requerido, y ese código tendría acceso
			* a la clase.

			* extract($vars);
			* require "views/$template.tpl.php";
			*/			
		}
	}