jQuery(document).ready(function($) {
    console.log("O-Nuce");

    $(".lista-equipe li .ver-perfil").click(function() {
        $(this).parent().find(".flutuante-informacao").fadeIn(200);
    });
    $(".lista-equipe li .flutuante-informacao .bt-fechar").click(function() {
        $(this).parent().fadeOut(200);
    });
});