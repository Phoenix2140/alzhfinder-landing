<?php 
	/**
	 * Modelo de la tabla News
	 * Estructura de la base de datos
	 * 		id_news 		INT
	 * 		email 			VARCHAR(80)
	 */

	Class News{
		private $db;

		//Constructor
		public function __construct($config){
			$this->db = new Database($config);
		}

		/**
		 * Función para crear una nueva entrada
		 */
		public function crearEmail($email){
			$this->db->query("INSERT INTO news (email)
				VALUES (:email)");

			$this->db->bind(':email', utf8_encode($email));

			$this->db->execute();
		}

		/**
		 * Función para obtener Emails
		 */
		public function getEmails(){
			$this->db->query("SELECT * FROM news");

			return $this->db->resultSet();
		}

		/**
		 * Función para eliminar una entrada deseada
		 * por su ID
		 */
		public function delEmailID($id){
			$this->db->query("DELETE FROM news WHERE id_news=:id");

			$this->db->bind(':id', $id);

			$this->db->execute();
		}

	}
 ?>