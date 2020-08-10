<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Frete para Manaus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if IE]><link rel="shortcut icon" href="assets/images/favicon.ico"><![endif]-->
        <link rel="shortcut icon" href="assets/imagens/barco.ico" sizes="16x16">
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
          <div class="container-fluid form_cotacao">
            <h4>SUAS INFORMAÇÕES</h4>
            <form id="formCotacao" action="return false;">
              <div class="row">
                <div class="col-md-4 item_cotacao">
                  <label>NOME</label>
                  <div class="item_campo">
                    <input type="text" id="cot-nome" name="nome" placeholder="Seu nome" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>E-MAIL</label>
                  <div class="item_campo">
                    <input type="email" id="cot-email" name="email" placeholder="Seu e-mail" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>CELULAR</label>
                  <div class="item_campo">
                    <input class="sp_celphones" type="tel" id="cot-cel" name="celular" placeholder="Seu numero de celular" required></input>
                  </div>
                </div>
              </div>
              <h4>CARGA</h4>
              <div class="row">
                <div class="col-md-4 item_cotacao">
                  <label>ORIGEM DA COLETA</label>
                  <div class="item_campo">
                    <input type="text" id="cot-orig-col"  name="carga-origem" placeholder="Origem da coleta" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>DESTINO DA COLETA</label>
                  <div class="item_campo">
                    <input type="text" id="cot-dest-col" name="carga-destino" placeholder="Destino da coleta" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>TIPO DE CARGA</label>
                  <div class="item_campo">
                    <select id="tipoCarga" name="carga-tipo" required>
                      <option value="">SELECIONE</option>
                      <option value="Fracionada">CARGA FRACIONADA</option>
                      <option value="Frigorífica">CARGA REFRIGERADA OU CONGELADA </option>
                      <option value="Seca">CARGA SECA</option>
                    </select>
                  </div>
                </div>
              </div>
              <h4>EMBALAGEM</h4>
              <div class="row">
                <div class="col-md-4 item_cotacao">
                  <label>TIPO DE EMBALAGEM</label>
                  <div class="item_campo">
                    <select id="tipoEmb" name="emb-tipo" required>
                      <option value="">SELECIONE</option>
                      <option value="Caixaria">CAIXARIA</option>
                      <option value="Fardo">FARDO</option>
                      <option value="Palet">PALET</option>
                      <option value="Peças avulsas">PEÇAS AVULSAS</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>QUANTIDADE</label>
                  <div class="item_campo">
                    <input type="number" id="cot-emb-quant" name="emb-quantidade" placeholder="Quantidade de embalagens" required></input>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>PESO</label>
                  <div class="item_medida">
                    <input type="number" id="cot-emb-peso" name="emb-peso" placeholder="Peso da embalagem" required></input>
                    <span>kg</span>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>ALTURA</label>
                  <div class="item_medida">
                    <input type="number" id="cot-emb-alt" name="emb-altura" placeholder="Altura da embalagem"></input>
                    <span>m</span>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>LARGURA</label>
                  <div class="item_medida">
                    <input type="number" id="cot-emb-larg" name="emb-largura" placeholder="Largura da embalagem"></input>
                    <span>m</span>
                  </div>
                </div>
                <div class="col-md-4 item_cotacao">
                  <label>PROFUNDIDADE</label>
                  <div class="item_medida">
                    <input type="number" id="cot-emb-comp" name="emb-profundidade" placeholder="Profundidade da embalagem"></input>
                    <span>m</span>
                  </div>
                </div>
              </div>
              <h4>PRODUTO</h4>
              <div class="row">
                <div class="col-md-6 item_cotacao">
                  <label>VALOR UNITÁRIO</label>
                  <div class="item_campo">
                    <input class="money" type="text" id="prod-valor-unit" name="prod-valor-unit" placeholder="Valor de uma unidade" required></input>
                  </div>
                </div>
                <div class="col-md-6 item_cotacao">
                  <label>VALOR TOTAL</label>
                  <div class="item_campo">
                    <input class="money" type="text" id="prod-valor-tot" name="prod-valor-tot" placeholder="Valor total" required></input>
                  </div>
                </div>
                <div class="col-md-6 item_cotacao">
                  <label>DESCRIÇÃO DO PRODUTO</label>
                  <div class="item_campo_txtarea">
                    <textarea id="cot-prod-desc" name="prod-descricao" placeholder="Descrição do produto" required></textarea>
                  </div>
                </div>
                <div class="col-md-6 item_cotacao">
                  <label>OBSERVAÇÕES DO PRODUTO</label>
                  <div class="item_campo_txtarea">
                    <textarea id="cot-prod-obs" name="prod-observacoes" placeholder="Observações do produto"></textarea>
                  </div>
                </div>
              </div>
              <div class="div_btn">
                <button class="btn btn_Padrao" id="btn_cotacao" onclick="enviarEmailCotacao();">
                    <b>
                    Enviar
                    </b>
                </button>
              </div>
            </form>
          </div>
        </div>
        <?php
            require_once("fixeds.php");
            require_once("rodape.php");
        ?>
    </body>
        
</html>