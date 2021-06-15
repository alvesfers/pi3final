@extends('layouts.store')
@section('css')
<style>
    #banner {
        background: url('storage/banner/contact.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        min-height: 400px;
    }

</style>
@endsection

@section('content')
<section id="banner" class="d-flex align-items-center px-4">
    <div>
        <span class="h2 d-block text-capitalize mb-0 text-white-50">Sampa Music</span>
        <span class="h1 d-block text-uppercase fw-bold mb-3 text-white">Sobre Nós</span>
    </div>
</section>
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3 text-dark">Somos a Sampa Music</h1>
                    <p class="lead fw-normal text-muted mb-4">Uma nova loja que esta chegando para tomar o lugar de todas!</p>
                    <a class="btn btn-primary btn-lg" href="#scroll-target">Veja nossa história</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section one-->
<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('storage/banner/comeco.png') }}" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder text-dark">O Inicio</h2>
                <p class="lead fw-normal text-muted mb-0">Desde pequeno, eu era apaixonado por musica! Era o que fazia eu parar de chorar
                     quando era um bebe, a musica sempre esteve na minha vida, mesmo não sendo o foco principal</p>
            </div>
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('storage/banner/motivo.png') }}" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder text-dark">A Criação</h2>
                <p class="lead fw-normal text-muted mb-0">Precisando de dinheiro em um certo tempo na vida, fui vender meu violão.
                     Com muita dor pois era o que me desestressava! Vendi para uma criança, quando vi ele olhando para o violão a 
                     primeira vez me emocionei e decidi que queria ver um olhar daquele para o resto da minha vida, com isso criei 
                     a Sampa Music, onde sinceridade é melhor que uma venda!</p>
            </div>
        </div>
    </div>
</section>
<!-- Team members section-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder text-dark">Nosso time</h2>
            <p class="lead fw-normal text-muted mb-5">Dedicação e qualidade são as chaves para o sucesso!</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('storage/icon/bernardo.png') }}" alt="..." />
                    <h5 class="fw-bolder">Bernardo José</h5>
                    <div class="fst-italic text-muted">Fundador &amp; CEO</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('storage/icon/emanuel.png') }}" alt="..." />
                    <h5 class="fw-bolder">Emannuel Farias</h5>
                    <div class="fst-italic text-muted">CFO</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('storage/icon/thomaz.png') }}" alt="..." />
                    <h5 class="fw-bolder">Thomaz Alves</h5>
                    <div class="fst-italic text-muted ">Gerente</div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('storage/icon/alessandra.png') }}" alt="..." />
                    <h5 class="fw-bolder">Alessandra Torres</h5>
                    <div class="fst-italic text-muted">CTO</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 text-center">
        <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('storage/logo3.png') }}" alt="..." />
</section>
</main>
@endsection
