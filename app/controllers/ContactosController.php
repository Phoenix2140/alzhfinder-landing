<?php 
	/**
	 * Controlador de contactos del panel
	 */
	Class ContactosController{
		private $config;
		private $view;
		private $contactos;
		private $contactados;

		public function __construct($config){
			$this->config = $config;

			require_once($this->config->get('baseDir').'Template.php');
			$this->view = new Template();

			require_once($this->config->get('modelsDir').'Contactos.php');
			$this->contactos = new Contactos($this->config);

			require_once($this->config->get('modelsDir').'Contactados.php');
			$this->contactados = new Contactados($this->config);

		}

		public function indexAction(){
			if(isset($_SESSION["id"])){
				/**
				 * Se crean variables (titulo y mensaje) en la vista.
				 */
				$this->view->titulo = "Alzhfinder | Localiza a tus seres queridos donde sea";
				$this->view->baseUrl = $this->config->get("baseUrl");
				$this->view->navBar = "contactos";


				/**
				 * Cargamos las partes de las vistas (menu y cuerpo)
				 */
				$this->view->menu = $this->view->render($this->config->get('viewsDir').'panel/menu.php');

				$this->view->content = $this->view->render($this->config->get('viewsDir').'panel/contactos.php');

				/**
				 * Juntamos todas las partes del template y la mostramos
				 */
				echo $this->view->render($this->config->get('viewsDir').'panel/main.php');
			}else{
				header('Location: '.$this->config->get('baseUrl').'/login');
			}
		}
	}
 ?>