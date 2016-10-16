<?php

	Class Cliente{
		private $idCliente;
		private $nomeCliente;
		private $sexoCliente;
		private $dataNascCliente;
		private $rgCliente;
		private $cpfCliente;
		private $enderecoCliente;
		private $estadoCivilCliente;

		/*GET E SETTER idCliente */
		public function getIdCliente(){
			return $this->idCliente;
		}

		public function setIdCliente($idCliente){
			$this->idCliente = $idCliente;
		}

		/*GET E SETTER nomeCliente */
		public function getNomeCliente(){
			return $this->nomeCliente;
		}

		public function setNomeCliente($nomeCliente){
			$this->nomeCliente = $nomeCliente;
		}

		/*GET E SETTER sexoCliente */
		public function getSexoliente(){
			return $this->sexoCliente;
		}

		public function setSexoCliente($sexoCliente){
			$this->sexoCliente = $sexoCliente;
		}

		/*GET E SETTER dataNascCliente */
		public function getDataNascCliente(){
			return $this->dataNascCliente;
		}

		public function setDataNascCliente($dataNascCliente){
			$this->dataNascCliente = $dataNascCliente;
		}

		/*GET E SETTER rgCliente */
		public function getRgCliente(){
			return $this->rgCliente;
		}

		public function setRgCliente($rgCliente){
			$this->rgCliente = $rgCliente;
		}

		/*GET E SETTER cpfCliente */
		public function getCpfCliente(){
			return $this->cpfCliente;
		}

		public function setCpfCliente($cpfCliente){
			$this->cpfCliente = $cpfCliente;
		}

		/*GET E SETTER enderecoCliente */
		public function getEnderecoCliente(){
			return $this->cpfCliente;
		}

		public function setEnderecoCliente($cpfCliente){
			$this->cpfCliente = $cpfCliente;
		}

		/*GET E SETTER estadoCivilCliente */
		public function getEstadoCivilCliente(){
			return $this->estadoCivilCliente;
		}

		public function setEstadoCivilCliente($estadoCivilCliente){
			$this->estadoCivilCliente = $estadoCivilCliente;
		}
	}

?>