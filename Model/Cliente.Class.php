<?php
require_once 'model/ClienteDAO.php';
namespace Cliente;

	Class Cliente{
		private $idCliente;
		private $nomeCliente;
		private $sexoCliente;
		private $dataNascCliente;
		private $rgCliente;
		private $cpfCliente;
		private $enderecoCliente;
		private $estadoCivilCliente;

		public function Cliente(){

		}

		public function insert($idCliente, $nomeCliente, $sexoCliente, $dataNascCliente, $rgCliente, $cpfCliente, $enderecoCliente, $estadoCivilCliente){
			$cliente = new Cliente();
			$this=$cliente->insertDAO();

		}

		/*GET E SETTER idCliente */
		public function getIdCliente(){
			return $idCliente;
		}

		public function setIdCliente($idCliente){
			$this->idCliente = $idCliente;
		}

		/*GET E SETTER nomeCliente */
		public function getIdCliente(){
			return $nomeCliente;
		}

		public function setIdCliente($nomeCliente){
			$this->nomeCliente = $nomeCliente;
		}

		/*GET E SETTER sexoCliente */
		public function getIdCliente(){
			return $sexoCliente;
		}

		public function setIdCliente($sexoCliente){
			$this->sexoCliente = $sexoCliente;
		}

		/*GET E SETTER dataNascCliente */
		public function getIdCliente(){
			return $dataNascCliente;
		}

		public function setIdCliente($dataNascCliente){
			$this->dataNascCliente = $dataNascCliente;
		}

		/*GET E SETTER rgCliente */
		public function getIdCliente(){
			return $rgCliente;
		}

		public function setIdCliente($rgCliente){
			$this->rgCliente = $rgCliente;
		}

		/*GET E SETTER cpfCliente */
		public function getIdCliente(){
			return $cpfCliente;
		}

		public function setIdCliente($cpfCliente){
			$this->cpfCliente = $cpfCliente;
		}

		/*GET E SETTER enderecoCliente */
		public function getIdCliente(){
			return $cpfCliente;
		}

		public function setIdCliente($cpfCliente){
			$this->cpfCliente = $cpfCliente;
		}

		/*GET E SETTER estadoCivilCliente */
		public function getIdCliente(){
			return $estadoCivilCliente;
		}

		public function setIdCliente($estadoCivilCliente){
			$this->estadoCivilCliente = $estadoCivilCliente;
		}
	}

?>