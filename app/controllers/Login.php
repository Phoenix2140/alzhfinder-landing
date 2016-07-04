<?php 
	
	Class Login{
		private $config;
		private $view;
		private $users;
		private $news;

		//Constructor
		public function __construct($config){
			//Obtenemos la configuración
			$this->config = $config;

			/**
			 * Obtenemos el la clase template y el modelo Usuarios 
			 */
			require_once($config->get('baseDir').'Template.php');
			$this->view = new Template();

			require_once($this->config->get('modelsDir').'Usuarios.php');
			$this->users = new Usuarios($this->config);

			require_once($this->config->get('modelsDir').'News.php');
			$this->news = new News($this->config);
		}

		public function indexAction(){
			/**
			 * Se crean las variables para el título, la dirección base y el navbar
			 */
			$this->view->titulo = "Alzhfinder | Localiza a tus seres queridos donde sea";
			$this->view->baseUrl = $this->config->get("baseUrl");
			$this->view->navVar = "";

			/**
			 * Agregamos los bloques a la vista
			 */
			$this->view->menu = $this->view->render($this->config->get('viewsDir').'landing/menu.php');
			$this->view->content = $this->view->render($this->config->get('viewsDir').'landing/login.php');

			echo $this->view->render($this->config->get('viewsDir').'main.php');

		}

		public function login($post){
			if($this->verificarDatos($post)){
				if ($this->comprobarUsuario($post)) {

					echo json_encode(array('response' => true));
				} else {
					
					echo json_encode(array('response' => false));
				}
				
			}else{
				echo json_encode(array('response' => false));
			}
		}

		public function verificarDatos($post){
			if(isset($post["usuario"]) && isset($post["pass"])){

				return true;
			}else{

				return false;
			}
		}

		public function comprobarUsuario($post){
			$user = $this->users->getUsuarioLogin( $post["usuario"], $post["pass"]);
			
			if(isset($user["id_usuarios"])){

				$_SESSION["id"] = $user["id_usuarios"];
				$_SESSION["nombre"] = utf8_encode($user["nombre"]);
				$_SESSION["email"] = $user["email"];

				return true;
			}else{

				return false;
			}
		}

	}
 ?>