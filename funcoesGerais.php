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

	$croMedico    		= (isset($_POST['croMedico']))                     ? $_POST['croMedico'] : '';
	$dataConsulta    		= (isset($_POST['dataConsulta']))                     ? $_POST['dataConsulta'] : '';
	$horaConsulta    		= (isset($_POST['horaConsulta']))                     ? $_POST['horaConsulta'] : '';

	$dados = $cliente->getAllClientes();

	foreach ($dados as $reg):

		if($nomeCliente == $reg->nomeCliente){
			$id = $reg->idCliente;
			$consulta->insert($id, $croMedico,  $horaConsulta); /*$dataConsulta,*/
		}else{
			echo "nao encontrado";
		}
	endforeach;

	$idTeste = $reg->idCliente;
	echo "id: ".$idTeste; echo "<br />";
	echo "telefone: ".$telefoneCliente; echo "<br />";
	echo "cpf: ".$cpfCliente; echo "<br />";
	echo "cro: ".$croMedico; echo "<br />";
	echo "data: ".$dataConsulta; echo "<br />";
	echo "hora: ".$horaConsulta; echo "<br />";

	/*$cliente->insert($nomeCliente, $telefoneCliente, $cpfCliente); */
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



	/*$consulta->insert($nomeCliente, $telefoneCliente, $cpfCliente, $croMedico, $dataConsulta, $horaConsulta);	*/ 
?>