<?php 
	/**
	 * Controlador para envío de correos
	 */
	Class EmailController{
		private $config;
		private $news;

		public function __construct($config){
			$this->config = $config;

			require_once($this->config->get('modelsDir').'News.php');
			$this->news = new News($this->config);
		}

		public function enviarCorreo($email, $titulo, $mensaje){
			$destinatarios = $this->obtenerListaCorreos();

			$this->sendMail($email, $destinatarios, $titulo, $mensaje);

		}

		private function obtenerListaCorreos(){
			$emails = "";

			foreach ($this->news->getEmails() as $email) {
				$emails .= ", ".$email["email"];
			}

			return $emails;
		}

		private function sendMail($email, $destinatarios, $titulo, $mensaje){
			exec("curl -s --user 'api:key-1xi0nej58hsrw2-tmqlmnm7a5pdboan7' https://api.mailgun.net/v2/sandboxf27d9c39599347339dd873e95715e6b1.mailgun.org/messages \
            -F from='".$email."' -F to='".$destinatarios."' -F subject='".$titulo."' -F text='Tu correo no soporta HTML' --form-string html='".$mensaje."'");
		}




	}
 ?>