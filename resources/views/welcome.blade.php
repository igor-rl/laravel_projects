@extends('layout.main')

@section('title', 'Bem vindo!')

@section('conteudo')
    <div class="position-relative">

        <!-- selecionar a imagem para aparecer -->
        <!-- para desktop -->
        <div class="d-none d-lg-block largura_tela altura_tela" style="background-image: url('/img/banners/desktop-lg-studio-room-futuristic-rendering-cars-for-sales-nuvens.jpg'); background-size: cover;background-repeat: no-repeat;background-position: center">
        </div>


        <!-- para tablet -->
        <div class="d-none d-sm-block d-lg-none largura_tela altura_tela " style="background-image: url('img/banners/desktop-md-studio-room-futuristic-rendering-cars-for-sales-nuvens.jpg'); background-size: cover;background-repeat: no-repeat;background-position: center">
        </div>


        <!-- para mobile -->
        <div class="d-block d-sm-none largura_tela altura_tela" style="background-image: url('img/banners/desktop-sm-studio-room-futuristic-rendering-cars-for-sales-nuvens(2).jpg'); background-size: cover;background-repeat: no-repeat;background-position: center">
        </div>
    </div>

    

    <div class="bg-light pb-5">

        <div class="container">
            
            <h3 class="text-secondary text-center py-5">O carro dos seus sonhos está aqui! Confira o nosso catálogo</h3>

            <button class="btn d-flex justify-content-between w-100 btn-danger py-1 mb-2">
                <div>Novidades e Lançamentos</div>
                <div><i class="fas fa-angle-right"></i></div>
            </button>
            <button class="btn d-flex justify-content-between w-100 btn-danger py-1 mb-2">
                <div>Simule um financiamento</div>
                <div><i class="fas fa-angle-right"></i></div>
            </button>
            <button class="btn d-flex justify-content-between w-100 btn-danger py-1 mb-2">
                <div>Agende um teste drive</div>
                <div><i class="fas fa-angle-right"></i></div>
            </button>
            <button class="btn d-flex justify-content-between w-100 btn-danger py-1 mb-2">
                <div>Fale conosco</div>
                <div><i class="fas fa-angle-right"></i></div>
            </button>
            <button class="btn d-flex justify-content-between w-100 btn-danger py-1 mb-2">
                <div>Como chegar?</div>
                <div><i class="fas fa-angle-right"></i></div>
            </button>
        </div>
    </div>
@endsection