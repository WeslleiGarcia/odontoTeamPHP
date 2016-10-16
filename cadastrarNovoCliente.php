<!DOCTYPE html>
<?php
require_once 'config.php';

require_once 'View/salvarCliente.php';
include (HEAD_TEMPLATE); ?>
<head>
<title>Cadastrar Novo Cliente</title>

</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<form class="form-horizontal" name="cadastrarNovoCliente" id="cadastrarNovoCliente" type="POST" action="View\salvarCliente.php">
				<fieldset>
					<legend>Cadastrar Novo Cliente</legend>
						<!-- NOME DO CLIENTE -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="nomeCliente">Nome:</label>  
						  <div class="col-md-4">
						  	<input type="text" id="nomeCliente" name="nomeCliente" placeholder="Seu nome aqui" class="form-control input-md"> 
						  </div>
						</div>

						<!-- SEXO DO CLIENTE -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="sexoCliente">Sexo:</label>  
						  <div class="col-md-4">
						  	<label class="radio-inline" for="sexoCliente">
						      <input type="radio" name="sexoCliente" id="sexoCliente" value="1">
						      Masculino
						    </label> 
						    <label class="radio-inline" for="sexoCliente">
						      <input type="radio" name="sexoCliente" id="sexoCliente" value="2">
						      Feminino
						    </label> 
						  </div>
						</div>

						<!-- DATA NASCIMENTO DO CLIENTE -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="dataNascCliente">Data de Nascimento:</label>  
						  <div class="col-md-4">
						  	<input type="date" id="dataNascCliente" name="dataNascCliente" class="form-control input-md"> 
						  </div>
						</div>

						<!-- CPF DO CLIENTE -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="cpfCliente">CPF:</label>  
						  <div class="col-md-4">
						  	<input type="text" id="cpfCliente" name="cpfCliente" placeholder="Seu cpf aqui" class="form-control input-md"> 
						  </div>
						</div>

						<!-- RG DO CLIENTE -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="rgCliente">RG:</label>  
						  <div class="col-md-4">
						  	<input type="text" id="rgCliente" name="rgCliente" placeholder="Seu rg aqui" class="form-control input-md"> 
						  </div>
						</div>

						<!-- ENDERECO DO CLIENTE -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="enderecoCliente">Endereco:</label>  
						  <div class="col-md-4">
						  	<input type="text" id="enderecoCliente" name="enderecoCliente" placeholder="rua, número da casa, bairro" class="form-control input-md"> 
						  </div>
						</div>

						<!-- ESTADO CIVIL DO CLIENTE -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="estadoCivilCliente">Estado Civil:</label>  
						  <div class="col-md-4">
						  	<select id="estadoCivilCliente" name="estadoCivilCliente" class="form-control">
						      <option value="1">Solteiro</option>
						      <option value="2">Casado</option>
						      <option value="3">Viúvo</option>
						      <option value="4">Namorando</option>
						    </select>
						  </div>
						</div>

						<!-- Button (Double) -->
						<div class="form-group text-center">
						  <div class="col-md-12">
						    <button id="salvar" name="salvar" class="btn btn-success" type="submit">Salvar</button>
						    <button id="limpar" name="limpar" class="btn btn-danger" type="reset">Limpar</button>
						  </div>
						</div>

				</fieldset>>
			</form>
		</div>
	</div>

</body>
</html>