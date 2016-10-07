<!DOCTYPE html>
<?php
require_once 'config.php';
include (HEAD_TEMPLATE); ?>
	<div class="row">
		<div class="col-lg-12 text-center">
			<h3>EVOLUÇÃO DO TRATAMENTO</h3>
      <h5>Evolução e Intercorrência do Tratamento</h5>
      <hr />
		</div>
	</div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Data</th>
              <th>Evolução e Intercorrência do Tratamento</th>
              <th>Paciente/Responsável</th>
              <th>Cirurgião Dentista</th>
            </tr>
          </thead>
          <?php for($i=0; $i < 30; $i++){ ?>
          <tr>
            <td><input type="date" class="form-control" name="dataEvolucao" id="dataeEvolucao" /></td>
            <td><input type="text" class="form-control" name="nomeCliente" id="nomeCliente" /></td>
            <td>
              <select id="selectbasic" name="selectbasic" class="form-control">
                <option value="1">paciente 1</option>
                <option value="2">paciente 2</option>
              </select>
            </td>
            <td>
              <select id="selectbasic" name="selectbasic" class="form-control">
                <option value="1">Cirurgião Dentista 1</option>
                <option value="2">Cirurgião Dentista 2</option>
              </select>
            </td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
