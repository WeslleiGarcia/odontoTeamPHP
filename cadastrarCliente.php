<!DOCTYPE html>
<?php 
        require_once 'config.php';
        
?>
<html lang="en">
<?php include (HEAD_TEMPLATE); ?>
<body id="page-top" class="index">
	<div class="row">
	<div class="col-md-12 text-center">
		<strong><h2>CADASTRAR</h2></strong>
		<hr />
	</div>
	</div>

	<div class="row">
        <form role="form" name="formMarcarConsulta" method="POST" action="funcoesGerais.php" > <!--name="formMarcarConsulta" method="POST" action="funcoesGerais.php"  -->
			<div class="col-lg-3">
			</div>
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="nomeCliente">Nome</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nomeCliente" id="nomeCliente" placeholder="insira seu nome" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="sexoCliente">Sexo</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="sexoCliente" id="sexoCliente" placeholder="sexo" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dataNascCliente">Data Nascimento</label>
                    <div class="input-group">
                        <input type="date" class="form-control" name="dataNascCliente" id="dataNascCliente" placeholder="sexo" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="cpfCliente">CPF</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="cpfCliente" id="cpfCliente" placeholder="insira número do seu CPF" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="telefoneCliente">Telefone</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="telefoneCliente" id="telefoneCliente" placeholder="número do seu Telefone" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="emailCliente">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="emailCliente" id="emailCliente" placeholder="seu email aqui" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="enderecoCliente">Endereço</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="enderecoCliente" id="enderecoCliente" placeholder="seu endereço aqui" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				
                <button type="submit" name="btsalvar"   class="btn btn-primary btn-lg pull-center"> Salvar </button>
				</div>
				<div class="col-lg-3">
				</div>
			</form>
            </div>























	<?php include (FOOTER_TEMPLATE); ?>
<
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>