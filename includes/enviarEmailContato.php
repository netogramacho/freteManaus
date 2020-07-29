<?php
    require_once(".." . DIRECTORY_SEPARATOR . "api" . DIRECTORY_SEPARATOR . "email" . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");
    require_once(".." . DIRECTORY_SEPARATOR . "api" . DIRECTORY_SEPARATOR . "email" . DIRECTORY_SEPARATOR . "cls_email.php");
    
    //EMAIL PARA ANDRESSA
    //CARREGANDO ARQUIVO HTML E FAZENDO ALTERACOES 
    $corpoEmail = file_get_contents(".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "emails" . DIRECTORY_SEPARATOR . "teste.html");
    $corpoEmail = str_replace("TESTANDO", "TESTE", $corpoEmail);

    $enderecos = array(
        //"triunfocabotagem@gmail.com",
        //"operacional@triunfocabotagem.com.br",
        //"comercial@triunfocanotagem.com.br"
        "neto.paulo.po@gmail.com"
    );

    $assunto = "Novo contato de cliente";

    $email = new Cls_email();
    $email->assunto = $assunto;
    $email->mensagem = $corpoEmail;
    $email->enderecos = $enderecos;
    
    if($email->enviarEmail()){
        $retorno = array(
            "title" => "Sucesso",
            "message" => "Mensagem enviada",
            "type" => "success"
        );
    } else {
        $retorno = array(
            "title" => "Erro",
            "message" => "Mensagem nao enviada",
            "type" => "error"
        ); 
    }
    
    echo json_encode($retorno);
    
?>