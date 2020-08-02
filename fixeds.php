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
                      <form id="formEmail" action="enviarEmail()">
                      <div class="formulario">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 col-2">
                                <i class="far fa-2x fa-user-circle"></i>
                                </div>
                                <div class="col-md-10 col-10">
                                    <input placeholder="Seu nome" id="email_nome" type="text" name="nome"/>
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
                                <input class="sp_celphones" placeholder="Telefone" id="email_telefone" type="tel" name="celular" />
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
                                <input placeholder="E-mail" id="email_email" type="text" name="email"/>
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
                                <textarea class="txt_Msg" id="email_msg" placeholder="Mensagem" id="" type="text" name="msg" form='formEmail'></textarea>
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
                    </form>
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
                <form id="formWpp" action="return false">
                <div class="formulario">
                <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-2 col-2">
                          <i class="far fa-2x fa-user-circle"></i>
                      </div>
                      <div class="col-md-10 col-10">
                          <input placeholder="Seu nome" id="wpp_nome" name="nome" type="text" />
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
                                  <textarea class="txt_Msg" placeholder="Mensagem" id="wpp_msg" type="text" name="msg" form="formWpp"></textarea>
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
              </form>
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