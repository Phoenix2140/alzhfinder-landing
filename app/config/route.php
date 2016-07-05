<?php 
	/**
	 * Se llama a la clase Router para tratar las rutas
	 * y el tipo de Método que utiliza (POST, GET u otro)
	 */
	require_once($config->get('baseDir').'Router.php');
	$ruta = new Router();

	/**
	 * Incluimos los controladores a utilizar
	 */
	require_once($config->get('controllersDir').'Home.php');
	$home = new Home($config);

	require_once($config->get('controllersDir').'404.php');
	$error404 = new NotFound($config);

	require_once($config->get('controllersDir').'Faq.php');
	$faq = new Faq($config);

	require_once($config->get('controllersDir').'Acerca.php');
	$acerca = new Acerca($config);

	require_once($config->get('controllersDir').'Contacto.php');
	$contacto = new Contacto($config);

	require_once($config->get('controllersDir').'Newsletter.php');
	$newsletter = new Newsletter($config);

	require_once($config->get('controllersDir').'Login.php');
	$login = new Login($config);

	require_once($config->get('controllersDir').'Panel.php');
	$panel = new Panel($config);

	require_once($config->get('controllersDir').'NoticiasController.php');
	$noticias = new NoticiasController($config);

	require_once($config->get('controllersDir').'ContactosController.php');
	$contactos = new ContactosController($config);

	
	/**
	 * Se separan las rutas por los métodos GET y POST
	 * que son los métodos más utilizados, se pueden 
	 * incorporar otros según se requiera.
	 */
	if($ruta->get() == 'GET'){

		/**
		 * Se obtiene el enlace de la dirección web y se divide
		 * para poder tratarlas con un switch.
		 *
		 * Por ejemplo si la ruta es http://aplicacion.com/inicio
		 * el post procesado de ruta lo dejaría así:
		 * $enlace[0] = '';
		 * $enlace[1] = 'inicio';
		 *
		 * La ruta raíz de la página por defecto es vacía ''.
		 *
		 * Puedes anidar switches en caso que la ruta tenga 
		 * subdirectorios, por ejemplo http://aplicacion.com/usuario/3
		 * $enlace[0] = "";
		 * $enlace[1] = "usuario";
		 * $enlace[2] = "3";
		 */
		$enlace = $ruta->enlace();

		/**
		 * El Switch utiliza una accion dependiendo de la ruta.
		 */
		switch ($enlace[$config->get('deep')]){
			case '':
				
				$home->indexAction();
				break; // Se finaliza el switch

			case 'acerca':
				
				$acerca->indexAction();
				break; // Se finaliza el switch

			case 'faq':
				
				$faq->indexAction();
				break; // Se finaliza el switch

			case 'contacto':
				
				$contacto->indexAction();
				break; // Se finaliza el switch

			case 'login':
				
				$login->indexAction();
				break;

			case 'panel':
				/**
				 * Si panel tiene un submenu se invoca el switch,
				 * sino abre invoca a indexAction()
				 */
				if(isset($enlace[$config->get('deep')+1])){
					switch ($enlace[$config->get('deep')+1]) {
						case 'noticias':
							
							$noticias->indexAction();
							break;
						case 'contactos':
							
							$contactos->indexAction();
							break;
						
						default:
							$error404->indexAction();
							break;
					}
				}else{
					$panel->indexAction();
				}
				break;
			
			default:
				$error404->indexAction();
				break;
		}

	}elseif($ruta->get() == 'POST'){
		/**
		 * No está implementado, pero es similar a los pasos del
		 * Método GET con el switch
		 */
		$enlace = $ruta->enlace();
		switch ($enlace[$config->get('deep')]) {
			case 'contacto':
				
				$contacto->createContact($_POST);
				break;

			case 'news':
				//Crear Controlador News
				$newsletter->ingresarEmail($_POST);
				
				break;

			case 'login':
				$login->login($_POST);
				break;

			case 'panel':
				if(isset($enlace[$config->get('deep')+1])){
					switch ($enlace[$config->get('deep')+1]) {
						case 'noticias':
							
							$noticias->enviarNoticia($_POST);
							break;
						case 'contactos':
							
							$contactos->indexAction();
							break;
						
						default:
							$error404->indexAction();
							break;
					}
				}
				break;
			default:
				echo json_encode(array('response' => false));
				break;
		}
	}else{
		/**
		 * Pueden agregarse más Métodos
		 */
		$error404->indexAction();
	}
 ?>