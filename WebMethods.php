<?php

    require_once("api" . DIRECTORY_SEPARATOR . "email" . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");

    require_once("api" . DIRECTORY_SEPARATOR . "email" . DIRECTORY_SEPARATOR . "cls_email.php");
    
    $mensagem = file_get_contents("assets" . DIRECTORY_SEPARATOR . "emails" . DIRECTORY_SEPARATOR . "teste.html");
    $mensagem = str_replace("TESTANDO", "TESTE", $mensagem);

    $enderecos = array(
        "neto.paulo.po@gmail.com",
        "mau.maciel.gramacho@gmail.com",
        "barbaramacarena01@gmail.com"
    );

    $assunto = "Teste Site";

    $email = new Cls_email();
    $email->assunto = $assunto;
    $email->mensagem = $mensagem;
    $email->enderecos = $enderecos;
    $email->enviarEmail();
?>