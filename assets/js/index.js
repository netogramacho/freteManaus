$(document).ready(function () {
    //ATRASA INICIALIZACAO POR CAUSA DO SLICK - ELE PRECISA INICIAR PRIMEIRO
    //carousel();
    iniciarComponetes();
    iniciarMascara();
    iniciarRodape();
    AOS.init();
});
var phone = '5519988700830';
var DIRETORIO = "includes/";


function iniciarComponetes() {
    //ESCONDER SETA NO SCROLL
    $(window).scroll(function () {
        if ($(document).scrollTop() >= 50) {
            $('.arrowBottom').fadeOut();
        } else {
            $('.arrowBottom').fadeIn();
        }
    });

    //AJUSTAR IMAGEM PRINCIPAL NO RESIZE
    $(window).resize(function(){
        $('.logoImg').css('height', (window.innerHeight - parseInt($('#menu').css('height'))));
    });
    $('.logoImg').css('height', (window.innerHeight - parseInt($('#menu').css('height'))));

    $('.menu_toggle').on('click', function () {
        $('.menu_txt').slideToggle('fast');
    });

    if (window.innerWidth > 800) {
        $('.txt_mobile').removeClass('txt_mobile');
        $('.menu_txt').removeClass('menu_txt');
    }

    $('#btn_email').on('click', function () {
        enviarEmailContato();
    });
    $('#btn_wpp').on('click', function () {
        enviarWpp();
    });
    $('.staticWpp').on('click', function() {
        voltaAnimacaoContato();
    });
    $('.staticEmail').on('click', function() {
        voltaAnimacaoContato();
    });
    $('.fundoContato').on('click', function(){
        voltaAnimacaoContato();
        $('body').css('overflow', '');
        $('body').css('padding-right', '');
    });

    $('.btn_agende_aqui').on('click', function(){
      $('#agendamento_modal').modal({
        fadeDuration: 500,
        fadDelay: 0.50,
        clickClose: false,
        showClose: false,
      });
    });
    $(window).on('load', function(){
      setTimeout(function(){
         $("#img_carregamento").css("-webkit-transform","scale(0.75)");
         $("#img_carregamento").css("-moz-transform","scale(0.75)");
         $("#img_carregamento").css("-o-transform","scale(0.75)");
         $('.loading').find('h1').slideDown();
      }, 500);
      setTimeout(function(){
         $(".loading").fadeOut();
      }, 2000);
    });

    $('#inicio, #princpal_servicos').css('min-height', (window.innerHeight - parseInt($('#menu').css('height'))));
    
    if (screen.width < 640 || screen.height < 480) {
        $('.mov-aos').attr('data-aos', 'fade');
    }
    //CALCULO AUTOMATICO DOS VALORES NA COTACAO
    $('#formCotacao input[name=prod-valor-tot]').focusout(function(){
        console.log($('#formCotacao input[name=prod-valor-tot]').val());
        if ($('#formCotacao input[name=prod-valor-tot]').val() != "R$ 0,00") {
            var aux = parseFloat($('#formCotacao input[name=prod-valor-tot]').val().replace("R$ ","").replace(".","").replace(",","."));
            var result = aux/$('#formCotacao input[name=emb-quantidade]').val();
            $('#formCotacao input[name=prod-valor-unit]').val(result.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}));
            $('#formCotacao input[name=prod-valor-unit]').prop('disabled', true);
        } else {
            $('#formCotacao input[name=prod-valor-unit]').val("");
            $('#formCotacao input[name=prod-valor-unit]').prop('disabled', false);
        }
    });

    $('#formCotacao input[name=prod-valor-unit]').focusout(function(){
        console.log($('#formCotacao input[name=prod-valor-unit]').val());
        if ($('#formCotacao input[name=prod-valor-unit]').val() != "R$ 0,00") {
            var aux = parseFloat($('#formCotacao input[name=prod-valor-unit]').val().replace("R$ ","").replace(".","").replace(",","."));
            var result = aux*$('#formCotacao input[name=emb-quantidade]').val();
            $('#formCotacao input[name=prod-valor-tot]').val(result.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}));
            $('#formCotacao input[name=prod-valor-tot]').prop('disabled', true);
        } else {
            $('#formCotacao input[name=prod-valor-tot]').val("");
            $('#formCotacao input[name=prod-valor-tot]').prop('disabled', false);
        }
    });

}

