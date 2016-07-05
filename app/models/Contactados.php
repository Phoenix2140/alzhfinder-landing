<?php 

	/**
	 * Modelo de la tabla Contactados
	 * Estructura de la tabla:
	 * 		id_contactados 		INT
	 * 		titulo 				VARCHAR(45)
	 * 		mensaje				TEXT
	 * 		id_contactos 		INT
	 * 		id_usuarios			TINYINT
	 */
	Class Contactados{
		private $db;

		public function __construct($config){
			$this->db = new Database($config);
		}

		public function crearContactado($titulo, $mensaje, $contacto, $usuario){
			$this->db->query("INSERT INTO contactados (titulo, mensaje, id_contactos, id_usuario)
				VALUES (:titulo, :mensaje, :contacto, :usuario)");

			$this->db->bind(':titulo', $titulo);
			$this->db->bind(':mensaje', $mensaje);
			$this->db->bind(':contacto', $contacto);
			$this->db->bind(':usuario', $usuario);

			$this->db->execute();

		}

		public function obtenerContactados(){
			$this->db->query("SELECT * FROM contactados");

			return $this->db->resultSet();

		}

		public function obtenerContactadoID($id){
			$this->db->query("SELECT * FROM contactados WHERE id_contactados=:id");

			$this->db->bind(':id', $id);

			return $this->db->single();

		}

		public function obtenerContactadosByUsuarioID($id){
			$this->db->query("SELECT * FROM contactados WHERE id_usuarios=:id");

			$this->db->bind(':id', $id);

			return $this->db->resultSet();
		}

		public function updateContactadoID($id, $titulo, $mensaje, $contacto, $usuario){
			$this->db->query("UPDATE contactados SET titulo=:titulo, mensaje=:mensaje, 
				id_contactados=:contacto, id_usuario=:usuario 
				WHERE id_contactados=:id");

			$this->db->bind(':id', $id);
			$this->db->bind(':titulo', $titulo);
			$this->db->bind(':mensaje', $mensaje);
			$this->db->bind(':contacto', $contacto);
			$this->db->bind(':usuario', $usuario);

			$this->db->execute();

		}

		public function delContactadoID($id){
			$this->db->query("DELETE FROM contactados WHERE id_contactados=:id");

			$this->db->bind(':id', $id);

			$this->db->execute();

		}
	}
 ?>