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

			case 'test':
				var_dump(getenv(OPENSHIFT_MYSQL_DB_HOST));

				var_dump($OPENSHIFT_MYSQL_DB_HOST);

				var_dump('$OPENSHIFT_MYSQL_DB_HOST');
				
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