var objEmail = {
    nome: '',
    telefone: '',
    email: '',
    mensagem: ''
}
var objWpp = {
    nome: '',
    mensagem: ''
}



function clearInputs(classe) {
    $('#' + classe + '_nome').val('')
    $('#' + classe + '_telefone').val('')
    $('#' + classe + '_email').val('')
    $('#' + classe + '_msg').val('')
}


// function carousel() {
//     $('.logoImg').css('height', (window.innerHeight - parseInt($('#menu').css('height'))));
//     //$('.logos, .logo img').css('width', window.innerWidth);
//     setTimeout(() => {
//         $('.first-item').slick({
//           arrows: true,
//           speed: 1000,
//         });
//         $('.slick-prev').html('<i class="fas fa-arrow-left"></i>');
//         $('.slick-next').html('<i class="fas fa-arrow-right"></i>');
//     }, 500);
// }


function verificaCampoVazio(objDM, classe) {
    var valido = true;
    if (objDM.nome == '') {
        $('#' + classe + '_nome').css('border', '1px solid red');
        valido = false;
    } else {
        $('#' + classe + '_nome').css('border', 'none');
    }
    if (objDM.email == '') {
        $('#' + classe + '_email').css('border', '1px solid red');
        valido = false;
    } else {
        $('#' + classe + '_email').css('border', 'none');
    }
    if (objDM.telefone == '') {
        $('#' + classe + '_telefone').css('border', '1px solid red');
        valido = false;
    } else {
        $('#' + classe + '_telefone').css('border', 'none');
    }
    if (objDM.mensagem == '') {
        $('#' + classe + '_msg').css('border', '1px solid red');
        valido = false;
    } else {
        $('#' + classe + '_msg').css('border', 'none');
    }
    return valido;
}



