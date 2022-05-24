function rolando_pagina_y(posicao_atual)
{
    // se a posição é até 'x' px não apenas exibir
    if(posicao_atual<20)
    {
        showNavbars()
    }

    // se é depois de 'x' px
    else{

        // get cookie com a posição da nav no segundo atrás
        let cookie_eixoy =getCookie('cookie_eixoy')
        if(!cookie_eixoy){
            // se não tem valor inserir um
            setCookie_mseconds('cookie_eixoy', posicao_atual, 500)
        }
        else{
            // subindo ou descendo?
            let calc = posicao_atual - cookie_eixoy
            // se a está rolando a tela pra baixo...
            if(posicao_atual>cookie_eixoy)
            {
                hideNavbars()
            }
            // se está rolando a tela pra cima
            else
            {
                showNavbars()
            }
        }
    }

}


function showNavbars()
{
    const navbar_mobile = $("#nav-mobile");
    const navbar_desktop = $("#nav-desktop");
    // ver se está invisível
    if(navbar_mobile.hasClass('fade'))
    {
        // ... esconder o menu suavimente
        navbar_mobile.fadeIn("fast");
        navbar_desktop.fadeIn("fast");
        navbar_mobile.removeClass("fade");
        navbar_desktop.removeClass("fade");
    }
}


function hideNavbars()
{
    // ver se está visível
    const navbar_mobile = $("#nav-mobile");
    const navbar_desktop = $("#nav-desktop");
    if(!navbar_mobile.hasClass('fade'))
    {
        // ... esconder o menu suavimente
        navbar_mobile.fadeOut("slow");
        navbar_desktop.fadeOut("slow");
        navbar_mobile.addClass("fade");
        navbar_desktop.addClass("fade");
    }
}