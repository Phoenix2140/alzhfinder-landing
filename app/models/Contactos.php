<?php 
	/**
	 * Modelo de la tabla contactos
	 * la estrucrura de la tabla es la siguiente:
	 *		id_contactos 		INT
	 *		nombre 				VARCHAR(100)
	 *		fono 				VARCHAR(45)
	 *		email 				VARCHAR(60)
	 * 		texto 				VARCHAR(300)
	 * 		contactado 			TINYINT(1)
	 */
	Class Contactos{
		private $db;

		//Constructor
		public function __construct($config){
			$this->db = new Database($config);
		}

		/**
		 * Función para crear un nuevo contacto
		 */
		public function crearContacto($nombre, $fono, $email, $texto){
			$this->db->query("INSERT INTO contactos (nombre, fono, email, texto, contactado) 
				VALUES (:nombre, :fono, :email, :texto, :contactado)");

			$this->db->bind(':nombre', $nombre);
			$this->db->bind(':fono', $fono);
			$this->db->bind(':email', $email);
			$this->db->bind(':texto', $texto);
			$this->db->bind(':contactado', false);

			$this->db->execute();

		}

		/**
		 * Función para obtener los contactos
		 */
		public function getContactos(){
			$this->db->query("SELECT * FROM contactos");

			return $this->db->resultSet();

		}

		/**
		 * Función que obtiene los contactos NO antendidos
		 */
		public function getContactosUn(){
			$this->db->query("SELECT * FROM contactos WHERE contactado=:contactado");

			$this->db->bind(':contactado', false);

			return $this->db->resultSet();

		}

		/**
		 * Función que obtiene los contactos atendidos
		 */
		public function getContactosAt(){
			$this->db->query("SELECT * FROM contactos WHERE contactado=:contactado");

			$this->db->bind(':contactado', true);

			return $this->db->resultSet();

		}

		/**
		 * Función que obtiene un contacto por su ID
		 */
		public function getContactoID($id){
			$this->db->query("SELECT * FROM contactos WHERE id_contactos=:id");

			$this->db->bind(':id', $id);

			return $this->db->single();

		}

		/**
		 * Función que actualiza el estado del contacto
		 * (Si lo atendieron o no)
		 */
		public function updateContactoID($id){
			$this->db->query("UPDATE contactos SET contactado=:contactado WHERE id_contactos=:id");

			$this->db->bind(':id', $id);
			$this->db->bind(':contactado', true);

			$this->db->execute();

		}

	}
 ?>