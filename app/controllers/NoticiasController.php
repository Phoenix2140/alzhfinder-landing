<?php 
	/**
	 * Controlador para el panel de noticias
	 */
	Class NoticiasController{
		private $config;
		private $view;
		private $noticias;
		private $contactos;
		private $usuarios;


		public function __construct($config){
			$this->config = $config;

			require_once($this->config->get('baseDir').'Template.php');
			$this->view = new Template();

			require_once($this->config->get('modelsDir').'Noticias.php');
			$this->noticias = new Noticias($this->config);

			require_once($this->config->get('modelsDir').'Contactos.php');
			$this->contactos = new Contactos($this->config);

			require_once($this->config->get('modelsDir').'Usuarios.php');
			$this->usuarios = new Usuarios($this->config);
		}

		public function indexAction(){
			if(isset($_SESSION["id"])){
				/**
				 * Se crean variables (titulo y mensaje) en la vista.
				 */
				$this->view->titulo = "Alzhfinder | Localiza a tus seres queridos donde sea";
				$this->view->baseUrl = $this->config->get("baseUrl");
				$this->view->navVar = "home";

				/**
				 * Obtenemos los nuevos contactos para incluir en el área de notificación (campanita)
				 */
				$this->view->nuevosContactos = $this->contarContactos($this->contactos->getContactosUn()); //Contamos los No atendidos

				/**
				 * Obtenemos las noticias de orden descendente y los nombres 
				 * de usuarios son guardados en un array
				 */
				$this->view->noticias = $this->noticias->getNoticiasDSC();
				$this->view->nombresUsuarios = $this->getNombreUsuarios();

				/**
				 * Cargamos las partes de las vistas (menu y cuerpo)
				 */
				$this->view->menu = $this->view->render($this->config->get('viewsDir').'panel/menu.php');

				$this->view->content = $this->view->render($this->config->get('viewsDir').'panel/noticias.php');

				/**
				 * Juntamos todas las partes del template y la mostramos
				 */
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

		public function getNombreUsuarios(){
			$nombres = array();
			
			foreach ($this->usuarios as $user) {
				$nombres[$user["id_usuarios"]] = utf8_encode($user["nombre"]);
			}

			return $nombres;

		}
	}
 ?>