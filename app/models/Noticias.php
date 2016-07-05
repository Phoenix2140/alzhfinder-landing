<?php 
	/**
	 * Modelo para la base de datos noticias
	 * Estructura de la base de datos:
	 *		id_noticias			INT
	 * 		titulo				VARCHAR(45)
	 *		mensaje				TEXT
	 *		id_usuarios			TINYINT
	 */

	Class Noticias{
		private $db;

		public function __construct($config){
			$this->db = new Database($config);
		}

		/**
		 * Creamos la noticia y retornamos el ID de la noticia creada
		 */
		public function crearNoticia($titulo, $mensaje, $usuario){
			$this->db->query("INSERT INTO noticias (titulo, mensaje, id_usuarios) 
				VALUES (:titulo, :mensaje, :usuario)");

			$this->db->bind(':titulo', $titulo);
			$this->db->bind(':mensaje', $mensaje);
			$this->db->bind(':usuario', $usuario);

			$this->db->execute();

			return $this->db->lastInsertId();
		}

		/**
		 * Obtenemos todas las noticias
		 */
		public function getNoticias(){
			$this->db->query("SELECT * FROM noticias");

			return $this->db->resultSet();
		}

		/**
		 * Obtenemos las noticias opor orden Descendente, 
		 * para mostrar lo último primero
		 */
		public function getNoticiasDSC(){
			$this->db->query("SELECT * FROM noticias ORDER BY id_noticias DESC");

			return $this->db->resultSet();
		}

		/**
		 * Obtenemos las últimas 5 noticias opor orden Descendente, 
		 * para mostrar lo último primero
		 */
		public function getUltimasNoticias(){
			$this->db->query("SELECT * FROM noticias ORDER BY id_noticias DESC LIMIT 5");

			return $this->db->resultSet();
		}

		/**
		 * Obtenemos una noticia por su ID
		 */
		public function getNoticiaID($id){
			$this->db->query("SELECT * FROM noticias WHERE id_noticias=:id");

			$this->db->bind(':id', $id);

			return $this->db->single();
		}

		/**
		 * Obtener las noticias por usuario
		 */
		public function getNoticiasUserID($usuario){
			$this->db->query("SELECT * FROM noticias WHERE id_usuarios=:usuario");

			$this->db->bind(':usuario', $usuario);

			return $this->db->resultSet();
		}

		/**
		 * Eliminamos una noticia por su ID
		 */
		public function delNoticias($id){
			$this->db->query("DELETE FROM noticias WHERE id_noticias=:id");

			$this->db->bind(':id', $id);

			$this->db->execute();
		}
	}
 ?>