function iniciarMascara() {
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    }, spOptions = {
        onKeyPress: function (val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.sp_celphones').mask(SPMaskBehavior, spOptions);
    $('.money').maskMoney({symbol:'R$ ', showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
}
//SCROLL PARA FORA DA PAGINA DE COMECO (SETA PARA BAIXO)
function scrollToQuemSomos(){
    $("html, body").delay(200).animate({scrollTop: (window.innerHeight - parseInt($('#menu').css('height')))}, 1000);
}




//ANIMACAO DE BOTOES ESTATICOS PARA O CENTRO
function exibirContato(){
    $('body').css('padding-right', '15px');
    $('body').css('overflow', 'hidden');
    $('.fundoContato').fadeIn('fast');
    $('.staticWpp').addClass('staticWppAnimation');
    $('.staticWpp').removeClass('staticWppAnimationVolta');
    $('.staticWpp').removeClass('staticWppPosOne');
    $('.staticWpp').addClass('staticWppPosTwo');


    $('.staticEmail').addClass('staticEmailAnimation');
    $('.staticEmail').removeClass('staticEmailAnimationVolta');
    $('.staticEmail').removeClass('staticEmailPosOne');
    $('.staticEmail').addClass('staticEmailPosTwo');


    $('.staticEmail').addClass('voltarAnimacao');
    $('.staticWpp').addClass('voltarAnimacao');
}

//ANIMACAO DE BOTOES ESTATICOS PARA A POSICAO ORIGINAL
function voltaAnimacaoContato(){
    $('.fundoContato').fadeOut('fast');
    if ($('.staticWpp').hasClass('voltarAnimacao')) {
        $('.staticWpp').addClass('staticWppAnimationVolta');
        $('.staticWpp').removeClass('staticWppAnimation');
        $('.staticWpp').removeClass('staticWppPosTwo');
        $('.staticWpp').addClass('staticWppPosOne');
    }


    if ($('.staticEmail').hasClass('voltarAnimacao')) {   
        $('.staticEmail').addClass('staticEmailAnimationVolta');
        $('.staticEmail').removeClass('staticEmailAnimation');
        $('.staticEmail').removeClass('staticEmailPosTwo');
        $('.staticEmail').addClass('staticEmailPosOne');
    }


    $('.staticEmail').removeClass('voltarAnimacao');
    $('.staticWpp').removeClass('voltarAnimacao');
}


//DEFINE UM TAMANHO MINIMO PARA O CORPO DO SITE
function iniciarRodape(){
    $('.corpo').css('min-height', (window.innerHeight - parseInt($('#menu').css('height')) - parseInt($('.rodape').css('height'))))
}


//SCROLL PARA O TOPO DO SITE
function voltarTopo(){
    $("html, body").delay(200).animate({scrollTop: 0}, 1000);
}


//ENVIO DE EMAIL DE CONTATO
function enviarEmailContato(){
    $('#btn_email').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
    $('#btn_email').attr('disabled', true);
    var dados = $("#formEmail").serializeArray();
    console.log(dados);
    if (!conferirForm("formEmail")) {
        swal({
            title: 'Atenção!',
            text: "Preencha corretamente os campos em vermelho.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#66AAD7',
            confirmButtonText: 'Ok',
        }).then(function () {
            $('#btn_email').html('<b>Enviar</b>');
            $('#btn_email').attr('disabled', false);
        });
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: DIRETORIO + "enviarEmailContato.php",
            dataType: "json",
            data: {data: JSON.stringify(dados)},
        }).done(function (ret) {
            clearInputs('email');
            swal({
                title: ret.title,
                text: ret.message,
                type: ret.type,
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                    if (ret.sucesso) {
                        clearInputs('email');
                    }
                    $('#btn_email').html('<b>Enviar</b>');
                    $('#btn_email').attr('disabled', false);
            });
        }).fail(function (response) {
            swal({
                title: 'Erro!',
                text: "Ocorreu um erro ao enviar mensagem.",
                type: 'error',
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                $('#btn_email').html('<b>Enviar</b>');
                $('#btn_email').attr('disabled', false);
            });
        });
    }
}


//ENVIO DE EMAIL DE CONTATO
function enviarEmailCotacao(){
    var myform = $('#formCotacao');
    var disabled = myform.find(':input:disabled').removeAttr('disabled');
    var dados = $("#formCotacao").serializeArray();
    var verifica = conferirForm("formCotacao");
    disabled.attr('disabled','disabled');
    $('#btn_cotacao').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
    $('#btn_cotacao').attr('disabled', true);
    if (!verifica) {
        swal({
            title: 'Atenção!',
            text: "Preencha corretamente os campos em vermelho.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#66AAD7',
            confirmButtonText: 'Ok',
        }).then(function () {
        });
        $('#btn_cotacao').html('<b>Enviar</b>');
        $('#btn_cotacao').attr('disabled', false);
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: DIRETORIO + "enviarEmailCotacao.php",
            dataType: "json",
            data: {data: JSON.stringify(dados)},
        }).done(function (ret) {
            clearInputs('email');
            swal({
                title: ret.title,
                text: ret.message,
                type: ret.type,
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                    if (ret.sucesso) {
                        clearInputs('email');
                    }
                    $('#btn_cotacao').html('<b>Enviar</b>');
                    $('#btn_cotacao').attr('disabled', false);
            });
        }).fail(function (response) {
            swal({
                title: 'Erro!',
                text: "Ocorreu um erro ao enviar mensagem.",
                type: 'error',
                showCancelButton: false,
                confirmButtonColor: '#66AAD7',
                confirmButtonText: 'Ok',
                }).then(function () {
                $('#btn_cotacao').html('<b>Enviar</b>');
                $('#btn_cotacao').attr('disabled', false);
            });
        });
    }
}
