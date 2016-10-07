<!DOCTYPE html>
<?php
require_once 'config.php';
include (HEAD_TEMPLATE); ?>
	<div class="row">
		<div class="col-lg-12 text-center">
			<h3>PLANO DE TRATAMENTO</h3>
      <h5>Consentimento Esclarecido</h5>
      <hr />
		</div>
	</div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- INICIO TEXT AREA -->
        <div class="form-group">
          <label class="checkbox-inline" for="checkboxes-0">
          <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
            <p>Opção 1</p>
          </label>
          <div class="form-group">
            <div class="col-md-12">                     
              <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
            </div>
          </div>
          <br />
        </div>

        <br />
        <p><hr /></p>
                  <!-- FIM TEXT AREA COM LINHA -->
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <!-- INICIO TEXT AREA -->
        <div class="form-group">
          <label class="checkbox-inline" for="checkboxes-0">
          <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
            <p>Opção 2</p>
          </label>
          <div class="form-group">
            <div class="col-md-12">                     
              <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
            </div>
          </div>
          <br />
        </div>

        <br />
        <p><hr /></p>
                  <!-- FIM TEXT AREA COM LINHA -->
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <!-- INICIO TEXT AREA -->
        <div class="form-group">
          <label class="checkbox-inline" for="checkboxes-0">
          <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
            <p>Opção 3</p>
          </label>
          <div class="form-group">
            <div class="col-md-12">                     
              <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
            </div>
          </div>
          <br />
        </div>

        <br />
        <p><hr /></p>
                  <!-- FIM TEXT AREA COM LINHA -->
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <div class="col-md-12">
            <label class="checkbox-inline" for="checkboxes-0">
            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
              <p>Declaro, que após ter sido devidamente esclarecido sobre os propósitos, riscos, custos e
                  alternativas de tratamento, conforme acima apresentados, aceito e autorizo a execução do
                  tratamento, comprometendo-me a cumprir as orientações do profissional e arcar com os
                  custos estipulados no planejamento de custos apresentado.
                <?php $dataAtual = date('d/m/y'); ?>
                Manaus, Am. <?php echo' '.$dataAtual; ?>
              </p>
            </label>  
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 text-center">
          <hr />
        <p>Assinatura do Paciente</p>
      </div>

      <div class="col-md-6 text-center">
          <hr />
        <p>Assinatura do Cirutgião Dentista</p>
      </div>
    </div>


  </div>