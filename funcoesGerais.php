<?php 
	require_once 'Conexao.php';
	require_once 'Cliente.php';
	require_once 'Consulta.php';

	$cliente = cliente::getInstance(Conexao::getInstance()); 
    $consulta = consulta::getInstance(Conexao::getInstance());

	$nomeCliente    	= (isset($_POST['nomeCliente']))                    ? $_POST['nomeCliente'] : '';
	$telefoneCliente    = (isset($_POST['telefoneCliente']))                ? $_POST['telefoneCliente'] : '';
	$cpfCliente    		= (isset($_POST['cpfCliente']))                     ? $_POST['cpfCliente'] : '';

	$croMedico    		= (isset($_POST['croMedico']))                     ? $_POST['croMedico'] : '';
	$dataConsulta    		= (isset($_POST['dataConsulta']))                     ? $_POST['dataConsulta'] : '';
	$horaConsulta    		= (isset($_POST['horaConsulta']))                     ? $_POST['horaConsulta'] : '';

	$cliente->insert($nomeCliente, $telefoneCliente, $cpfCliente);	 

	$consulta->insert($nomeCliente, $telefoneCliente, $cpfCliente, $croMedico, $dataConsulta, $horaConsulta);	 
?>