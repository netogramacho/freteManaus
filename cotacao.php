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
            require_once("fixeds.php");
            require_once("rodape.php");
        ?>
    </body>
        
</html>