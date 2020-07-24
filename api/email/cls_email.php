<?php

require "vendor/autoload.php";

Class Cls_email {

    
    public function enviarEmail(){
        $mail = new PHPMailer(true);

        try {
            //CONFIGURACOES DO EMAIL QUE VAI FAZER O ENVIO
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
            $mail->isSMTP();                                           
            $mail->Host       = 'mail.macarencacroche.com';                   
            $mail->SMTPAuth   = false;                                  
            $mail->Username   = 'contato@macarenca.com';                    
            $mail->Password   = '!Maca2512';                            
            $mail->Port       = 587;              
            $mail->setFrom('contato@macarenca.com', 'Macarena Croche');                      

            //RECEPTORES
            $mail->addAddress('neto.paulo.po@gmail.com');

            // ARQUIVOS ANEXO

            // CONTEUDO
            $mail->isHTML(true);
            $mail->Subject = 'Assunto';
            $mail->Body    = file_get_contents("../../assets/emails/teste.html");
            $mail->Body    = str_replace("BOBINHA", "LINDINHA", $mail->Body);
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent.";
        }

    }

    
}
?>