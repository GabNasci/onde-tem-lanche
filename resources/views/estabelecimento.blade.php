@extends('layouts.app')
@section('content')
        <main class="d-flex flex-column gap-md-4" style="margin-top: 50px;">

        <section class="px-0 px-md-5">
            <div class="position-relative d-flex justify-content-end align-items-end">
                <!-- Button trigger modal -->
                <button type="button"
                        class="position-absolute btn btn-dark border-0 d-flex align-items-center gap-2 justify-content-center px-2 py-1 me-1"
                        style="background: rgba(0, 0, 0, 0.50);" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-image"></i>
                    <p class="card-text text-decoration-underline fs-6">ver fotos</p>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content d-flex flex-column justify-content-between" style="height: 550px;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Fotos</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="tab-content" id="myTabContent">
                                    @foreach($establishment->banners as $i => $banner)
                                        <div class="tab-pane {{ $i === 0 ? 'active' : ''}} " id="{{$i + 1}}-tab-pane"
                                             role="tabpanel" aria-labelledby="{{$i + 1}}-tab" tabindex="0">
                                            <p>{{$i + 1 . "/" . $establishment->banners->count()}}</p>
                                            <img src="{{ asset('images/'.$banner->imagem) }}" class="img-fluid object-fit-cover w-100" alt="" style="height: 220px">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="modal-footer p-0 justify-content-center">
                                <ul class="nav nav-underline list-unstyled" id="myTab" role="tablist">
                                    @foreach($establishment->banners as $i => $banner)
                                        <li class="nav-item">
                                            <a href="#{{$i + 1}}" class="nav-link link-underline-opacity-100 {{ $i === 0 ? 'active' : ''}}" id="{{$i + 1}}-tab" data-bs-toggle="tab"
                                               data-bs-target="#{{$i + 1}}-tab-pane" type="button" role="tab" aria-controls="{{$i + 1}}-tab-pane"
                                               aria-selected="true" style="color: #EA9F30;">
                                                <img src="{{ asset('images/'.$banner->imagem) }}" class="img-fluid object-fit-cover" alt="" style="width: 64px; height: 64px;">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('images/'.$establishment->banners()->where('is_destaque', true)->first()->imagem)}}" class="w-100 img-fluid object-fit-cover" alt=""
                     style="height: 10rem;">
            </div>
            <div class="d-flex">
                <div class="col-4 col-md-2 p-2">
                    <img src="{{asset('images/' . $establishment->imagem_logo)}}" class="card-img img-fluid rounded-4 border border-2" alt="..."
                         style="width: 100%;">
                </div>
                <div class="col-md-10">
                    <div class="d-flex flex-column gap-2 p-0 px-0 px-md-2 py-2" style="max-height: 176.4px;">
                        <div class="d-flex flex-column flex-md-row gap-2 justify-content-md-between">
                            <div class="d-flex gap-2">
                                <h5 class="card-title m-0 fw-bold fs-4">{{$establishment->nome}}</h5>
                                <ul class="d-none list-unstyled d-md-flex p-0 m-0 justify-content-center align-items-end gap-2">
                                    <li>
                                        <a href="{{$establishment->instagram}}" class="text-decoration-none link-dark">
                                            <i class="fa-brands fa-instagram fs-4"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$establishment->facebook}}" class="text-decoration-none link-dark">
                                            <i class="fa-brands fa-square-facebook fs-4"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$establishment->whatsapp}}" class="text-decoration-none link-dark">
                                            <i class="fa-brands fa-whatsapp fs-4"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex gap-4">
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="fa-regular fa-clock"></i>
                                        <p class="card-text fw-bold">{{$establishment->horario_inicial->format('H:i') . " - " . $establishment->horario_final->format('H:i')}}</p>
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
                            </div>

                        </div>
                        <div class="d-none d-lg-block">
                            <h7 class="card-subtitle fw-bold">Descrição do estabelecimento</h7>
                            <p class="card-text .d-sm-none .d-md-block">{{$establishment->descricao}}</p>
                        </div>
                        <div class=" d-lg-flex gap-2">
                            @foreach($establishment->categories as $categoryPivot)
                                <img src="{{ asset('images/'.$categoryPivot->category->icone) }}" alt="..." style="width: 32px;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-md-none container d-flex justify-content-center">
            <hr style="width: 90%;">
        </section>

        <section class="d-md-none container d-flex justify-content-around">
            @if($establishment->site)
                <div>
                    <a href="{{ $establishment->site }}" class="btn text-decoration-underline">
                        <i class="fa-solid fa-earth-americas" style="font-size: 2em;"></i>
                        <div class="d-flex">
                            <p class="p-0 m-0">Site</p>
                            <img src="images/Icons/arrow.svg" alt="" class="" style="width: 0.7em;">
                        </div>
                    </a>
                </div>
            @endif
            @if($establishment->whatsapp)
                <div>
                    <a href="{{ $establishment->whatsapp }}" class="btn text-decoration-underline">
                        <i class="fa-solid fa-phone" style="font-size: 2em;"></i>
                        <div class="d-flex">
                            <p class="p-0 m-0">Ligar</p>
                            <img src="images/Icons/arrow.svg" alt="" class="" style="width: 0.7em;">
                        </div>
                    </a>
                </div>
            @endif
        </section>

        <section class="d-md-none container d-flex justify-content-center">
            <hr style="width: 90%;">
        </section>

        <section class="d-flex flex-column gap-4">

            <section class="d-md-none container d-flex">
                <div class="card border-0 gap-2">
                    <ul class="nav nav-underline px-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                    aria-selected="true">Sobre</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                                    aria-selected="false">Contato</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active card-body border border-1 rounded-3  shadow-sm" id="home-tab-pane"
                             role="tabpanel" aria-labelledby="home-tab" tabindex="0" style="max-height: 260px;">
                            <h5 class="card-title text-start">Descrição</h5>
                            <p class="card-text" style="text-align: justify;">{{$establishment->descricao}}</p>
                        </div>
                        <div class="tab-pane fade card-body border border-1 rounded-3 shadow-sm" id="profile-tab-pane"
                             role="tabpanel" aria-labelledby="profile-tab" tabindex="0" style="height: 260px;">
                            <h5 class="card-title text-start">Contato e localização</h5>
                            <div class="d-flex flex-column gap-4 justify-content-evenly  h-100">
                                <div class="d-flex gap-2 align-items-center">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p class="card-text">{{$establishment->email}}</p>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p class="card-text">{{$establishment->logradouro . ", " . $establishment->numero . ", " . $establishment->bairro}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="card-text">{{$establishment->whatsapp}}</p>
                                    </div>
                                    <div>
                                        <ul class=" list-unstyled d-flex p-0 m-0 justify-content-center align-items-end gap-2">
                                            @if($establishment->instagram)
                                                <li>
                                                    <a href="{{$establishment->instagram}}" class="text-decoration-none link-dark">
                                                        <i class="fa-brands fa-instagram fs-3"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($establishment->facebook)
                                                <li>
                                                    <a href="{{$establishment->facebook}}" class="text-decoration-none link-dark">
                                                        <i class="fa-brands fa-square-facebook fs-3"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($establishment->whatsapp)
                                                <li>
                                                    <a href="{{$establishment->whatsapp}}" class="text-decoration-none link-dark">
                                                        <i class="fa-brands fa-whatsapp fs-3"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            ...</div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                             tabindex="0">...</div>
                    </div>
                </div>
            </section>

            @if($establishment->events->count() > 0)
                <section class="container d-flex align-items-center gap-2">
                    <h4 class="px-2 fw-bold m-0" style="background-color: #EA9F30; font-family: 'destaque';">Destaques</h4>
                    <hr class="border border-3 opacity-100 w-100" style="color: #707070">
                </section>

                <section class="container d-flex justify-content-center">
                <div id="carouselExample1" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-indicators d-none m-0">
                            <button type="button" data-bs-target="#carouselExample1" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample1" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                        </div>
                        @foreach($establishment->events as $key => $event)
                            <div class="carousel-item {{ $key === 0 ? 'active' : ''}}">
                                <div class="card rounded-4">
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <img src="{{ asset('images/'.$event->foto) }}"
                                                 class="card-img img-fluid object-fit-cover h-100 rounded-4" alt="...">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body d-flex row gap-2 gap-md-4 p-0 px-2 py-2">
                                                <h5 class="card-title m-0 fw-bold fs-4">{{ $event->titulo }}</h5>
                                                <div class="d-flex gap-2 gap-md-4">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <i class="fa-regular fa-calendar fs-6"></i>
                                                        <p class="card-text">{{ $event->data->format('d/m') }}</p>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <i class="fa-regular fa-clock fs-6"></i>
                                                        <p class="card-text">{{ $event->data->format('H:i') }}</p>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <i class="fa-solid fa-location-dot fs-6"></i>
                                                        <p class="card-text">{{ $event->establishment->nome }}</p>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-block">
                                                    <h5 class="card-subtitle fs-5 fw-bold">Descrição do evento</h5>
                                                    <p class="card-text">{{ $event->descricao }}</p>
                                                </div>
                                                <div class="d-flex justify-content-center gap-5 gap-md-4">
                                                    <a href="{{ $event->url }}" target="_blank"
                                                       class="btn btn-primary text-dark border-0 d-flex align-items-center gap-2 px-5 px-md-2"
                                                       style="background-color:#7DD3EE;">
                                                        <i class="fa-solid fa-circle-info fs-5"></i>
                                                        <p class="card-text fs-6 d-none d-md-block">
                                                            Visitar página do evento
                                                        </p>
                                                    </a>
                                                    <a href="{{ 'https://wa.me/'.$event->establishment->whatsapp }}" target="_blank"
                                                       class="btn btn-primary text-dark border-0 d-flex align-items-center gap-2 px-5 px-md-2"
                                                       style="background-color:#25D366 ;">
                                                        <i class="fa-brands fa-whatsapp fs-5"></i>
                                                        <p class="card-text fs-6 d-none d-md-block">
                                                            Conversar com responsável
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if($establishment->events->count() > 1)
                    <button class="carousel-control-prev d-none d-md-block" type="button" data-bs-target="#carouselExample1"
                            data-bs-slide="prev"
                            style="background-color: #D9D9D9; width: 6vh; height: 6vh; border-radius: 50%; top: 50%; transform: translateY(-50%); transform: translateX(-140%);">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none d-md-block" type="button" data-bs-target="#carouselExample1"
                            data-bs-slide="next"
                            style="background-color: #D9D9D9; width: 6vh; height: 6vh; border-radius: 50%; top: 50%; transform: translateY(-50%); transform: translateX(140%);">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @endif

                </div>
            </section>
            @endif


            <section class="container d-flex align-items-center gap-2">
                <h4 class="px-2 fw-bold m-0" style="background-color: #EA9F30; font-family: 'destaque';">Cardápio</h4>
                <hr class="border border-3 opacity-100 w-100" style="color: #707070">
            </section>

            @foreach($establishment->products()->distinct('tipo')->get(['tipo']) as $value)

                <section class="container justify-content-center d-flex flex-column">

                    <section class="container d-flex">
                        <h4 class="fs-4 fw-bold" style="color: #707070">{{ $value->tipo }}</h4>
                    </section>

                    <section class="container p-0 justify-content-start d-flex gap-4 flex-wrap">
                        @foreach($establishment->products()->where('tipo', $value->tipo)->get() as $product)
                        <div class="card rounded-4 shadow h-100" style="width: 25rem;">
                            <div class="card-img-top d-none d-md-block">
                                <img src="{{ asset('images/'.$product->images()->first()->imagem) }}"
                                     class="d-block w-100 img-fluid object-fit-cover rounded-top-4" alt="..." style="height: 12em;">
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center gap-1 p-2">
                                <div class="d-flex flex-column justify-content-between ">
                                    <div class="d-flex gap-2">
                                        <a href="{{ url('/produto/' . $product->id ) }}" class="text-decoration-none text-dark">
                                            <h5 class="card-title fw-bold ">{{ $product->nome_produto }}</h5>
                                        </a>

    {{--                                    <div class="d-flex gap-2 align-items-start">--}}
    {{--                                        <img src="/img/Filters/filtro_pizza.svg" alt="..." style="width: 1.5em;">--}}
    {{--                                        <img src="/img/Filters/filtro_veg.svg" alt="..." style="width: 1.5em;">--}}
    {{--                                    </div>--}}
                                    </div>
                                    <div class="d-flex gap-2">
                                        <p class="btn btn-dark border-0 px-1 py-1 fs-6 fw-bold m-0"
                                           style="background-color: #00A023;">
                                            R${{ number_format($product->preco, 2, ',', '.') }}
                                        </p>
{{--                                        <p class="btn btn-dark border-0 fs-6 fw-bold px-1 py-1 m-0"--}}
{{--                                           style="background-color: #0084A0;">--}}
{{--                                            Em promoção!--}}
{{--                                        </p>--}}
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ asset('images/'.$product->images()->first()->imagem) }}" alt=""
                                         class="card-img object-fit-cover border border-2 rounded-2 d-md-none"
                                         style="width: 5.5em; height: 5.5em;">
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </section>
                </section>
            @endforeach

        </section>


    </main>
@endsection
