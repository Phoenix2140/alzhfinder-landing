<?php 
	
	/**
	 * Controlador para el panel de usuario
	 */
	Class Panel{
		private $config;
		private $view;
		private $contactos;
		private $contactados;

		//construct
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
				$this->view->titulo = "Alzhfinder | Localiza a tus seres queridos donde sea - Panel";
				$this->view->baseUrl = $this->config->get("baseUrl");
				$this->view->navVar = "panel";

				/**
				 * Obtenemos los contactos, tanto los atendidos como los no atendidos
				 */
				$this->view->contactosSinAtender = $this->contactos->getContactosUn();
				$this->view->contactosAtendidos = $this->contactos->getContactosAt();

				/**
				 * Contamos los contactos NO atendidos y los contactos atendidos 
				 * por un determinado usuario (usuario actual)
				 */
				$this->view->nuevosContactos = $this->contarContactos($this->view->contactosSinAtender); //Contamos los No atendidos
				$this->view->viejosContactos = $this->contarContactos($this->view->contactosAtendidos); // Contamos los contactos atendidos
				$this->view->misAtendidos = $this->contarAtendidosPorUsuario($_SESSION["id"]);

				/**
				 * Se crea una variable (especial) que contiene una vista
				 * views/home.php, con los valores deseados
				 */
				$this->view->menu = $this->view->render($this->config->get('viewsDir').'panel/menu.php');

				$this->view->content = $this->view->render($this->config->get('viewsDir').'panel/dashboard.php');

				echo $this->view->render($this->config->get('viewsDir').'panel/main.php');

			}else{

				header('Location: '.$this->config->get('baseUrl').'/login');
			}
		}

		public function contarContactos($contactos){
			$contador = 0;

			foreach ($contactos as $contacto) {
				++$contador;
			}

			return $contador;

		}

		public function contarAtendidosPorUsuario($id){
			$contador = 0;
			foreach ($this->contactados->obtenerContactadosByUsuarioID($id) as $contactado) {
				++$contador;
			}
			return $contador;
		}
	}

 ?>