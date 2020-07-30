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
          <div class="container-fluid form_cotacao">
            <h4>SUAS INFORMAÇÕES</h4>
            <div class="row">
              <div class="col-md-4 item_cotacao">
                <label>NOME</label>
                <input type="text" id="cot-nome" placeholder="Seu nome"></input>
              </div>
              <div class="col-md-4 item_cotacao">
                <label>E-MAIL</label>
                <input type="email" id="cot-email" placeholder="Seu e-mail"></input>
              </div>
              <div class="col-md-4 item_cotacao">
                <label>CELULAR</label>
                <input class="sp_celphones" type="tel" id="cot-cel" placeholder="Seu numero de celular"></input>
              </div>
            </div>
            <h4>CARGA</h4>
            <div class="row">
              <div class="col-md-4 item_cotacao">
                <label>ORIGEM DA COLETA</label>
                <input type="text" id="cot-orig-col" placeholder="Origem da coleta"></input>
              </div>
              <div class="col-md-4 item_cotacao">
                <label>DESTINO DA COLETA</label>
                <input type="text" id="cot-dest-col" placeholder="Destino da coleta"></input>
              </div>
              <div class="col-md-4 item_cotacao">
                <label>TIPO DE CARGA</label>
                <select name="tipoCarga" id="tipoCarga">
                  <option value="">SELECIONE</option>
                  <option value="fracionada">CARGA FRACIONADA</option>
                  <option value="frigorifica">CARGA REFRIGERADA OU CONGELADA </option>
                  <option value="seca">CARGA SECA</option>
                </select>
              </div>
            </div>
            <h4>EMBALAGEM</h4>
            <div class="row">
              <div class="col-md-3 item_cotacao">
                <label>ALTURA</label>
                <input type="number" id="cot-emb-alt" placeholder="Altura da embalagem"></input>
              </div>
              <div class="col-md-3 item_cotacao">
                <label>COMPRIMENTO</label>
                <input type="number" id="cot-emb-comp" placeholder="Comprimento da embalagem"></input>
              </div>
              <div class="col-md-3 item_cotacao">
                <label>LARGURA</label>
                <input type="number" id="cot-emb-larg" placeholder="Largura da embalagem"></input>
              </div>
              <div class="col-md-3 item_cotacao">
                <label>PESO</label>
                <input type="number" id="cot-emb-peso" placeholder="Peso da embalagem"></input>
              </div>
            </div>
            <h4>PRODUTO</h4>
            <div class="row">
              <div class="col-md-6 item_cotacao">
                <label>DESCRIÇÃO DO PRODUTO</label>
                <textarea id="cot-prod-desc" placeholder="Descrição do produto"></textarea>
              </div>
              <div class="col-md-6 item_cotacao">
                <label>OBSERVAÇÕES DO PRODUTO</label>
                <textarea id="cot-prod-obs" placeholder="Observações do produto"></textarea>
              </div>
            </div>
          </div>
        </div>
        <?php
            require_once("rodape.php");
        ?>


        <!-- MODAL EMAIL -->
        <div class="row modalEmail">
          <div class="close-x">
            <i class="fas fa-times"></i>
          </div>
            <h4 class="text_center">Entre em contato por email:</h4>
          <div class="col-md-12">
              <div class="container-fluid">
                  <div class="row tit_duvidas">
                      <div class="col-md-12">
                      <div class="formulario">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 col-2">
                                <i class="far fa-2x fa-user-circle"></i>
                                </div>
                                <div class="col-md-10 col-10">
                                <input placeholder="Seu nome" id="email_nome" type="text" />
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="formulario">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 col-2">
                                <i class="fas fa-2x fa-phone-square"></i>
                                </div>
                                <div class="col-md-10 col-10">
                                <input class="sp_celphones" placeholder="Telefone" id="email_telefone" type="tel" />
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="formulario">
                      <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-2 col-2">
                                <i class="fas fa-2x fa-envelope-square"></i>
                              </div>
                              <div class="col-md-10 col-10">
                                <input placeholder="E-mail" id="email_email" type="text" />
                              </div>
                            </div>
                          </div>
                      </div>
                      </div>
                      <div class="formulario_msg">
                      <div class="row">
                          <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-2 col-2">
                              <i class="fas fa-2x fa-comments"></i>
                              </div>
                              <div class="col-md-10 col-10">
                              <textarea class="txt_Msg" id="email_msg" placeholder="Mensagem" id="" type="text"></textarea>
                              </div>
                          </div>
                          </div>
                      </div>
                      </div>
                      <div class="div_btn">
                      <button class="btn btn_Padrao" id="btn_email">
                          <b>
                          Enviar
                          </b>
                      </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

      <!-- MODAL WHATS APP -->
      <div class="modalWpp">
        <div class="close-x">
          <i class="fas fa-times"></i>
        </div>
        <h4>Entre em contato por WhatsApp:</h4>
        <div class="container-fluid">
          <div class="row tit_duvidas">
            <div class="col-12">
              </div>
              <div class="formulario">
                <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-2 col-2">
                          <i class="far fa-2x fa-user-circle"></i>
                      </div>
                      <div class="col-md-10 col-10">
                          <input placeholder="Seu nome" id="wpp_nome" type="text" />
                      </div>
                  </div>
                </div>
              </div>
              <div class="formulario_msg">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-2 col-2">
                                  <i class="fas fa-2x fa-comments"></i>
                              </div>
                              <div class="col-md-10 col-10">
                                  <textarea class="txt_Msg" placeholder="Mensagem" id="wpp_msg" type="text"></textarea>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="div_btn_wpp">
                <button class="btn" id="btn_wpp">
                  <i class="fab fa-3x fa-whatsapp-square"></i>
                </button>
              </div>
          </div>
        </div> 
      </div> 


      <!-- BOTOES ESTATICOS -->
      <div class="staticWpp staticWppPosOne">
        <i class="fab fa-whatsapp-square"></i>
      </div>
      <div class="staticEmail">
      <i class="fas fa-envelope"></i>
      </div>



      <!-- FUNDOS -->
      <div class="fundoModal"></div>
      <div class="fundoContato"></div>
    </body>
        
</html>