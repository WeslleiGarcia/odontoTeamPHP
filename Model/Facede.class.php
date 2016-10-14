<?php
	require_once  "Model/ClienteDAO.class.php";

	Class Facede{

		public function insertCliente($cliente){
			$clienteDAO = ClienteDAO::getInstance(Conexao::getInstance());
			
			$clienteDAO->insert($cliente);
		}

		public function updateCliente($cliente){
			$clienteDAO = new ClienteDAO();
			$clienteDAO->update($cliente);
		}

		public function deleteCliente($cliente){
			$clienteDAO = new ClienteDAO();
			$clienteDAO->delete($cliente);
		}
	}
?>