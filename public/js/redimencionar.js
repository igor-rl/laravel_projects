// redimencionar
function redimencionar(){
    var screenWidth = $( window ).width();
    var screenHeigth = $( window ).height();

    $(".largura_tela").css("min-width",screenWidth)
    $(".altura_tela").css("min-height",screenHeigth)

    var altura_desktop_nav_bar = $("#nav-desktop").height();

    var altura_minima_conteudo_pagina = screenHeigth - ( altura_desktop_nav_bar)

    $(".conteudo-pagina").css("min-height",screenHeigth)

    $(".conteudo-pagina").css("padding-top",altura_desktop_nav_bar+"px")
}