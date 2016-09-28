<!-- Modal -->
<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Fechar</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    LOGIN
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Login</strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post" action="">
                                    <br />
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                        <input name="nome" id="nome" type="text" class="form-control" placeholder="Login " required="true" />
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                        <input name="senha" id="senha" type="password" class="form-control"  placeholder="senha" required="true" />
                                    </div>
                                    <div class="form-group">
                                        <label class="checkbox-inline pull-left">
                                            <input type="checkbox" /> lembrar senha
                                        </label>
                                        <span class="pull-right">
                                            <a href="#" >esqueci minha senha </a> 
                                        </span>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-lg"> Entrar </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <span class="pull-left">
                    Registrar Novo <a href="registrarUsuario.php" >Clique aqui </a> 
                </span>
                <!-- <a href="geral-admin.php" class="btn btn-primary btn-lg">Entrar </a> -->
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"> Fechar </button>
            </div>
        </div>
    </div>
</div>
 <!-- ./myModal -->
