
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Frete para Manaus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><link rel="shortcut icon" href="assets/images/favicon.ico"><![endif]-->
    <link rel="shortcut icon" href="assets/imagens/barco.ico">





    <!-- IMPORTANDO CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/jquery/jquery-ui.min.css"/>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/plugins/sweetalert2/sweetalert2.min.css"/>
    <link href="assets/plugins/slick/slick/slick.css" rel="stylesheet"/>
    <link href="assets/plugins/slick/slick/slick-theme.css" rel="stylesheet"/>
    <link href="assets/plugins/fontawesome/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/plugins/jquerymodal/jquery.modal.min.css" />
    <link href="assets/plugins/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.css"/>


    <!-- IMPORTANDO JS -->
    <script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
    <script src="assets/plugins/jquery/jquery-ui.min.js"></script>
    <script src="assets/plugins/jquery/jquery-ui.custom.min.js"></script>
    <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="assets/plugins/fontawesome/js/all.js"></script>
    <script src="assets/plugins/slick/slick/slick.min.js"></script>
    <script src="assets/plugins/mask/jquery.mask.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jquerymodal/jquery.modal.min.js"></script>
    <script src="assets/plugins/aos/aos.js"></script>

    <script src="assets/js/index.js"></script>
  </head>
  <body>
    <!-- MENU -->
    <?php
      require_once("menu.php");
    ?>
    <div class="corpo">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-12">
              <div data-aos="fade-right" id="convenios">
                  <div id="logos" class="first-item logos">
                    <div class="logo">
                      <img class="logoImg" src="assets/imagens/PortoContainerExportacao.jpg" alt="">
                    </div>
                    <div class="logo">
                      <img class="logoImg" src="assets/imagens/barcoContainer.png" alt="">
                    </div>
                  </div>
                  <i onclick="scrollToQuemSomos()" class="fas fa-arrow-down arrowBottom"></i>
              </div>
          </div>
      </div>
      <div class="container-fluid">
        <div class="row quem-somos">
          <div data-aos="fade-right" class="col-md-8 quem-somos-txt">
            <h2>
              FRETE FÁCIL MANAUS
            </h2>
            <h6>
              UMA MANEIRA DESCOMPLICADA PARA SUA COTAÇÃO
            </h6>
            <p>
              Operamos com cargas fechadas e fracionadas com origem nos Estados do Rio Grande do Sul, Santa Catarina, Paraná, São Paulo, Minas Gerais, Bahia e Pernambuco com destino aos Estados do Amazonas e Roraima, 
              principalmente para Manaus e Boa Vista e possuímos um serviço especial, de fácil cotação.
              </p>
          </div>
          <div data-aos="fade-left" class="col-md-4 quem-somos-img">
            <img class="img-frigorifica" src="assets/imagens/cargueiro.jpg">
          </div>
        </div>
      </div>
      <div class="row card-cotacao">
        <div class="container-fluid">
          <div data-aos="fade-down" class="txt-cotacao">
            <h2>
              FAÇA SUA COTAÇÃO
            </h2>
            <p>FAÇA SUA COTAÇÃO GRÁTIS E SEM COMPROMISSO!</p>
          </div>
          <div data-aos="fade-up" class="btn-cotacao">
            <div class="div-btn-cotacao">
              <b>Fazer cotação</b>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row cards">
          <div class="col-md-4">
            <div data-aos="fade-down-right" class="card-pers">
              <div class="item-img">
                <img class="img-frigorifica" src="assets/imagens/cargueiro.jpg">
              </div>
              <hr>
              <div class="item-text">
                <h2 class="card-tit-padding">
                  CARGA FRACIONADA
                </h2>
                <p>Cargas que não atingem a capacidade do contêiner.</p>
              </div>
              <div class="item-btn">
                <b>Saiba mais</b>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div data-aos="fade-up" class="card-pers">
              <div class="item-img">
                <img class="img-frigorifica" src="assets/imagens/cargueiro.jpg">
              </div>
              <hr>
              <div class="item-text">
                <h2>
                  CARGA REFRIGERADA<br/>OU CONGELADA
                </h2>
                <p>Cargas que exigem controle de temperatura.</p>
              </div>
              <div class="item-btn">
                <b>Saiba mais</b>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div data-aos="fade-down-left" class="card-pers">
              <div class="item-img">
                <img class="img-frigorifica" src="assets/imagens/cargueiro.jpg">
              </div>
              <hr>
              <div class="item-text">
                <h2 class="card-tit-padding">
                  CARGA SECA
                </h2>
                <p>Cargas que não exigem controle de temperatura.</p>
              </div>
              <div class="item-btn">
                <b>Saiba mais</b>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 
          TODO

      <div class="row card-parceiros">
        <div class="container-fluid">
          <div data-aos="fade-down" class="txt-parceiros">
            <h2>
              PARCEIROS
            </h2>
            <p>CARROSEL</p>
          </div>
        </div>
      </div>
      
      -->



       
    </div>
  <?php
    require_once("fixeds.php");
    require("rodape.php");
  ?>
  </body>
</html>
             