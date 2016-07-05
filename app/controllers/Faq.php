<?php 

	class Faq{
		private $config;
		private $view;

		/**
		 * Constructor del controlador que recibe como
		 * parámetro la configuración
		 */
		public function __construct($config){
			/**
			 * Asigna la configuración recibida en la variable 
			 * privada $config
			 */
			$this->config = $config;

			/**
			 * Carga la clase template y se crea un objeto tipo template
			 * para trabajar con las vistas
			 */
			require_once($this->config->get('baseDir').'Template.php');
			$this->view = new Template();
		}

		public function indexAction(){

			if(isset($_SESSION["id"])){
				header('Location: '.$this->config->get('baseUrl').'/panel');
			}else{
				/**
				 * Se crean variables (titulo y mensaje) en la vista.
				 */
				$this->view->titulo = "Alzhfinder | Localiza a tus seres queridos donde sea";
				$this->view->baseUrl = $this->config->get("baseUrl");
				$this->view->navVar = "faq";

				/**
				 * Se crea una variable (especial) que contiene una vista
				 * views/home.php, con los valores deseados
				 */
				$this->view->menu = $this->view->render($this->config->get('viewsDir').'landing/menu.php');

				$this->view->content = $this->view->render($this->config->get('viewsDir').'landing/faq.php');

				/**
				 * Luego se genera y junta toda la vista en 
				 * la "vista padre" views/header.php, esta vista contiene
				 * en su interior todas las variables creadas anteriormente
				 * incluso la vista parcial home.php
				 */
				echo $this->view->render($this->config->get('viewsDir').'main.php');
			}

		}
	}
 ?>