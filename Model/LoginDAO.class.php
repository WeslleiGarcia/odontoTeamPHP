<?php 
	namespace 'Model/LoginDAO.class.php';
	require_once ("PDOConnectionFactory.class.php");
	//ou posso usar esse aqui
	require_once ("Connection.class.php");

	require_once ("Login.class.php");

	Class LoginDAO extends PDOConnectionFactory{
		public $conexao = null;

		public function LoginDAO(){
			$this->conexao = PDOConnectionFactory::getConnection();
		}


		//recebe o objeto Login
		public function cadastrarLogin($login){
			try{
				$this->conexao->begin Transaction();
				//ou #db = new Connection();
				//$sql = $db->prepare()("INSERT INTO login (usuario, senha)VALUES (:usuario, :senha)");
				$query = $this->conexao->prepare("INSERT INTO login (usuario, senha)
													VALUES (:usuario, :senha)");

				//lendo valores vindo do obejto Login pelo paramentro desta funcao
				$valores = $usuario = array('usuario' => $login->getUsuario(),
														$login->getSenha());

				//inserindo valores
				$query = execute($valores);
				$this->conexao->commit();

				//ou $sql->execute($valores);

				echo "Cadastrado com sucesso";

				$this->conexao = null;
			}catch(DOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}

		public function Login(){

		}

		public function Logout(){

		}
	}

?>