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
            $mail->Host       = 'mail.manausfrete.com.br';                   
            $mail->SMTPAuth   = false;                                  
            $mail->Username   = 'contato@manausfrete.com.br';                    
            $mail->Password   = '!contatoMF';                            
            $mail->Port       = 587;         
            $mail->CharSet    = 'UTF-8';
            //PERSONALIZACAO DO REMETENTE 
            $mail->setFrom('contato@manausfrete.com.br', 'Manaus Frete');                      

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