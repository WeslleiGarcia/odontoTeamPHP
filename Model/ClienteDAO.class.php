<?php
require_once 'Conexao.class.php';

	Class ClienteDAO{
		  /*  
		   * Atributo para conexão com o banco de dados   
		   */  
	  private $pdo = null;  
	 
		  /*  
		   * Atributo estático para instância da própria classe    
		   */  
	  private static $clienteDAO = null; 
	 
		  /*  
		   * Construtor da classe como private  
		   * @param $conexao - Conexão com o banco de dados  
		   */  
		  private function __construct($conexao){  
		    $this->pdo = $conexao;  
		  }  
	  
		  /*
		  * Método estático para retornar um objeto crudBlog    
		  * Verifica se já existe uma instância desse objeto, caso não, instância um novo    
		  * @param $conexao - Conexão com o banco de dados   
		  * @return $crudBlog - Instancia do objeto crudBlog    
		  */   
		  public static function getInstance($conexao){   
		   if (!isset(self::$clienteDAO)):    
		    self::$clienteDAO = new ClienteDAO($conexao);   
		   endif;   
		   return self::$clienteDAO;    
		  } 
		 
		  /*   
		  * Metodo para inclusão de novos registros   
		  * @param $categoria - Valor para o campo categoria   
		  * @param $titulo - Valor para o campo titulo   
		  * @param autor  - Valor para o campo autor   
		  */   

		public function insert(Cliente $cliente){
			if(!empty($nomeCliente) && !empty($dataNascCliente) && !empty($sexoCliente) && !empty($cpfCliente) && !empty($rgCliente) && !empty($enderecoCliente) && !empty($estadoCivilCliente)): 
			    try{   
			     $sql = "INSERT INTO cliente (nomeCliente, dataNascCliente, sexoCliente, cpfCliente, rgCliente, enderecoCliente, estadoCivilCliente)
			      VALUES (:nomeCliente, :dataNascCliente, :sexoCliente, :cpfCliente, :rgCliente, :enderecoCliente, :estadoCivilCliente)";   
			     $stm = $this->pdo->prepare($sql);   
			     $stm->bindParam(':nomeCliente', $nomeCliente);   
			     $stm->bindParam(':dataNascCliente', $dataNascCliente);   
			     $stm->bindParam(':sexoCliente', $sexoCliente);
			     $stm->bindParam('cpfCliente', $cpfCliente);   
			     $stm->bindParam('rgCliente', $rgCliente);   
			     $stm->bindParam('enderecoCliente', $enderecoCliente);
			     $stm->bindParam('estadoCivilCliente', $estadoCivilCliente); 


			     $stm->execute(); 
			     echo "<script>alert('Registro inserido com sucesso')</script>";   
			    }catch(PDOException $erro){   
			     echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>"; 
			    }   
		    endif;   
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