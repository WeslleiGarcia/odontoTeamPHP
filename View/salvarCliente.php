<?php
	require_once '../Model/Cliente.class.php';
	require_once 'Controller/ControllerCliente.class.php'; 

	$cliente = new Cliente();

	//$idCliente   			= (isset($_POST['idCliente']))      		? $_POST['idCliente'] : '';
	$nomeCliente   			= (isset($_POST['nomeCliente']))      		? $_POST['nomeCliente'] : '';
	$sexoCliente   			= (isset($_POST['sexoCliente']))      		? $_POST['sexoCliente'] : '';
	$dataNascCliente   		= (isset($_POST['dataNascCliente']))      	? $_POST['dataNascCliente'] : '';
	$enderecoCliente   		= (isset($_POST['enderecoCliente']))      	? $_POST['enderecoCliente'] : '';
	$rgCliente   			= (isset($_POST['rgCliente']))      		? $_POST['rgCliente'] : '';
	$cpfCliente   			= (isset($_POST['cpfCliente']))      		? $_POST['cpfCliente'] : '';
	$estadoCivilCliente   	= (isset($_POST['estadoCivilCliente']))      ? $_POST['estadoCivilCliente'] : '';


	
	//$cliente->setIdCliente($idCliente);
	$cliente->setNomeCliente($nomeCliente);
	$cliente->setSexoCliente($sexoCliente);
	$cliente->setDataNascCliente($dataNascCliente);
	$cliente->setEnderecoCliente($enderecoCliente);
	$cliente->setRgCliente($rgCliente);
	$cliente->setCpfCliente($cpfCliente);
	$cliente->setEstadoCivilCliente($estadoCivilCliente);

	$cCliente = new ControllerCliente();
	$cCliente->insert($cliente);



?>