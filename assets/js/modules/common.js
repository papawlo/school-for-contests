jQuery(document).ready(function($) {
//INDEX
    $("#slideshow-destaques").carouFredSel({
        auto: false,
        pagination: $("#slideshow-container .navi"),
        prev: {
            button: $("#slideshow-container .prev")
        },
        next: {
            button: $("#slideshow-container .next")
        }
    });

    $(".links-principais li.area-restrita > a").click(function() {
        if ($(this).parent().hasClass("inativo")) {
            $(this).parent().addClass("ativo").removeClass("inativo");
        } else {
            $(this).parent().addClass("inativo").removeClass("ativo")
        }
        $(".form-login").slideToggle(200);
    });
    // Faz o formulário de login do header descer

    $(".carrinho").click(function() {
        if ($(this).hasClass("inativo")) {
            $(this).addClass("ativo").removeClass("inativo");
        } else {
            $(this).addClass("inativo").removeClass("ativo")
        }
        $(".carrinho-container").slideToggle(200);
    });
    // Faz o carrinho abrir e fechar

    $(".carrinho-container li .bt-excluir").click(function() {
        $(this).parent().animate({"left": "-100%"}, 200);
        $(this).parent().hide(300);
        var that = $(this).parent();
        setTimeout(function() {
            $(that).remove();
            if ($(".carrinho-container li").length == 0) {
                $(".carrinho-container").slideUp(200);
                ;
            }
        }, 800);
    });
    // Faz o item sumir quando se clica no lixo

    $(".carrinho-container .bt-fechar").click(function() {
        $(".carrinho-container").slideUp(200);
        if ($(".carrinho").hasClass("inativo")) {
            $(".carrinho").addClass("ativo").removeClass("inativo");
        } else {
            $(".carrinho").addClass("inativo").removeClass("ativo");
        }
    });


//newsletter com validation
//    $('.form-newsletter').validate({
//        rules: {
//            nome: 'required',
//            email: {
//                email: true,
//                required: true
//            }
//        },
//        messages: {
//            nome: 'Campo Obrigatório',
//            email: {
//                email: 'E-mail Inválido',
//                required: 'Campo Obrigatório'
//            },
//            mensagem: 'Campo Obrigatório'
//        },
//        errorPlacement: function(error, element) {
//        },
//        submitHandler: function(form) {
//            $(form).ajaxSubmit({
//                target: '#response',
//                resetForm: true,
//                success: function(data) {
//                    //$('#response').append(data);
//                }
//            });
//        }
//    });

    $(".form-newsletter").submit(function(event) {

        event.preventDefault();

        var $form = $(this),
                url = $form.attr("action");
        var posting = $.post(url, $form.serialize());

        posting.done(function(data) {
            console.log(data);
//            var content = $(data).find("#content");
//            $("#result").empty().append(content);
        });
    });

});