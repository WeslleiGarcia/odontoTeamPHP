
<html>

<?php 
        require_once 'config.php';
        require_once 'Consulta.php';

    $consulta = consulta::getInstance(Conexao::getInstance()); 

?>
<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Marcar Consulta</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>

             <div class="row">
        		<div class="col-lg-3">
        		</div>
                    <div class="col-lg-6">
                        <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                    <form role="form"> <!-- marcarConsulta.php name="formMarcarConsulta" method="POST" action="funcoesGerais.php"-->
                        <div class="form-group">
                            <label for="nomeCliente">Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nomeCliente" id="nomeCliente" placeholder="insira seu nome" />
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
                            <label for="odontologista">Odontologista</label>
                            <div class="input-group" >
                                <select class="form-control" id="croMedico" name="croMedico">
        						  <?php
        							$dados = $consulta->getAllOdontologistas();
        							foreach ($dados as $reg):
        							?>
        							<option value="<?=$reg->cro ?>">  <?=$reg->nomeMedico ?>  </option>
                                
        						<?php endforeach; ?>
        						</select>
        						<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dataConsulta">Dia da Consulta</label>
                            <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> <input type="date" class="form-control" id="dataConsulta" name="dataConsulta" placeholder="Dia da Consulta" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="horaConsulta">Hora da Consulta</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span> <input type="time" class="form-control" id="horaConsulta" name="horaConsulta" placeholder="Hora da Consulta" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <button type="submit" name="btMarcarConsulta"   class="btn btn-primary btn-lg pull-center"> Salvar </button>
                        <button type="reset" name="btcancel"   class="btn btn-danger btn-lg pull-center"> Limpar </button>
        				<!--<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Marcar Consulta</button>-->
        			</div>
        		</form>
                <div class="col-lg-3">
                </div>
            </div>
        </div>

