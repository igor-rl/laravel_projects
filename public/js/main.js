main()

// ouvindo ação de redimencionamento da tela
window.addEventListener('resize', function(){
    redimencionar();
});


// ouvindo ação de conclusão de loading
window.onload = function() {
    $("#loading").fadeOut( "slow")
    redimencionar()
};


// ouvindo ações diversas
$(document).ready(function()
{
  // rolando documento eixo y
  $(window).on('scroll', function (e)
  {
    var position = this.scrollY;
    rolando_pagina_y(position)
  });
})


function main()
{
    redimencionar()
    verificar_aceite_cookies_e_privacidade()
}