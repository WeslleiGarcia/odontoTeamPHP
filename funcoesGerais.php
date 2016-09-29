<?php 
	require_once 'Conexao.php';
	require_once 'Cliente.php';
	require_once 'Consulta.php';

	$cliente = cliente::getInstance(Conexao::getInstance()); 
    $consulta = consulta::getInstance(Conexao::getInstance());

    $idConsulta   	= (isset($_POST['idConsulta']))                    ? $_POST['idConsulta'] : '';
	$nomeCliente    	= (isset($_POST['nomeCliente']))                    ? $_POST['nomeCliente'] : '';
	$telefoneCliente    = (isset($_POST['telefoneCliente']))                ? $_POST['telefoneCliente'] : '';
	$cpfCliente    		= (isset($_POST['cpfCliente']))                     ? $_POST['cpfCliente'] : '';

	$sexoCliente    	= (isset($_POST['sexoCliente']))                    ? $_POST['sexoCliente'] : '';
	$dataNascCliente    = (isset($_POST['dataNascCliente']))                ? $_POST['dataNascCliente'] : '';
	$enderecoCliente    		= (isset($_POST['enderecoCliente']))                     ? $_POST['enderecoCliente'] : '';
	$emailCliente    		= (isset($_POST['emailCliente']))                     ? $_POST['emailCliente'] : '';

	$croMedico    		= (isset($_POST['croMedico']))                     ? $_POST['croMedico'] : '';
	$dataConsulta    		= (isset($_POST['dataConsulta']))                     ? $_POST['dataConsulta'] : '';
	$horaConsulta    		= (isset($_POST['horaConsulta']))                     ? $_POST['horaConsulta'] : '';

	/*$dados = $cliente->getAllClientes();

	foreach ($dados as $reg):
	endforeach;

	if($nomeCliente == $reg->nomeCliente){
		$id = $reg->idCliente;
		$consulta->insert($id, $croMedico, $dataConsulta, $horaConsulta); 
	}else{
			echo "Cliente Não encontrado. Por favor, Faça seu cadastro."; echo "<br />";
			echo "<a href='cadastrarCliente.php'> CADASTRAR CLIENTE </a>";
	}

	*/
/*
	$dados = $cliente->pesquisaNomeCliente($nomeCliente);

	echo "Nome do cliente pesquisado: ".$dados->nomeCliente;

	
	 if($dados){
	 	foreach ($dados as $reg){
	 		$consulta->insert($reg->idCliente, $croMedico, $dataConsulta, $horaConsulta);
	 	}	
	 }else{
	 	include 'cadastrarCliente.php';
	 }
	 */



	$cliente->insert($nomeCliente, $dataNascCliente, $sexoCliente, $cpfCliente, $telefoneCliente, $emailCliente, $enderecoCliente); 
?>