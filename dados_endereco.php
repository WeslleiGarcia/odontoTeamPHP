<!DOCTYPE html>
<?php
require_once 'config.php';
include (HEAD_TEMPLATE); ?>
	<div class="row">
		<div class="col-lg-12 text-center">
			<h3>ENDEREÇO</h3>
            <hr />
		</div>
	</div>

    <div class="container">
    	<div class="row">
            <form role="form" name="formCadastrarCliente" method="POST" action="" >
    			<div class="col-lg-3"></div>

                <div class="col-lg-6">

                    <div class="form-inline">
                        <div class="form-group">
                            <label for="nomeCliente">Rua</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nomeCliente" id="nomeCliente" placeholder="insira seu nome" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="nomeCliente">N°</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nomeCliente" id="nomeCliente" size="3" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dataNascCliente">Bairro</label>
                        <div class="input-group">
                            <select id="selectbasic" name="selectbasic" class="form-control">
                              <option value="1">Option one</option>
                              <option value="2">Option two</option>
                            </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dataNascCliente">Complemento</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="dataNascCliente" id="dataNascCliente" placeholder="insira seu nome" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>

                    <div class="form-inline">
                        <div class="form-group">
                            <label for="cpfCliente">Cidade</label>
                            <div class="input-group">
                               <select id="selectbasic" name="selectbasic" class="form-control">
                                  <option value="1">Option one</option>
                                  <option value="2">Option two</option>
                                </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rgCliente">Estado</label>
                            <div class="input-group">
                                <select id="selectbasic" name="selectbasic" class="form-control">
                                  <option value="1">Option one</option>
                                  <option value="2">Option two</option>
                                </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3"></div>
            </form>
        </div>
    </div>