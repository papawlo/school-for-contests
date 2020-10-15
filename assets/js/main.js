jQuery(document).ready(function($) {
//COMMON
//
    var page = 2;
    $('.saiba-mais,.ver-todos').hover(
            function() {
                $(this).find('svg').stop().animate({left: '10px'});
            },
            function() {
                $(this).find('svg').stop().animate({left: '0px'});
            }
    );
    // fitVids.
    $('.conteudo').fitVids();
    // Responsive wp_video_shortcode().
    $('.wp-video-shortcode').parent('div').css('width', 'auto');
    $('#mensagens-de-retorno').click(function() {
        $(this).toggleClass("none");
    });
    //WOOCOMMERCE

//COMMOM
    $(".links-principais li.area-restrita > a, .links-principais li.usuario-logado > a").click(function() {
        if ($(this).parent().hasClass("inativo")) {
            $(this).parent().addClass("ativo").removeClass("inativo");
        } else {
            $(this).parent().addClass("inativo").removeClass("ativo")
        }
        $(".form-login").slideToggle(200);
        $(".lista-opcoes").slideToggle(200);
    });
    // Faz o formulário de login do header descer

    $(document).on('click', '.carrinho', function() {
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
            $(".carrinho").addClass("inativo").removeClass("ativo")
        }
    });


    // 
    // 
//INDEX
    $("#slideshow-destaques").carouFredSel({
        auto: false,
        scroll: {
            fx: "crossfade",
            duration: 1000,
        },
        pagination: $("#slideshow-container .navi"),
        prev: {
            button: $("#slideshow-container .prev")
        },
        next: {
            button: $("#slideshow-container .next")
        }
    });

    var dateCursos = [];
    var d = new Date();
    var ano_atual = d.getFullYear();
    var mes_atual = d.getMonth() + 1;
    fetchEventDays(ano_atual, mes_atual);
    function fetchEventDays(year, month, inst) {
        $.getJSON(ajaxurl, {action: 'load_calendario', ano: year, mes: month}).done(function(data) {
            console.log(data);
            $.each(data, function(index, value) {
                dateCursos[index] = value;
            });
            $("#datepicker").datepicker("refresh");
        });
    }


    $("#datepicker").datepicker({
        dateFormat: 'dd-mm-yy',
        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
        dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        nextText: 'Próximo',
        prevText: 'Anterior',
        onSelect: function(date, inst) {
            console.log(date);
            console.log(dateCursos[date]);
//            window.location.href = dateCursos[date];
        },
        beforeShowDay: function(date) {
            var dmy = "";
            dmy += date.getFullYear() + "-";
            dmy += ("00" + (date.getMonth() + 1)).slice(-2) + "-";
            dmy += ("00" + date.getDate()).slice(-2);
            if (dmy in dateCursos) {
                return [true, "actived"];
            }
            else {
                return [false, ""];
            }
        },
        onChangeMonthYear: function(year, month, inst) {
            fetchEventDays(year, month, inst);
        }
    });

    $("#slideshow-datepicker .slideshow").carouFredSel({
        auto: false,
        prev: {
            button: $("#slideshow-datepicker .prev")
        },
        next: {
            button: $("#slideshow-datepicker .next")
        }
    });
//newsletter com validation
    $('.form-newsletter').validate({
        rules: {
            email: {
                email: true,
                required: true
            }
        },
        errorElement: "em",
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                resetForm: true,
                beforeSubmit: function(formData, jqForm, options) {

                    jqForm.find('input[submit]').attr('disabled', true);
                    var envelope = jqForm.find('svg');
                    envelope.animate({right: '-50px', top: '-40px'});
                    setTimeout(function() {
                        envelope.css('top', '50px').css('right', '50px');
                        envelope.animate({right: '0px', top: '3px'});
                    }, 3000);
                },
                success: function(responseText, statusText, xhr, $form) {

                    if (responseText == '1') {
                        $('#mensagens-de-retorno').toggleClass("none").removeClass("erro").addClass("sucesso");
                        $('#mensagens-de-retorno .box h3').html('Cadastrado com sucesso!');
//                        $('#mensagens-de-retorno .box p').html('Uma mensagem foi enviada para o endereço de e-mail que você digitou. Neste e-mail tem um link para confirmação. Por favor, clique neste link para confirmar sua inscrição. Uma vez que você faça isso a sua assinatura estará completa.');
                    } else {
                        $('#mensagens-de-retorno').toggleClass("none").removeClass("sucesso").addClass("erro");
                        $('#mensagens-de-retorno .box h3').html('Ocorreu algum erro');
                        $('#mensagens-de-retorno .box p').html('Tente novamente mais tarde ou entre em <a href="' + baseurl + '/contato/">contato</a>');
                    }

                },
                error: function(responseText, statusText, xhr, $form) {
                    $('#mensagens-de-retorno').toggleClass("none").removeClass("sucesso").addClass("erro");
                    $('#mensagens-de-retorno .box h3').html('Ocorreu algum erro');
                    $('#mensagens-de-retorno .box p').html('Tente novamente mais tarde ou entre em <a href="' + baseurl + '/contato/">contato</a> conosco.');
                }
            });
        }
    });


    $("#cursos-agenda .content .col2").height($("#cursos-agenda").height());
