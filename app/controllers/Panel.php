<?php 
	
	/**
	 * Controlador para el panel de usuario
	 */
	Class Panel{
		private $config;
		private $view;

		/**
		 * Models
		 */
		private $contactos;
		private $contactados;
		private $news;
		private $noticias;

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

			require_once($this->config->get('modelsDir').'News.php');
			$this->news = new News($this->config);

			require_once($this->config->get('modelsDir').'Noticias.php');
			$this->noticias = new Noticias($this->config);

		}

		public function indexAction(){

			if(isset($_SESSION["id"])){
				/**
				 * Se crean variables (titulo y mensaje) en la vista.
				 */
				$this->view->titulo = "Alzhfinder | Localiza a tus seres queridos donde sea - Panel";
				$this->view->baseUrl = $this->config->get("baseUrl");
				$this->view->navBar = "panel";

				/**
				 * Obtenemos los contactos, tanto los atendidos como los no atendidos
				 */
				$this->view->contactosSinAtender = $this->contactos->getContactosUn();
				$this->view->contactosAtendidos = $this->contactos->getContactosAt();

				/**
				 * Obtenemos las ultimas noticias, los últimos inscritos y los últimos
				 * contactos que se han atendido
				 */
				$this->view->ultimasNoticias = $this->noticias->getUltimasNoticias();
				$this->view->ultimosInscritos = $this->news->getLast();
				$this->view->ultimosAtendidos = $this->contactados->obtenerUltimosContactados();


				/**
				 * Contamos los contactos NO atendidos y los contactos atendidos 
				 * por un determinado usuario (usuario actual)
				 */
				$this->view->nuevosContactos = $this->contarDB($this->view->contactosSinAtender); //Contamos los No atendidos
				$this->view->viejosContactos = $this->contarDB($this->view->contactosAtendidos); // Contamos los contactos atendidos
				$this->view->misAtendidos = $this->contarAtendidosPorUsuario($_SESSION["id"]);

				$this->view->suscritosNewsletter = $this->contarDB($this->news->getEmails());
				$this->view->misNoticias = $this->contarDB($this->noticias->getNoticiasUserID($_SESSION["id"]));
				$this->view->noticiasEnviadas = $this->contarDB($this->noticias->getNoticias());

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

		public function contarDB($contactos){
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