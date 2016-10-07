<!DOCTYPE html>
<?php
require_once 'config.php';
include (HEAD_TEMPLATE); ?>
	<div class="row">
		<div class="col-lg-12 text-center">
			<h3>FICHA DE ANAMNESE</h3>
            <hr />
		</div>
	</div>
    <div class="container">
    	<div class="row">
            <form role="form" name="formCadastrarCliente" method="POST" action="" >
                <div class="col-lg-12">
                    <div class="row">
                        <label for="nomeCliente">Queixa Principal</label>
                        <div class="col-lg-12">
                            <div class="col-md-8">                     
                                <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="nomeCliente">Evolução da doença atual</label>
                        <div class="col-lg-12">
                            <div class="col-md-8">                     
                                <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                              </div>
                        </div>
                    </div>

                </div>  
            </form>
        </div>
    </div>