// O NUCE
    $(".lista-equipe li .ver-perfil").click(function() {
        $(this).parent().find(".flutuante-informacao").fadeIn(200);
    });
    $(".lista-equipe li .flutuante-informacao .bt-fechar").click(function() {
        $(this).parent().fadeOut(200);
    });
    $("#o-nuce aside").sticky();
    $("#o-nuce #historia").waypoint(function() {
        $("#o-nuce aside ul li a").removeClass("active");
        $("#o-nuce aside ul li:first-child a").addClass("active");
    });
    $("#o-nuce #estrutura").waypoint(function() {
        $("#o-nuce aside ul li a").removeClass("active");
        $("#o-nuce aside ul li:nth-child(2) a").addClass("active");
    });
    $("#o-nuce #equipe").waypoint(function() {
        $("#o-nuce aside ul li a").removeClass("active");
        $("#o-nuce aside ul li:nth-child(3) a").addClass("active");
    });
//CURSOS
    $(".btn-more-cursos").click(function() {
        var slug = 0;
        var taxonomy = 0;
        var page = 0;
        var $this = $(this);
        if ($(this).data('slug') != "" && $(this).data('taxnomy') != "") {
            slug = $(this).data('slug');
            taxonomy = $(this).data('taxonomy');
            page = $(this).data('page');
        }
        if (!$(this).hasClass('disabled')) {

            $.ajax({
                type: "GET",
                url: ajaxurl,
                dataType: 'html',
                data: ({action: 'loadMoreCurso', page: page, slug: slug, taxonomy: taxonomy}),
                beforeSend: function() {
                    $this.toggleClass('active').html('<img  style="width: 50px;"  src="' + themeurl + '/assets/images/svgs/bubles.svg" alt="Loading icon" />');
                },
                success: function(response) {
                    if (response) {
                        $('#ul-' + slug).append(response);
                        $this.data('page', page);
                        $this.toggleClass('active').text('Carregar mais');
                        page++;
                    } else {
                        $this.addClass('disabled').text('Sem mais cursos');
                    }


                }
            });
        }
        return false;
    });

//CURSO
    $("#select-cursos").ddslick({
        selectText: "Lista de cursos",
    });


//NOTICIAS    

    $(".btn-more-noticias").click(function() {


        $.ajax({
            type: "GET",
            url: ajaxurl,
            dataType: 'html',
            data: ({action: 'loadMore', page: page}),
            success: function(data) {
                $('.lista-noticias').hide().fadeIn('slow').append(data);
                posts = posts + 4;
            }
        });
        return false;
    });


