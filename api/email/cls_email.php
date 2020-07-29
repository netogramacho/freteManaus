<?php

Class Cls_email {

    

    public $enderecos;
    public $mensagem;
    public $assunto;
    
    public function enviarEmail(){
        $mail = new PHPMailer(true);

        try {
            //CONFIGURACOES DO EMAIL QUE VAI FAZER O ENVIO       
                        
            $mail->isSMTP();                                           
            $mail->Host       = 'mail.macarencacroche.com';                   
            $mail->SMTPAuth   = false;                                  
            $mail->Username   = 'contato@macarenca.com';                    
            $mail->Password   = '!Maca2512';                            
            $mail->Port       = 587;         

            //PERSONALIZACAO DO REMETENTE 
            $mail->setFrom('contato@macarenca.com', 'Macarena Croche');                      

            //RECEPTORES
            foreach ($this->enderecos as $endereco) {
                $mail->addAddress($endereco);
            }

            // ARQUIVOS ANEXO


            // CONTEUDO
            $mail->isHTML(true);
            $mail->Subject = $this->assunto;
            $mail->Body    = $this->mensagem;
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
?>