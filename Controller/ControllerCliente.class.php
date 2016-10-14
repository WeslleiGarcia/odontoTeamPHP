<?php
namespace ControllerCliente;
require_once '../Model/ClienteDAO.class.php';

	Class ControllerCliente{

		public function insert(){
			$cliente = new Cliente();
			//pego da view aqui

			$cliente->setIdCliente($idCliente);
			$cliente->setNomeCliente($nomeCliente);
			$cliente->setSexoCliente($sexoCliente);
			$cliente->setDataNascCliente($dataNascCliente);
			$cliente->setRgCliente($rgCliente);
			$cliente->setCpfCliente($cpfCliente);
			$cliente->setEnderecoCliente($enderecoCliente);
			$cliente->setEstadoCivilCliente($estadoCivilCliente);
			$facede = new Facede();
			$facede->insert($cliente);
		}

		public function update(){

		}

		public function delete(){

		}

		public function pesquisar_por_nome(){
			
		}

		public function pesquisar_por_id(){

		}

		public function pesquisar_por_cpf(){

		}

		public function agendar_consulta(){

		}

		public function cancelar_consulta(){

		}

		public function ver_historico_consulta(){

		}

		public function detalhes_consulta(){

		}
	}

?>