<?php 
	require_once 'Conexao.php';
	require_once 'marcarConsulta.php';

	$marcarConsulta = marcarConsulta::getInstance(Conexao::getInstance()); 
  
	$nomeCliente    = (isset($_POST['nomeCliente ']))                    ? $_POST['nomeCliente '] : '';
	$telefoneCliente    = (isset($_POST['telefoneCliente ']))                    ? $_POST['telefoneCliente '] : '';
	$cpfCliente    = (isset($_POST['cpfCliente ']))                    ? $_POST['cpfCliente '] : '';

	$marcarConsulta->insert($nomeCliente, $telefoneCliente, $cpfCliente);

	echo "Chega aqui";		  
?>