<!DOCTYPE html>
<?php
require_once 'config.php';
include (HEAD_TEMPLATE); ?>
	<div class="row">
		<div class="col-lg-12 text-center">
			<h3>DADOS PESSOAIS</h3>
            <hr />
		</div>
	</div>
    
    <div class="container">
    	<div class="row">
            <form role="form" name="formCadastrarCliente" method="POST" action="" >
    			<div class="col-lg-3"></div>

                <div class="col-lg-6">

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
    		                <label class="radio-inline" for="radios-0">
    					      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
    					      	Masculino
    					    </label> 
    					    <label class="radio-inline" for="radios-1">
    					      <input type="radio" name="radios" id="radios-1" value="2">
    					      Feminino
    					    </label>
    					</div>
    				</div> 

                    <div class="form-group">
                        <label for="dataNascCliente">Data de Nascimento</label>
                        <div class="input-group">
                            <input type="date" class="form-control" name="dataNascCliente" id="dataNascCliente" placeholder="insira seu nome" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>

                    <div class="form-inline">
                        <div class="form-group">
                            <label for="cpfCliente">CPF</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="cpfCliente" id="cpfCliente" placeholder="insira seu CPF" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rgCliente">RG</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="rgCliente" id="rgCliente" placeholder="insira seu RG" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                    </div>

                    <p><div class="form-inline">
                        <div class="form-group">
                            <label for="rgCliente">Telefone Residencial</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="rgCliente" id="rgCliente" placeholder="numero telefone" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rgCliente">Celular</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="rgCliente" id="rgCliente" placeholder="numero celular" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                    </div></p>

                </div>

                <div class="col-lg-3"></div>
            </form>
        </div>
    </div>