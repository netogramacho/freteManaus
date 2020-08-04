
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Frete para Manaus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="assets/imagens/barco.ico">

    <?php
      require_once("importsJsCss.php");
    ?>

  </head>
  <body>
    <!-- MENU -->
    <?php
      require_once("menu.php");
    ?>
    <div class="corpo">
      <div class="row">
          <div>
              <div id="convenios">
                  <div id="logos" class="first-item logos">
                    <div class="logo">
                      <div class="titulo-principal">
                        <h3>
                          CARGA FRACIONADA, CARGA FECHADA, REFRIGERADA? COTE CONOSCO!
                          </br>
                          TEREMOS O PRAZER DE ATENDER SUA NECESSIDADE!
                        </h3>
                        <a href="cotacao.php">
                          <div class="btn-principal">
                            <b>Fazer Cotacao</b>
                          </div>
                        </a>
                      </div>
                      <img class="logoImg" src="assets/imagens/img-carrosel-estrada.jpg" alt="">
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
              CARGA FRACIONADA, CARGA FECHADA, REFRIGERADA? COTE CONOSCO! 
              </br>
              TEREMOS O PRAZER DE ATENDER SUA NECESSIDADE!
            </h6>
            <p>
              Operamos com cargas fechadas e fracionadas com origem nos Estados do Rio Grande do Sul, Santa Catarina, Paraná, São Paulo, Minas Gerais, Bahia e Pernambuco com destino aos Estados do Amazonas e Roraima, 
              principalmente para Manaus e Boa Vista e possuímos um serviço especial, de fácil cotação.
              </p>
          </div>
          <div data-aos="fade-left" class="col-md-4 quem-somos-img">
            <img class="img-quem-somos" src="assets/imagens/img-porto.jpg">
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
            <a href="cotacao.php">
              <div class="div-btn-cotacao">
                <b>Fazer cotação</b>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row cards">
          <div class="col-md-4">
            <div data-aos="fade-down-right" class="card-pers">
              <div class="item-img">
                <img class="img-frigorifica" src="assets/imagens/img-empilhadera.jpg">
              </div>
              <hr>
              <div class="item-text">
                <h2 class="card-tit-padding">
                  CARGA FRACIONADA
                </h2>
                <p>Cargas que não atingem a capacidade do veículo.</p>
              </div>
              <div class="item-btn">
                <a href="" data-toggle="modal" data-target="#fracionada"><b>Saiba mais</b></a>
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
                <a href="" data-toggle="modal" data-target="#refrigerada"><b>Saiba mais</b></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div data-aos="fade-down-left" class="card-pers">
              <div class="item-img">
                <img class="img-frigorifica" src="assets/imagens/caminhao_cheio.jpg">
              </div>
              <hr>
              <div class="item-text">
                <h2 class="card-tit-padding">
                  CARGA SECA
                </h2>
                <p>Cargas que não exigem controle de temperatura.</p>
              </div>
              <div class="item-btn">
                <a href="" data-toggle="modal" data-target="#seca"><b>Saiba mais</b></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MODAL CARGA FRACIONADA -->
  <div class="modal fade saibaMais" id="fracionada" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">CARGA FRACIONADA</h4>
        </div>
        <hr>
        <div class="modal-body">
          <p>
            O transporte de cargas facionadas acontece quando deseja-se transportar uma pequena 
            quantidade de mercadorias que não atinge a capacidade do contêiner utilizado para transporte, 
            dessa forma, é feito o fracionamento com outras mercadorias do mesmo segmento. Desta maneira, 
            em uma operação são agrupados vários embarques de clientes diferentes.  Nesta modalidade, as 
            cargas podem ser paletizadas (acondicionadas em palets), caixarias, fardos ou peças avulsas.
          </p>
        </div>
        <hr>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- MODAL CARGA REFRIGERADA -->
  <div class="modal fade saibaMais" id="refrigerada" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">CARGA REFRIGERADA OU CONGELADA</h4>
        </div>
        <hr>
        <div class="modal-body">
          <p>
            As cargas refrigeradas ou congeladas exigem controle de temperatura, sendo necessário a 
            refrigeração para manter a integridade do produto em todo o percurso, como carnes e 
            frangos congelados, legumes e verduras refrigerados.
          </p>
        </div>
        <hr>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- MODAL CARGA SECA -->
  <div class="modal fade saibaMais" id="seca" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">CARGA SECA</h4>
        </div>
        <hr>
        <div class="modal-body">
          <p>
            As denominadas 'cargas secas', podem ser perecíveis ou não, como o caso de alimentos 
            que não necessitam de refrigeração, a exemplo do café e dos grãos. Além disso, 
            equipamentos e mercadorias em geral, ou seja, produtos não perecíveis também podem ser 
            transportados nesta modalidade.
          </p>
        </div>
        <hr>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>



       
    </div>
  <?php
    require_once("fixeds.php");
    require("rodape.php");
  ?>
  </body>
</html>
             