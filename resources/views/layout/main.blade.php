<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    {{-- estilos css principais criados pelo usuario --}}
    <link rel="stylesheet" href="/css/main.css" />


    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">
    
    {{-- google icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- Bootstrap script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/2c41fead94.js" crossorigin="anonymous" ></script>

</head>
<body>

    {{-- navbar para dispositivos desktop --}}
    <div class="d-none d-md-block bg-light">
        <div id="nav-desktop" class="align-items-center fixed-top bg-light">
            <div class="container-fluid position-relative py-2">
            <div class="d-flex align-items-center container">
                <div class="col-4 col-lg-3 m-0 p-0">
                <a href="/" type="button" class="text-decoration-none d-flex align-items-center">
                    <div class="me-2">
                        <img class="nav-logo" src="/img/icons/prudy-icon-48x48.png">
                    </div>
                    <h5 class="m-0 p-0 text-uppercase">
                        <i>Hostwit App</i>
                    </h5>
                </a>
                </div>
        
                <div class="col-8 col-lg-9 p-0">
                <div class="d-flex w-100 justify-content-center align-items-center" style="z-index: 2">
        
        
                    <!-- inicio -->
                    <a class="btn btn-outline-secondary btn-sm border border-{{$nav_desktop[0]}}" href="/">
                    <i class="fas fa-home"></i> <small>INÍCIO</small>
                    </a>
        
        
                    <!-- veiculos -->
                    <a class="btn btn-outline-secondary btn-sm border border-{{$nav_desktop[1]}}" href="/produtos">
                    <i class="fas fa-car"></i> <small>VEÌCULOS</small>
                    </a>
        
        
                    <!-- contato -->
                    <a class="btn btn-outline-secondary btn-sm border border-{{$nav_desktop[2]}}" href="/contato">
                    <i class="fas fa-comment-dots"></i> <small>CONTATO</small>
                    </a>
        
        
                    <!-- clocalização -->
                    <a class="btn btn-outline-secondary btn-sm border border-{{$nav_desktop[3]}}" href="/sobrenos">
                    <i class="fas fa-location-arrow"></i> <small>COMO&nbspCHEGAR?</small>
                    </a>
        
        
                    <!-- login -->
                    <a class="btn btn-outline-secondary btn-sm border border-{{$nav_desktop[4]}}" href="/voce">
                    <i class="fas fa-user-alt"></i> <small>VOCÊ</small>
                    </a> 
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>


    {{-- loading --}}
    <div id="loading" class="fixed-top">
        <div class="d-flex loading flex-column bd-highlight align-items-center justify-content-center bg-dark">
        <div class="bd-highlight mb-5">
            <div class="d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary position-absolute" style="width: 8rem; height: 8rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="text-primary position-absolute">
                <img class="nav-logo" src="/img/icons/prudy-icon-48x48.png">
            </div>
            </div>
        </div>
        </div>
    </div>

    
    {{-- conteúdo da página --}}
    <div class="conteudo-pagina container-fluid p-0">
        @yield('conteudo')
    </div>

    
    {{-- foother --}}
    <footer class="pb-5 bg-dark text-light">
        <div class="container text-center">
            Hostwit &copy; <?=date("Y")?>
        </div>
    </footer>



    {{-- mensagem de uso de cookies --}}
    <div class="cookies-mensage collapse">
        <div class="d-flex border border-primary container-fluid rounded-lg bg-white fixed-top">
            <div class="container pb-3">
                <h3 class="my-3 text-secondary">
                    <i class="fas fa-cookie-bite"></i> Uso de Cookies
                </h3>
                <hr>
                <p class="mb-0">Para te dar a melhor experiencia de navegação possível, este site utiliza cookies. Consulte nossa <i><a href="/politica-de-privacidade">Política de Privacidade</a></i> para saber mais sobre como usamos e cuidamos dos seus dados. Ao continuar navegando, você concorda automaticamente com os termos apresentados.</p>
                <hr>
                <div class="d-flex justify-content-end mt-3">
                    <button class="btn btn-sm btn-primary d-flex align-itens-center" onclick="aceite_cookies_e_privacidade()">
                        <div>
                            Continue navegando&nbsp
                        </div>
                        <div>
                            <i class="material-icons">directions_boat</i>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>


    {{-- navbar para dispositivos mobile --}}
    <div class="d-block d-md-none">
        <div id="nav-mobile" class="fixed-bottom p-0 border bg-light">
            <div class="d-flex align-items-center align-self-stretch justify-content-center">
    
    
                <!-- início -->
                <a class="btn lh-1 col text-{{$nav_mobile[0]}}" href="/">
                    <div><i class="fas fa-home"></i></div>
                    <div><small>Início</small></div>
                </a>
                
    
                <!-- veículos -->
                <a class="btn lh-1 col text-{{$nav_mobile[1]}}" href="/produtos">
                    <div><i class="fas fa-car"></i></div>
                    <div><small>Veículos</small></div>
                </a>
    
    
                <!-- chat -->
                <a class="btn lh-1 col text-{{$nav_mobile[2]}}" href="/contato">
                    <div><i class="fas fa-headset"></i></div>
                    <div><small>Chat</small></div>
    
                    <div class="mensagens_nao_lidas">
                        <!-- notificacoes pendentes -->
                    </div>
                </a>
    
    
                <!-- sobre nós -->
                <a class="btn lh-1 col text-{{$nav_mobile[3]}}" href="/sobrenos">
                    <div><i class="fas fa-building"></i></div>
                    <div><small>Nós</small></div>
                </a>
    
    
                <!-- login -->
                <a class="btn lh-1 col position-relative text-{{$nav_mobile[4]}}" href="/voce">
                    <div><i class="fas fa-user-alt"></i></div>
                    <div><small>Você</small></div>
    
                    <div class="notificacoes_contador">
                        <!-- notificacoes pendentes -->
                    </div>
    
    
                </a>
    
    
    
            </div>
        </div>
    </div>

    {{--  scripts principais criados pelo usuario --}}
    <script src="/js/redimencionar.js"></script>
    <script src="/js/rolando_pagina.js"></script>
    <script src="/js/cookies.js"></script>
    <script src="/js/main.js"></script>


</body>
</html>