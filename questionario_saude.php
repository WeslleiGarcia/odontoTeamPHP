<!DOCTYPE html>
<?php
require_once 'config.php';
include (HEAD_TEMPLATE); ?>
	<div class="row">
		<div class="col-lg-12 text-center">
			<h3>QUESTIONÁRIO DE SAÚDE</h3>
            <hr />
		</div>
	</div>

    <div class="container">

    	<div class="row">
            <form role="form" name="formCadastrarCliente" method="POST" action="" >

                <div class="col-md-4"> 
                    <div class="form-group">
                        <label for="sexoCliente">Está em tratamento médico atualmente?</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Gravidez?</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Teve problemas com a cicatrização?</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div>
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Teve problemas com a anestesia?</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Teve problemas de Hemorragia?</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div>
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Sofre de alguma doença?</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="control-label" for="textarea">Se sim, Qual?</label>
                          <div class="col-md-12">                     
                            <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                          </div>
                        </div>
                        <br />
                    </div>
                    <br />
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Está fazendo uso de alguma Medicação?</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="control-label" for="textarea">Se sim, Qual?</label>
                          <div class="col-md-12">                     
                            <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                          </div>
                        </div>
                    </div>      
                </div>


                <div class="col-md-4">
                   <p> <h5>Sofre de algumas das seguintes doenças?</h5> </p>
                   <hr />
                    <div class="form-group">
                        <label for="sexoCliente">Febre Reumática:</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Problemas Renais:</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Problemas Respiratórios:</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Problemas Articulares ou Reumatismo:</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Diabetes:</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Hipertensão Arterial:</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Problemas Cardíacos:</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Problemas Gástricos:</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 
                    <p><hr /></p>
                     <div class="form-group">
                        <label for="sexoCliente">Problemas Alérgicos:</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                    </div> 

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <label for="sexoCliente">Teve alergia?</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="control-label" for="textarea">Se sim, Qual?</label>
                          <div class="col-md-12">                     
                            <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                          </div>
                        </div>
                        <br />
                    </div>
                    <br />
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Já foi operado?</label>
                        <div class="input-group">
                            <label class="radio-inline" for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                Sim
                            </label> 
                            <label class="radio-inline" for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Não
                            </label>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="control-label" for="textarea">Se sim, Qual?</label>
                          <div class="col-md-12">                     
                            <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                          </div>
                        </div>
                        <br />
                    </div>
                    <br />
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Antecedentes Familiares:</label>
                        <!-- Textarea -->
                        <div class="form-group">
                          <div class="col-md-12">                     
                            <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                          </div>
                        </div>
                        <br />
                    </div>
                    <br />
                    <p><hr /></p>
                    <div class="form-group">
                        <label for="sexoCliente">Outras Observaçoes importantes:</label>
                        <!-- Textarea -->
                        <div class="form-group">
                          <div class="col-md-12">                     
                            <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                          </div>
                        </div>
                        <br />
                    </div> 
                    <br />
                    <p><hr /></p>
                    <div class="form-group">
                            <label for="nomeCliente">Nome Médico Assistente</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nomeCliente" id="nomeCliente" placeholder="insira seu nome" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="checkbox-inline" for="checkboxes-0">
                                  <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                                    <p>Declaro que as informações acima prestadas são totalmente verdadeiras.
                                        <?php $dataAtual = date('d/m/y'); ?>
                                    Manaus, Am. <?php echo' '.$dataAtual; ?>
                                    </p>
                                </label>  
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <hr />
    </div>