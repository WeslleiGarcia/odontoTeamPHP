<!DOCTYPE html>
<html lang="en">
<?php 
    require_once 'config.php';
    require_once 'Consulta.php';

    $consulta = consulta::getInstance(Conexao::getInstance()); 

?>
<?php include (HEAD_TEMPLATE); ?>
<body id="page-top" class="index">
    <?php include (NAV_INDEX_TEMPLATE); ?>
    <?php include (HEADER_TEMPLATE); ?>

    <!-- Services Section -->
    <section id="services">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Planos e Convênios</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <!-- Pricing Table with Columns - START -->
                <div class="col-sm-4 col-md-4">
                    <div class="option">
                        <div class="option-title">
                            <h3>MultPrev</h3>
                            <span>Sorriso Pleno</span>
                        </div>
                        <div class="option-price">
                            <span class="price">R$50</span>
                            <span class="period">por mês</span>
                        </div>
                        <div class="option-list">
                            <ul class="item-list">
                                <li><strong>1GB</strong> Urgencia</li>
                                <li><strong>0</strong> Exame</li>
                                <li><strong>2</strong> Processo Preventivo </li>
                                <li><strong>4</strong> Periodontodia</li>
                                <li><strong>4</strong> Cirutgia</li>
                            </ul>
                            <button type="button" class="btn btn-success big"><i class="fa fa-hand-o-right hided-icon big"></i> contratar</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="option">
                        <div class="option-title">
                            <h3>MultPlus</h3>
                            <span>Sorriso  Seguro</span>
                        </div>

                        <div class="option-price">
                            <span class="price">R$99</span>
                            <span class="period">por mês</span>
                        </div>

                        <div class="option-list">
                            <ul class="item-list">
                                <li><strong>1GB</strong> Urgencia</li>
                                <li><strong>0</strong> Exame</li>
                                <li><strong>2</strong> Processo Preventivo </li>
                                <li><strong>4</strong> Periodontodia</li>
                                <li><strong>4</strong> Cirutgia</li>
                            </ul>
                            <button type="button" class="btn btn-success big"><i class="fa fa-hand-o-right hided-icon big"></i> contratar</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="option">
                        <div class="option-title">
                            <h3>MultMaster</h3>
                            <span>Sorriso Saudável</span>
                        </div>

                        <div class="option-price">
                            <span class="price">R$150</span>
                            <span class="period">por mês</span>
                        </div>

                        <div class="option-list">
                            <ul class="item-list">
                                <li><strong>1GB</strong> Urgencia</li>
                                <li><strong>0</strong> Exame</li>
                                <li><strong>2</strong> Processo Preventivo </li>
                                <li><strong>4</strong> Periodontodia</li>
                                <li><strong>4</strong> Cirutgia</li>
                            </ul>
                            <button type="button" class="btn btn-success big"><i class="fa fa-hand-o-right hided-icon big"></i> contratar</button>
                        </div>
                    </div>
                </div>
        <!-- Pricing Table with Columns - END -->
    </section>
    
    <!-- you need to include the shieldui css and js assets in order for the grids to work -->
    <link rel="stylesheet" type="text/css" href="http://www.prepbootstrap.com/Content/shieldui-lite/dist/css/light/all.min.css" />
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/shieldui-lite/dist/js/shieldui-lite-all.min.js"></script>
    
    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/uniodonto.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/unibanco.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/unimed.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/hapvida.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
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
                        <div class="well well-sm">
                            <strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong>
                        </div>

                        <form role="form" name="formMarcarConsulta" method="POST" action="funcoesGerais.php"> <!-- marcarConsulta.php name="formMarcarConsulta" method="POST" action="funcoesGerais.php"-->
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
                        </form>
                    </div>

                <div class="col-lg-3">
                </div>
            </div>
        </div>
    </section>
    <!--pop-up Modal windows -->
    <div class="modal fade alert" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Finalizar Marcar Consulta</h3>
            </div>
            <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome de usuario</label>
                    <input type="text" class="form-control" id="user-email1" placeholder="login">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="user-email2" placeholder="senha">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Lembrar Login
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary center-block">Finalizar Marcação</button> <a href= "cadastrarCliente.php">não sou cliente </a>
                </form>
            </div>
        </div>
      </div>
    </div>
    <!--Fim pop-up Modal windows -->

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sobre</h2>
                    <h3 class="section-subheading text-muted">Odonto Team: Clínica Odontológica</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/logoOdontoTeam200x200.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2015</h4>
                                    <h4 class="subheading">O Inicio</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Tudo inicio com a ideia de dois amigos que queriam agilizar o processo de marcação de consulta em clínicas odontológicas e facilitar a comunicação entre clínicas e pacientes.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Equipe</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/WeslleiGarcia.jpg" class="img-responsive img-circle" alt="">
                        <h4>Wesllei Garcia</h4>
                        <p class="text-muted">Designer & Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                         <!-- <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/CaioCesar.jpg" class="img-responsive img-circle" alt="">
                            <h4>Caio Cesar Lacerda</h4>
                            <p class="text-muted">Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-github"></i></a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contato</h2>
                    <h3 class="section-subheading text-muted"><span class="glyphicon glyphicon-phone"></span>+55 92 36248954 <span class="glyphicon glyphicon-phone"></span> +55 92 994284919</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nome *" id="name" required data-validation-required-message="Por favor, insira seu  nome.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Por favor, insira seu  email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Telefone *" id="phone" required data-validation-required-message="Por favor, insira o telefone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensagem *" id="message" required data-validation-required-message="Por favor, insira sua mensagem."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    
    <?php include (FOOTER_TEMPLATE); ?>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("#order1").shieldQRcode({
                mode: "byte",
                size: 150,
                value: "https://somesite/order?plan=1"
            });
            $("#order2").shieldQRcode({
                mode: "byte",
                size: 150,
                value: "https://somesite/order?plan=2"
            });
            $("#order3").shieldQRcode({
                mode: "byte",
                size: 150,
                value: "https://somesite/order?plan=3"
            });
        });
    </script>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
