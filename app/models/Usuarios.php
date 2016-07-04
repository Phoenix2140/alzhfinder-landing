<?php 
	/**
	 * Modelo de la tabla Usuarios
	 * la estrucrura de la tabla es la siguiente:
	 *		id_usuarios 		TINYINT
	 *		usuario 			VARCHAR(45)
	 *		pass 				VARCHAR(100)
	 *		nombre 				VARCHAR(100)
	 * 		email 				VARCHAR(60)
	 */

	Class Usuarios{
		private $db;

		//Constructor
		public function __construct($config){
			$this->db = new Database($config);
		}

		/**
		 * Función que crea usuarios
		 */
		public function crearUsuario($usuario, $pass, $nombre, $email){
			$this->db->query("INSERT INTO usuarios (usuario, pass, nombre, email) 
				VALUES (:usuario, :pass, :nombre, :email)");

			$this->db->bind(':usuario', $usuario);
			$this->db->bind(':pass', md5($pass));
			$this->db->bind(':nombre', $nombre);
			$this->db->bind(':email', $email);

			$this->db->execute();

		}

		/**
		 * Función para obtener Usuarios
		 */
		public function getUsuarios(){
			$this->db->query("SELECT * FROM usuarios");

			return $this->db->resultSet();
		}

		/**
		 * Obtenemos un usuario por su ID
		 */
		public function getUsuarioID($id){
			$this->db->query("SELECT * FROM usuarios WHERE id_usuarios=:id");

			$this->db->bind(':id', $id);

			return $this->db->single();
		}

		public function getUsuarioLogin($usuario, $pass){
			$this->db->query("SELECT * FROM usuarios WHERE usuario=:usuario AND pass=:pass");

			$this->db->bind(':usuario', $usuario);
			$this->db->bind(':pass', md5($pass));

			return $this->db->single();
		}

		/**
		 * Actualizamos los datos de un usuario
		 */
		public function updateUsuario($id, $usuario, $pass, $nombre, $email){
			$this->db->query("UPDATE usuarios SET usuario=:usuario, pass=:pass, 
				nombre=:nombre, email=:email WHERE id_usuarios=:id");

			$this->db->bind(':id', $id);
			$this->db->bind(':usuario', $usuario);
			$this->db->bind(':pass', $pass);
			$this->db->bind(':nombre', $nombre);
			$this->db->bind(':email', $email);

			$this->db->execute();
		}

		/**
		 * Eliminamos un usuario por su ID
		 */
		public function delUsuario($id){
			$this->db->query("DELETE FROM usuarios WHERE id_usuarios=:id");

			$this->db->bind(':id', $id);

			$this->db->execute();
		}

	}
 ?>