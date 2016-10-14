<?php 
	namespace 'Model/Login.class.php';

	Class Login{
		private $usuario;
		private $senha;

		public function setUsuario($usuario){
			return $this->usuario = $usuario;
		}

		public function getUsuario(){
			$this->usuario;
		}

		public function setSenha($senha){
			return $this->senha = $senha;
		}

		public function getSenha(){
			$this->senha;
		}

	}

?>