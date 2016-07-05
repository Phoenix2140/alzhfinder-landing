<?php 
	/**
	 * Controlador de contactos del panel
	 */
	Class ContactosController{
		private $config;
		private $view;
		private $contactos;
		private $contactados;
		private $email;

		public function __construct($config){
			$this->config = $config;

			require_once($this->config->get('baseDir').'Template.php');
			$this->view = new Template();

			require_once($this->config->get('modelsDir').'Contactos.php');
			$this->contactos = new Contactos($this->config);

			require_once($this->config->get('modelsDir').'Contactados.php');
			$this->contactados = new Contactados($this->config);

			require_once($this->config->get('controllersDir').'EmailController.php');
			$this->email = new EmailController($this->config);

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
				 * Obtenemos los nuevos contactos para incluir en el área de notificación (campanita)
				 */
				$this->view->nuevosContactos = $this->contarContactos($this->contactos->getContactosUn()); //Contamos los No atendidos

				/**
				 * Obtenemos los contactos
				 */
				$this->view->listaContactos = $this->contactos->getContactosUn();
				$this->view->listaContactados = $this->contactos->getContactosAt();


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

		public function contactar($post){
			if (isset($_SESSION["id"])) {
				if($this->verificarDatos($post)){
					if(!$this->comprobarRespuesta($post["contacto"])){
						/**
						 * Agregar el contacto en la DDBB
						 */
						$this->contactados->crearContactado( $post["titulo"], $post["mensaje"], $post["contacto"], $_SESSION["id"]);

						/**
						 * Enviar Email
						 */
						$this->email->correoSimple($_SESSION["email"], $post["email"], $post["titulo"], $post["mensaje"]);
						
						/**
						 * Marcar el contacto como "contactado"
						 */
						$this->contactos->updateContactoID($post["contacto"]);

						echo json_encode(array('response' => true));

					}else{
						echo json_encode(array('response' => false));	
					}
					
				}else{
					echo json_encode(array('response' => false));
				}
			}else{
				echo json_encode(array('response' => false));
			}
		}

		public function verificarDatos($post){
			if( (isset($post["contacto"]) && !is_null($post["contacto"])) && 
				(isset($post["titulo"]) && !is_null($post["titulo"])) && 
				(isset($post["mensaje"]) && !is_null($post["mensaje"]) &&
					( isset($post["email"])&& !is_null($post["email"])))){

				return true;
			}else{

				return false;
			}
		}

		public function contarContactos($contactos){
			$contador = 0;

			foreach ($contactos as $contacto) {
				++$contador;
			}

			return $contador;
		}

		public function comprobarRespuesta($id){
			$contact = $this->contactos->getContactoID($id);
			if($contact["contactado"]){
				return true;
			}else{
				return false;
			}
		}
	}
 ?>