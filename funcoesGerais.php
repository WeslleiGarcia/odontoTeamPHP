<?php 
	require_once 'Conexao.php';
	require_once 'Cliente.php';

	$cliente = cliente::getInstance(Conexao::getInstance()); 
  
	$nomeCliente    	= (isset($_POST['nomeCliente']))                    ? $_POST['nomeCliente'] : '';
	$telefoneCliente    = (isset($_POST['telefoneCliente']))                ? $_POST['telefoneCliente'] : '';
	$cpfCliente    		= (isset($_POST['cpfCliente']))                     ? $_POST['cpfCliente'] : '';

	$cliente->insert($nomeCliente, $telefoneCliente, $cpfCliente);	  
?>