//DOWNLOADS
    $("#area-de-interesse").ddslick();
    $("#tipo-de-arquivo").ddslick();


    $("#form-download-taxonomy").submit(function(e) {
        e.preventDefault(); // this will prevent from submitting the form.

        var area_de_interesse = $("#area-de-interesse").val();
        var tipo = $("#tipo-de-arquivo").val();
        if (tipo != "" && area_de_interesse != "") {
            location.href = baseurl + '/downloads/tipo/' + tipo + '/area/' + area_de_interesse;
        }
        else if (tipo != "") {
            location.href = baseurl + '/downloads/tipo/' + tipo;
        }
        else if (area_de_interesse != "") {
            location.href = baseurl + '/downloads/area/' + area_de_interesse;
        } else {
            location.href = baseurl + '/downloads/';
        }
    });
    $(".btn-more-downloads").click(function() {
        var slug = 0;
        var taxonomy = 0;
        if ($(this).data('slug') != "" && $(this).data('taxnomy') != "") {
            slug = $(this).data('slug');
            taxonomy = $(this).data('taxonomy');
        }
        if (!$(this).hasClass('disabled')) {
            $.ajax({
                type: "GET",
                url: ajaxurl,
                dataType: 'html',
                data: ({action: 'loadMoreDownload', page: page, slug: slug, taxonomy: taxonomy}),
                beforeSend: function() {
                    $(".btn-more-downloads").toggleClass('active').html('<img  style="width: 50px;"  src="' + themeurl + '/assets/images/svgs/bubles.svg" alt="Loading icon" />');
                },
                success: function(data) {
                    if (data) {
                        $('.coluna-tabela > table > tbody').append(data);
                        $(".btn-more-downloads").toggleClass('active').text('Carregar mais');
                        page++;
                    } else {
                        $(".btn-more-downloads").addClass('disabled').text('Sem mais downloads');
                    }
                }
            });
        }
        return false;
    });
//CADASTRAR
    $("#select-estado").ddslick();
//CONTATO
    $("#contactForm").validate({
        rules: {
            nome: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            assunto: {
                required: true,
            },
            mensagem: {
                required: true
            }
        },
        messages: {
            nome: {
                required: 'Informe seu nome'
            },
            email: {
                required: 'Informe seu email',
                email: 'Email inválido'
            },
            assunto: {
                required: 'Informe o assunto',
            },
            mensagem: {
                required: "Escreva sua mensagem"
            }
        },
        errorElement: "em",
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                resetForm: true,
                beforeSubmit: function(formData, jqForm, options) {

                    jqForm.find('input[submit]').attr('disabled', true);
                    var envelope = jqForm.find('svg');
                    envelope.animate({right: '-50px', top: '-40px'});
                    setTimeout(function() {
                        envelope.css('top', '50px').css('right', '50px');
                        envelope.animate({right: '0px', top: '3px'});
                    }, 3000);
                },
                success: function(responseText, statusText, xhr, $form) {

                    if (responseText == '1') {
                        $('#mensagens-de-retorno').toggleClass("none").addClass("sucesso");
                    } else {
                        $('#mensagens-de-retorno').toggleClass("none").addClass("erro");
                    }

                },
                error: function(responseText, statusText, xhr, $form) {
                    $('#mensagens-de-retorno').toggleClass("none").addClass("erro");
                }
            });
        }
    });
//REGISTER
    $(".tab_content_login").hide();
    $("ul.tabs_login li:first").addClass("active_login").show();
    $(".tab_content_login:first").show();
    $("ul.tabs_login li").click(function() {
        $("ul.tabs_login li").removeClass("active_login");
        $(this).addClass("active_login");
        $(".tab_content_login").hide();
        var activeTab = $(this).find("a").attr("href");
        if ($.browser.msie) {
            $(activeTab).show();
        }
        else {
            $(activeTab).show();
        }
        return false;
    });
    //PROUTOS - SHOP
    $("#select-produtos-ordem").ddslick({
        selectText: "Ordenar lista",
        onSelected: function(data) {
            // Orderby
            if (data.selectedData.value != '') {
                if (data.selectedData.value) {
                    $('.woocommerce-ordering').submit();
                }
            }
        }
    });
//SEARCH

    $(".btn-more-search").click(function() {
        var type = 0;
        var page = 0;
        var $this = $(this);
        if ($this.data('page') != "" && $this.data('type') != "") {
            type = $(this).data('type');
            page = $(this).data('page');
        }
//        console.log($(this).data('term').length);return;
        if ($this.data('term').length > 0 && !$(this).hasClass('disabled')) {

            $.ajax({
                type: "GET",
                url: ajaxurl,
                dataType: 'html',
                data: ({action: 'loadMoreSearch', page: page, type: type, term: $(this).data('term')}),
                beforeSend: function() {
                    $this.toggleClass('active').toggleClass('disabled').html('<img  style="width: 50px;"  src="' + themeurl + '/assets/images/svgs/bubles.svg" alt="Loading icon" />');
                },
                success: function(data) {
                    if (data != "") {
                        $('#resultado-busca .col2 ul').append(data);
                        page++;
//                            console.log($this);
                        $this.data("page", page);
                        $this.toggleClass('active').toggleClass('disabled').text('Carregar mais');
                    } else {
                        console.log('cabou');
                        $this.addClass('disabled').text('Sem mais downloads');
                    }
                },
                complete: function() {

                }
            });
        }
        return false;
    });
    //CHECKOUT

    $("#billing_state").ddslick();
    $("#shipping_state").ddslick();
    $("#ja-esta-cadastrado h3").click(function() {
        $(this).parent().find("form").slideToggle();
    });
