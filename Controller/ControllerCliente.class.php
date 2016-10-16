<?php
require_once 'Model/Facede.class.php';

	Class ControllerCliente{

		public function insert($cliente){

			$facede = new Facede();
			$facede->insertCliente($cliente);
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