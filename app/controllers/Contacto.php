<?php 
	
	class Contacto{
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
			
			/**
			 * Se crean variables (titulo y mensaje) en la vista.
			 */
			$this->view->titulo = "Alzhfinder | Localiza a tus seres queridos donde sea";
			$this->view->baseUrl = $this->config->get("baseUrl");
			$this->view->navVar = "contacto";

			/**
			 * Se crea una variable (especial) que contiene una vista
			 * views/home.php, con los valores deseados
			 */
			$this->view->menu = $this->view->render($this->config->get('viewsDir').'landing/menu.php');

			$this->view->content = $this->view->render($this->config->get('viewsDir').'landing/contacto.php');

			/**
			 * Luego se genera y junta toda la vista en 
			 * la "vista padre" views/header.php, esta vista contiene
			 * en su interior todas las variables creadas anteriormente
			 * incluso la vista parcial home.php
			 */
			echo $this->view->render($this->config->get('viewsDir').'main.php');

		}

		public function createContact($post){
			if($this->validateContact($post)){


				echo json_encode(array('result' => true));
			}else{
				echo json_encode(array('result' => false));
			}
		}

		public function validateContact($post){
			if (isset($post["nombre"]) && isset($post["email"]) && isset($post["fono"]) && isset($post["mensaje"])) {
				return true;
			} else {
				return false;
			}
			
		}
	}
 ?>