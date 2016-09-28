
<!-- Modal -->
<div class="modal fade" id="myModalNovaRodada" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
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
                    NOVA RODADA
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
		                <form class="form-horizontal" role="form" method="post" action=" ">
							<!-- Text input-->
							<div class="form-group">
							  <label class="control-label" for="nomeRodada">NOME RODADA</label>
							  <input id="nomeRodada" name="nomeRodada" type="text" class="form-control">
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="control-label" for="dataRodada">DATA</label>
								<input id="dataRodada" name="dataRodada" type="date" class="form-control">
							</div>
				        </div>
					</div>
		    	</div>
		            
            	<!-- Modal Footer -->
            	<div class="modal-footer">
                	<button type="button" class="btn btn-default" data-dismiss="modal"> Fechar </button>
                <button type="submit" class="btn btn-success"> Salvar </button>
            	</form>
            </div>
        </div>
    </div>
</div>
 <!-- ./myModal -->
