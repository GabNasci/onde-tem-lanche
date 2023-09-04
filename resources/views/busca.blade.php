@extends('layouts.app')

@section('content')

    <main class="d-flex flex-column gap-4" style="margin-top: 5rem;">
        <section class="container d-flex flex-column gap-2">

            <section class=" d-flex d-md-none justify-content-center w-100">
                <a href="busca.html" class="btn active w-100">Lista</a>
                <a href="mapa.html" class="btn w-100">Mapa</a>
            </section>
            <form method="GET" action="{{ route('busca') }}">
                @csrf
                <section class="d-flex flex-column justify-content-center align-items-center gap-">

                    <h2 class="fs-5 fw-bold d-none d-md-block" style="font-family:'sub-destaque';">E aí! Tá em busca do
                        que
                        hoje?</h2>
                    <div class="border p-2 rounded-pill w-sm-100" style="width: 80vw;">
                        <div class="d-flex">
                            <input type="search" name="busca" id="" placeholder="pizza de calabresa..." class="border-0 w-100"
                                   style="outline: none;" />
                            <button type="submit" class="px-1 border-0 bg-transparent" style="color: #707070;">
                                <i class="fa-solid fa-magnifying-glass fa-flip-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </section>
            </form>

            <section class=" container d-flex w-100 justify-content-center align-items-center gap-2 d-md-none">
                <hr class="border border-3 opacity-100 w-100" style="color: #707070">
                <h3 class="fs-5" style="color: #707070;">Categorias</h3>
                <hr class="border border-3 opacity-100 w-100" style="color: #707070">
            </section>

            <section class="d-flex justify-content-md-center gap-1 categorias" style="max-width: 100vw; overflow-x: scroll;">
                @foreach($categories as $category)
                    <div class="">
                        <a href="#" class="">
                            <img
                                src="{{ asset('images/'.$category->icone) }}"
                                alt="{{ $category->nome }}"
                                class=""
                                style="width: 40px;"/>
                        </a>
                    </div>
                @endforeach
            </section>
        </section>


        <section class="d-flex flex-column gap-2 gap-md-4">

            <section class="container d-none d-md-flex justify-content-center w-100">
                <a href="{{route('busca')}}" class="btn active w-100">Lista</a>
                <a href="{{route('mapa')}}" class="btn w-100">Mapa</a>
            </section>

            <section class="d-none container d-lg-flex align-items-center gap-2">
                <h4 class="px-2 fw-bold m-0"
                    style="background-color: #EA9F30; font-family: 'destaque'; min-width: fit-content;">Todos os restaurantes</h4>
                <hr class="border border-3 opacity-100 w-100" style="color: #707070;">
            </section>

            <section class="d-lg-none container d-flex align-items-center gap-2">
                <h4 class="px-2 fw-bold m-0" style="background-color: #EA9F30; font-family: 'destaque';">Restaurantes</h4>
                <hr class="border border-3 opacity-100 w-100" style="color: #707070; ">
            </section>


            <section class="container d-flex justify-content-end gap-2">
                <select class="form-select rounded-pill" aria-label="Default select example" style="width: 10em;">
                    <option selected>Ordenar</option>
                    <option value="1">Abertos</option>
                    <option value="2">A-Z</option>
                </select>
            </section>

            <section class="container d-flex flex-column justify-content-center gap-4">
                @if($establishments->count() > 0)
                    @foreach($establishments as $establishment)
                        <div class="card rounded-4">
                            <div class="d-flex">
                                <div class="col-3 col-md-2 p-2">
                                    <img src="{{asset('images/' . $establishment->imagem_logo)}}" class="card-img img-fluid rounded-4 border border-2" alt="..."
                                         style="width: 100%;">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body d-flex row gap-2 p-0 px-0 px-md-2 py-2">
                                        <div class="d-flex gap-2">
                                            <h5 class="card-title m-0 fw-bold fs-4">{{$establishment->nome}}</h5>
                                            <div class="d-none d-lg-flex gap-2">
                                                @foreach($establishment->categories as $categoryPivot)
                                                    <img src="{{ asset('images/'.$categoryPivot->category->icone) }}" alt="..." style="width: 1.5em;">
                                                @endforeach
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="card-subtitle fs-5 text-secondary d-lg-none">{{$establishment->tipo}}</h5>
                                        </div>
                                        <div class="d-none d-lg-block">
                                            <h7 class="card-subtitle fw-bold">Descrição do estabelecimento</h7>
                                            <p class="card-text .d-sm-none .d-md-block">{{$establishment->descricao}}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex gap-4">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <i class="fa-regular fa-clock"></i>
                                                <p class="card-text fw-bold">{{$establishment->horario_inicial . "-" . $establishment->horario_final}}</p>
                                                </div>
                                                <div class="d-none d-lg-flex gap-2 align-items-center">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                    <p class="card-text fw-bold">{{$establishment->logradouro . ", " . $establishment->numero . ", " . $establishment->bairro}}</p>
                                                </div>
                                                <div class="d-none d-lg-flex gap-2 align-items-center">
                                                    <i class="fa-solid fa-phone"></i>
                                                    <p class="card-text fw-bold">{{$establishment->whatsapp}}</p>
                                                </div>
                                            </div>
                                            <a href="{{ url('/estabelecimentos/' . $establishment->id ) }}"
                                               class="btn btn-dark border-0 d-flex align-items-center gap-2 justify-content-center px-2 py-1 me-1">
                                                <i class="fa-solid fa-utensils fs-6"></i>
                                                <p class="card-text fs-6">ver mais</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="card rounded-4">
                        <p>Não há resultados.</p>
                    </div>
                @endif


            </section>

        </section>


        <section class="fixed-bottom d-sm-none container px-5 py-3 d-flex flex-column rounded-top-4"
                 style="background-color: #131313; margin-bottom: -1px;">
            <div class="d-flex justify-content-between">
                <div>
                    <a class="text-decoration-none p-0 m-0 d-flex flex-column justify-content-center align-items-center"
                       href="index.html">
                        <img src="img/Icons/Home.svg" alt="">
                        <p class="fs-6 m-0" style="color: #FFFFFF;">Home</p>
                    </a>
                </div>
                <div class="align-self-center d-flex flex-column align-items-center" style="margin-top: -60px;">
                    <a class="text-decoration-none p-0 m-0" href="estabelecimento.html">
                        <img src="img/Icons/Indicacao.png" alt="" style="width: 72px;">
                    </a>
                </div>
                <div>
                    <a class="text-decoration-none p-0 m-0 d-flex flex-column justify-content-center align-items-center"
                       href="busca.html">
                        <img src="img/Icons/Pesquisa-active.svg" alt="">
                        <p class="fs-6 m-0" style="color: #EA9F30;">Busca</p>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
