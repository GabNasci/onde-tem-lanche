@extends('layouts.app')

@section('content')


<main class="d-flex flex-column gap-4" style="margin-top: 5rem;">

    <section class="container d-flex flex-column gap-2">

        <section class=" d-flex d-md-none justify-content-center w-100">
            <a href="{{route('busca')}}" class="btn w-100">Lista</a>
            <a href="{{route('busca')}}" class="btn active w-100">Mapa</a>
        </section>

    </section>

    <section class="d-flex flex-column gap-2">

        <section class="container d-none d-md-flex justify-content-center w-100">
            <a href="{{route('busca')}}" class="btn w-100">Lista</a>
            <a href="{{route('mapa')}}" class="btn active w-100">Mapa</a>
        </section>

        <section class="container d-flex flex-column justify-content-center gap-4">
            <div id="map"></div>
        </section>

    </section>

</main>
<section class="fixed-bottom d-sm-none container px-5 py-3 d-flex flex-column rounded-top-4 w-100"
         style="background-color: #131313; margin-bottom: -1px;">
    <div class="d-flex justify-content-between">
        <div>
            <a class="text-decoration-none p-0 m-0 d-flex flex-column justify-content-center align-items-center"
               href="{{ url('/') }}">
                <img src="{{asset('images/Icons/Home.svg')}}" alt="Ícone de Casa">
                <p class="fs-6 m-0" style="color: #FFFFFF;">Home</p>
            </a>
        </div>
        <div class="align-self-center d-flex flex-column align-items-center" style="margin-top: -48px;">
            <?php
            $estabelecimentos = \App\Models\Establishment::all();
            $estabelecimentoAleatorio = $estabelecimentos->random();
            $idEstabelecimentoAleatorio = $estabelecimentoAleatorio->id;
            ?>
            <a class="text-decoration-none p-0 m-0" href="{{ url('/estabelecimentos/' . $idEstabelecimentoAleatorio ) }}">
                <img src="{{asset('images/Icons/Indicacao.svg')}}" alt="Ícone de Estabelecimento" style="width: 80px;">
            </a>
            <p class="fs-6 m-0" style="color: #FFFFFF; font-family: 'destaque';">Indicação</p>
        </div>
        <div>
            <a class="text-decoration-none p-0 m-0 d-flex flex-column justify-content-center align-items-center"
               href="{{ url('/busca') }}">
                <img src="{{asset('images/Icons/Pesquisa-active.svg')}}" alt="Ícone de Pesquisa Selecionado">
                <p class="fs-5 m-0" style="color: #EA9F30;">Busca</p>
            </a>
        </div>
    </div>
</section>



@endsection

@section('scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCynZ8rpsb1BT6zjIFvjm2lfut1TgOfV1U&callback=initMap&v=weekly"
        defer
    ></script>
@endsection
