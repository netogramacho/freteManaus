$(document).ready(function () {
    //ATRASA INICIALIZACAO POR CAUSA DO SLICK - ELE PRECISA INICIAR PRIMEIRO
    carousel();
    setTimeout(() => {
        iniciarComponetes();
        iniciarMascara();
        AOS.init();
    }, 500);
});
var phone = '5519988700830';
var DIRETORIO = window.location.href + "/includes/";


function iniciarComponetes() {
    $(window).scroll(function () {
        if ($(document).scrollTop() >= 50) {
            $('.arrowBottom').fadeOut();
        } else {
            $('.arrowBottom').fadeIn();
        }
    })

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
        abrirModalWpp();
    });
    $('.staticEmail').on('click', function() {
        abrirModalEmail();
    });
    $('.fundoModalWpp').on('click', function() {
         $(this).fadeOut('fast');
         $('.modalWpp').fadeOut('fast');
    });
    $('.close-x').on('click', function(){
        $('.fundoModalWpp').fadeOut('fast');
        $('.modalWpp').fadeOut('fast');
        $('.fundoModalEmail').fadeOut('fast');
        $('.modalEmail').fadeOut('fast');
    });
    $('.fundoModalEmail').on('click', function() {
         $(this).fadeOut('fast');
         $('.modalEmail').fadeOut('fast');
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


function carousel() {
    $('.logoImg').css('height', (window.innerHeight - parseInt($('#menu').css('height'))));
    //$('.logos, .logo img').css('width', window.innerWidth);
    setTimeout(() => {
        $('.first-item').slick({
          arrows: true,
        });
        $('.slick-prev').html('<i class="fas fa-arrow-left"></i>');
        $('.slick-next').html('<i class="fas fa-arrow-right"></i>');
    }, 500);
}


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


function validateEmail(sEmail) {

    var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
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
}

function enviarWpp() {
    $('#btn_wpp').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
    $('#btn_wpp').attr('disabled', 'disabled');

    objWpp.nome = $('#wpp_nome').val();
    objWpp.mensagem = $('#wpp_msg').val().toLowerCase();

    if (!verificaCampoVazio(objWpp, 'wpp')) {
        swal({
            title: 'Atenção!',
            text: "Preencha os campos em vermelho.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#66AAD7',
            confirmButtonText: 'Ok',
        }).then(function () {
            $('#btn_wpp').html('<i class="fab fa-3x fa-whatsapp-square"></i>');
            $('#btn_wpp').removeAttr('disabled');
        });
        return
    } else {
        window.open('https://api.whatsapp.com/send?phone=' + phone + '&text=Olá, me chamo ' + objWpp.nome + ' e gostaria de saber: ' + objWpp.mensagem, '_blank');
        $('#btn_wpp').html('<i class="fab fa-3x fa-whatsapp-square"></i>');
        $('#btn_wpp').removeAttr('disabled');
        clearInputs('wpp')
    }

}

function abrirModalWpp() {
    $('.fundoModalWpp').fadeToggle('fast');
    $('.modalWpp').fadeToggle('fast');
}
function abrirModalEmail(){
    $('.fundoModalEmail').fadeToggle('fast');
    $('.modalEmail').fadeToggle('fast');
}


function enviarEmailContato(){
    $('#btn_email').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>');
    $('#btn_email').attr('disabled', 'disabled');

    objEmail.nome = $('#email_nome').val();
    objEmail.telefone = $('#email_telefone').val();
    objEmail.email = $('#email_email').val();
    objEmail.mensagem = $('#email_msg').val();

    if (!verificaCampoVazio(objEmail, 'email')) {
        swal({
            title: 'Atenção!',
            text: "Preencha os campos em vermelho.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#66AAD7',
            confirmButtonText: 'Ok',
        }).then(function () {
            $('#btn_email').html('<b>Enviar</b>');
            $('#btn_email').removeAttr('disabled');
        });
        return
    } else if (!validateEmail(objEmail.email)) {
        $('#email_email').css('border', '1px solid red');
        swal({
            title: 'Atenção!',
            text: "Email Incorreto, preencha novamente.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#66AAD7',
            confirmButtonText: 'Ok',
        }).then(function () {
            $('#btn_email').html('<b>Enviar</b>');
            $('#btn_email').removeAttr('disabled');
        });
        return
    } else {
        $.ajax({
            type: "POST",
            url: DIRETORIO + "enviarEmailContato.php",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: "{}",
        }).done(function (ret) {
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
                    $('#btn_email').removeAttr('disabled');
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
                $('#btn_email').removeAttr('disabled');
            });
        });
    }
    clearInputs('email');
}

function scrollToQuemSomos(){
    $("html, body").delay(200).animate({scrollTop: (window.innerHeight - parseInt($('#menu').css('height')))}, 1000);
}


function teste(){
    $('.staticWpp').addClass('staticWppAnimation');
    setTimeout(() => {
        $('.staticWpp').addClass('staticWppPosTwo');
        $('.staticWpp').removeClass('staticWppPosOne');
        $('.staticWpp').removeClass('staticWppAnimationVolta');
    }, 2000);
}

function volta(){
    $('.staticWpp').addClass('staticWppAnimationVolta');
    setTimeout(() => {
        $('.staticWpp').addClass('staticWppPosOne');
        $('.staticWpp').removeClass('staticWppPosTwo');
        $('.staticWpp').removeClass('staticWppAnimation');
    }, 2000);
}