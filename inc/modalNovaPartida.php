<!-- Modal -->
<div class="modal fade" id="myModalNovaPartida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    NOVA PARTIDA
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
            	<div class="panel panel-default">
                    <div class="panel-heading">
		                <form class="form-horizontal" role="form" method="post" action=" ">
                            <div class="form-inline">
    							<!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="rodada"> RODADA</label>
                                    <select class="form-control" name="rodada" id="rodada" required="true">
                                        <option value="">  escolha a rodada --  </option>
                                    </select>

    								<label class="control-label" for="hora">HORA</label>
    								<input id="hora" name="hora" type="time" class="form-control">
    							</div>
                            </div>
							<div class="form-inline">
								<div class="form-group">
					                <label class="control-label" for="idTime1">TIME 1</label>
					                <select class="form-control" name="idTime1" id="idTime1" required="true">
					                    <option value="">  escolha o time --  </option>
					                </select>

					                <label class="control-label" for="idTime2"> TIME 2</label>
					                <select class="form-control" name="idTime2" id="idTime2" required="true">
					                    <option value="">  escolha outro time --  </option>
					                </select>
					            </div>
					        </div>
				    	</div>
					</div>
        		</div>
        		<!-- Modal Footer -->
            	<div class="modal-footer">
                	<button type="button" class="btn btn-default" data-dismiss="modal"> Fechar </button>
                	<button type="submit" class="btn btn-success"> Salvar </button>
            	</div>
            </form>
        </div>
    </div>
</div>
 <!-- ./myModal -->
