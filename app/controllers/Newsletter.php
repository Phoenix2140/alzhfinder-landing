<?php 

	/**
	 * Controlador para las inscripciones de newsletter
	 */
	Class Newsletter{
		private $config;
		private $news;

		public function __construct($config){
			$this->config = $config;
			
			require_once($this->config->get('modelsDir').'News.php');
			$this->news = new News($this->config);
		}

		public function ingresarEmail($post){
			if($this->verificarEmail($post) && !$this->verificarExistenciaEmail($post)){
				
				$this->news->crearEmail($post["email"]);

				echo json_encode(array('response' => true));
			}else{
				echo json_encode(array('response' => false));
			}
		}

		public function verificarEmail($post){
			if (isset($post["email"]) && $post["email"] != "") {
				if (filter_var($post["email"], FILTER_VALIDATE_EMAIL)) {
					return true;
				} else {
					return false;
				}
				
			} else {
				return false;
			}
		}

		public function verificarExistenciaEmail($post){
			$email_lower = strtolower($post["email"]);
			foreach ($this->news->getEmails() as $email) {
				if($email_lower == strtolower($email["email"])){
					return true;
				}
			}

			return false;
		}

	}
 ?>