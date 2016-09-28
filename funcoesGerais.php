<?php 
	require_once 'marcarConsulta.php';
  
	$acao  = (isset($_POST['acao']))                  ? $_POST['acao'] : '';
	$idCliente    = (isset($_POST['idCliente ']))                    ? $_POST['idCliente '] : '';
	$nomeCliente    = (isset($_POST['nomeCliente ']))                    ? $_POST['nomeCliente '] : '';
	$telefoneCliente    = (isset($_POST['telefoneCliente ']))                    ? $_POST['telefoneCliente '] : '';
	$cpfCliente    = (isset($_POST['cpfCliente ']))                    ? $_POST['cpfCliente '] : '';

	$marcarConsulta->insert($nomeCliente, $telefoneCliente, $cpfCliente);

		  
?>