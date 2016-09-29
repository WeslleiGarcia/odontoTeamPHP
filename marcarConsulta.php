<?php
	
        require_once 'Conexao.php';
	/*
	 * Classe para operações CRUD na tabela ARTIGO   
	 */
	class marcarConsulta{  
	 
		  /*  
		   * Atributo para conexão com o banco de dados   
		   */  
	  private $pdo = null;  
	 
		  /*  
		   * Atributo estático para instância da própria classe    
		   */  
	  private static $marcarConsulta = null; 
	 
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
		   if (!isset(self::$marcarConsulta)):    
		    self::$marcarConsulta = new marcarConsulta($conexao);   
		   endif;   
		   return self::$marcarConsulta;    
		  } 
		 
		  /*   
		  * Metodo para inclusão de novos registros   
		  * @param $categoria - Valor para o campo categoria   
		  * @param $titulo - Valor para o campo titulo   
		  * @param autor  - Valor para o campo autor   
		  */   
		  public function insert($nomeCliente, $telefoneCliente, $cpfCliente){   
		   if (!empty($nomeCliente) && !empty($telefoneCliente) && !empty($cpfCliente)):   
			    try{   
			     $sql = "INSERT INTO cliente (nomeCliente, telefone, cpf)
			      VALUES (:nomeCliente, :telefoneCliente, :cpfCliente)";   
			     $stm = $this->pdo->prepare($sql);   
			     $stm->bindValue(':nomeCliente', $nomeCliente);   
			     $stm->bindValue(':telefoneCliente', $telefoneCliente);   
			     $stm->bindValue(':cpfCliente', $cpfCliente);   
			     $stm->execute(); 
			     echo "<script>alert('Registro inserido com sucesso')</script>";   
			    }catch(PDOException $erro){   
			     echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>"; 
			    }   
		   endif;   
		  } 
	 
		  /*   
		  * Metodo para edição de registros   
		  * @param $categoria - Valor para o campo categoria   
		  * @param $titulo - Valor para o campo titulo   
		  * @param autor  - Valor para o campo autor   
		  * @param id   - Valor para o campo id   
		  */   
		  public function update($categoria, $titulo, $autor, $id){   
		   if (!empty($categoria) && !empty($titulo) && !empty($autor) && !empty($id)):   
		    try{   
		     $sql = "UPDATE ARTIGO SET categoria=?, titulo=?, autor=? WHERE idArtigo=?";   
		     $stm = $this->pdo->prepare($sql);   
		     $stm->bindValue(1, $categoria);   
		     $stm->bindValue(2, $titulo);   
		     $stm->bindValue(3, $autor);   
		     $stm->bindValue(4, $id);   
		     $stm->execute();   
		     echo "<script>alert('Registro atualizado com sucesso')</script>";   
		    }catch(PDOException $erro){   
		     echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";   
		    }   
		   endif;   
		  }  
	 
		  /*   
		  * Metodo para exclusão de registros   
		  * @param id - Valor para o campo id   
		  */   
		  public function delete($id){   
		   if (!empty($id)):   
		    try{   
		     $sql = "DELETE FROM ARTIGO WHERE idArtigo=?";   
		     $stm = $this->pdo->prepare($sql);   
		     $stm->bindValue(1, $id);   
		     $stm->execute();   
		     echo "<script>alert('Registro excluido com sucesso')</script>";   
		    }catch(PDOException $erro){   
		     echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";    
		    }   
		   endif;   
		  } 
	 
		  /*   
		  * Metodo para consulta de artigos   
		  * @return $dados - Array com os registros retornados pela consulta   
		  */   
		public function getAllOdontologistas(){   
		   try{   
		    $sql = "SELECT * FROM odontologista";   
		    $stm = $this->pdo->prepare($sql);   
		    $stm->execute();   
		    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
		    return $dados;   
		   }catch(PDOException $erro){   
		    echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>"; 
		}   
	}
}
?>

