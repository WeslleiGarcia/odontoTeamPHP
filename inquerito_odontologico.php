<!DOCTYPE html>
<?php
require_once 'config.php';
include (HEAD_TEMPLATE); ?>
	<div class="row">
		<div class="col-lg-12 text-center">
			<h3>Inquérito Odontológico</h3>
      <hr />
		</div>
	</div>

<div class="container">
  <div class="row">
    <form role="form" name="formCadastrarCliente" method="POST" action="" >
      <div class="col-md-6"> 
        
        <div class="form-group">
          <label for="dataNascCliente">Data do último atendimento</label>
          <div class="input-group">
            <input type="date" class="form-control" name="dataNascCliente" id="dataNascCliente" placeholder="insira seu nome" />
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
          </div>
        </div> 

        <div class="form-group">
          <label class="radio-inline" for="radio-0">
            <input type="radio" name="radio0" id="radio-0" value="1">
              Completo
          </label>
          <label class="radio-inline" for="radio-1">
            <input type="radio" name="radio2" id="radio-1" value="2">
            Incompleto
          </label>
        </div>

      </div>

      <div class="col-md-6"> 
        <div class="form-group">
              <label for="sexoCliente">Experiência negativa no tratamento odontológico ? Qual ?</label>
              <div class="form-group">
                <div class="col-md-12">                     
                  <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                </div>
              </div>
              <br />
            </div>
      </div>
    </div>

      <div class="row"> 
        <div class="col-md-6">
            <h3 class="text-center">Hábitos</h3>
            <hr />
            <div class="col-md-6">

              <div class="radio">
                <label for="radios-0">
                  <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                  Roer Unhas
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Respirar pela boca
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Tomar Chimarrão
                </label>
              </div>
            </div>

            <div class="col-md-6">

              <div class="radio">
                <label for="radios-0">
                  <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                  Chupar bico / Dedo
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Morder Caneta / Lápis
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Ranger os Dentes dia/noite
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  outros
                </label>
              </div>
            </div>
        </div>

        <div class="col-md-6">
          <h3 class="text-center">Higiene Bucal (utiliza)</h3>
          <hr />
            <div class="col-md-6">

              <div class="radio">
                <label for="radios-0">
                  <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                  Fio / Fio Dental
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Interdental
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Escova macia / média / dura
                </label>
              </div>
            </div>

            <div class="col-md-6">

              <div class="radio">
                <label for="radios-0">
                  <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                  Unitufo / Bitufo
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Pálito
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Creme Dental
                </label>
              </div>
            </div>

            <div class="col-md-6">
              <p>FLÚOR:</p>
              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Gel
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Creme Dental
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Bocheho
                </label>
              </div>

              <div class="radio">
                <label for="radios-1">
                  <input type="radio" name="radios" id="radios-1" value="2">
                  Água Fluoretada
                </label>
              </div>
            </div>

            <div class="col-md-6">
              <p>DIETA</p>
              <div class="form-group">
                <label for="sexoCliente">Ingere alimentos / bebidas entre as refeições ?</label>
                <div class="form-group">
                  <div class="radio">
                    <label for="radios-1">
                      <input type="radio" name="radios" id="radios-1" value="2">
                      Sim
                    </label>
                  </div>

                  <div class="radio">
                    <label for="radios-1">
                      <input type="radio" name="radios" id="radios-1" value="2">
                      Não
                    </label>
                  </div>
                </div>
                <br />
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
                ASSUMO INTEIRA RESPONSABILIDADE PELAS INFORMAÇÕES AQUI
                PRESTADAS BEM COMO AUTORIZO O(S) PROFISSIONAl(IS) A REALIZAR(EM)
                TODOS OS PROCEDIMENTOS NECESSÁRIOS PARA O MEU TRATAMENTO.<br />
                <?php $dataAtual = date('d/m/y'); ?>
                Manaus, 
                <?php echo' '.$dataAtual; ?>
              </label>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-md-4">
          <hr />
          <p>Responsável pelo inquérito</p>
        </div>

        <div class="col-md-4">
          <hr />
          <p>Assinatura do Paciente</p>
        </div>

        <div class="col-md-4">
          <hr />
          <p>Assinatura do Paciente/Responável</p>
        </div>
      </div>
    </form>
  </div>
</div>