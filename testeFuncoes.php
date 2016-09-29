<?php

	require_once 'Conexao.php';
	require_once 'Cliente.php';
	require_once 'Consulta.php';

	$cliente = cliente::getInstance(Conexao::getInstance()); 

	$nomeCliente = "Wesllei Garcia";

	$dados = $cliente->getAllClientes();

	foreach ($dados as $reg):

		if($nomeCliente == $reg->nomeCliente){
			echo "Nome  pesquisado: ".$reg->nomeCliente; echo "<br>";
			echo "data Nascimento: ".$reg->dataNasc; echo "<br>";
			echo "sexo: ".$reg->sexo; echo "<br>";
			echo "email: ".$reg->email; echo "<br>";
			echo "telefone: ".$reg->telefone; echo "<br>";
			echo "cpf: ".$reg->cpf; echo "<br>";
			echo "médico: ".$reg->Odontologista_cro; echo "<br>";
		}else{
			echo "nao encontrado";
		}
	endforeach;

	$nome = $reg->idCliente;

	echo "id  pesquisado: ".$nome; echo "<br>";

?>