//CADASTRAR
    $('#form-registeruser').validate({
        rules: {
            billing_first_name: {
                required: true,
                minlength: 8
            },
            billing_rg: {
                required: true
            },
            billing_cpf: {
                required: true,
                checkcpfisvalid: true
            },
            user_birthdate: {
                checkDateFormat: true
            },
            billing_address_1: {
                required: true
            },
            billing_neighborhood: {
                required: true
            },
            billing_city: {
                required: true
            },
            billing_postcode: {
                required: true
            },
            billing_numero: {
                required: true
            },
            billing_state: {
                required: true
            },
            email: {
                email: true,
                required: true
            },
            password: {
                required: true,
                minlength: 6
            },
            password2: {
                equalTo: "#field-senha"
            },
            username: {
                required: true,
                minlength: 6
            },
        },
        messages: {
            billing_cpf: {checkcpfisvalid: "Forneça um cpf correto"},
            user_birthdate: {checkDateFormat: "Data incorreta"}
        },
        errorElement: "em",
//        debug: true
    });
    $('#form-edituser').validate({
        rules: {
            billing_first_name: {
                required: true,
                minlength: 8
            },
            billing_rg: {
                required: true
            },
            billing_cpf: {
                required: true,
                checkcpfisvalid: true
            },
            user_birthdate: {
                checkDateFormat: true
            },
            billing_address_1: {
                required: true
            },
            billing_neighborhood: {
                required: true
            },
            billing_city: {
                required: true
            },
            billing_postcode: {
                required: true
            },
            billing_numero: {
                required: true
            },
            billing_state: {
                required: true
            },
            email: {
                email: true,
                required: true
            },
            password: {
                minlength: 6
            },
            password2: {
                equalTo: "#field-senha"
            },
            username: {
                required: true,
                minlength: 6
            },
        },
        messages: {
            billing_cpf: {checkcpfisvalid: "Forneça um cpf correto"},
            user_birthdate: {checkDateFormat: "Data incorreta"}
        },
        errorElement: "em",
//        debug: true
    });

    $.validator.addMethod("checkcpfisvalid", function(cpf) {
        cpf = cpf.replace('.', '');
        cpf = cpf.replace('.', '');
        cpf = cpf.replace('-', '');

        var numeros, digitos, soma, i, resultado, digitos_iguais;
        digitos_iguais = 1;
        if (cpf.length < 11)
            return false;
        for (i = 0; i < cpf.length - 1; i++)
            if (cpf.charAt(i) !== cpf.charAt(i + 1))
            {
                digitos_iguais = 0;
                break;
            }
        if (!digitos_iguais)
        {

            numeros = cpf.substring(0, 9);
            digitos = cpf.substring(9);
            soma = 0;
            for (i = 10; i > 1; i--)
                soma += numeros.charAt(10 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

            if (resultado != digitos.charAt(0))
                return false;
            numeros = cpf.substring(0, 10);

            soma = 0;
            for (i = 11; i > 1; i--)
                soma += numeros.charAt(11 - i) * i;

            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

            if (resultado != digitos.charAt(1))
                return false;
            return true;
        }
        else
            return false;

    });

    $.validator.addMethod("checkDateFormat", function(value) {
        // regular expression to match required date format
        re = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/;

        if (value != '') {
            if (regs = value.match(re)) {
                // day value between 1 and 31
                if (regs[1] < 1 || regs[1] > 31) {
                    return false;
                }
                // month value between 1 and 12
                if (regs[2] < 1 || regs[2] > 12) {
                    return false;
                }
                // year value between 1902 and 2014
                if (regs[3] < 1902 || regs[3] > (new Date()).getFullYear() - 15) {
                    return false;
                }
            } else {
                return false;
            }
        }
        return true;
    });

});


