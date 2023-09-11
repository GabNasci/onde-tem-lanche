@extends('layouts.app')
    @section('content')
        <main class="d-flex flex-column gap-4">
            <section class="container d-flex flex-column gap-2" style="margin-top: 5rem;">
                <form method="GET" action="{{ route('busca') }}">
                    @csrf
                    <section class="d-flex flex-column justify-content-center align-items-center gap-">
                        <h2 class="fs-5 fw-bold" style="font-family: 'sub-destaque';">E aí! Tá em busca do que hoje?</h2>
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

                <section class="container d-flex w-100 justify-content-center align-items-center gap-2 d-md-none">
                    <hr class="border border-3 opacity-100 w-100" style="color: #707070">
                    <h3 class="fs-5" style="color: #707070;">Categorias</h3>
                    <hr class="border border-3 opacity-100 w-100" style="color: #707070">
                </section>

                <section class="d-flex justify-content-md-center gap-1 categorias" style="max-width: 100vw; overflow-x: scroll;">
                    @foreach($categories as $category)
                        <div class="">
                            <a href="{{ url('/busca?categoryId='.$category->id) }}" class="">
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


            <section class="container d-flex align-items-center gap-2">
                <h4 class="px-2 fw-bold m-0" style="background-color: #EA9F30; font-family: 'destaque';">Destaques</h4>
                <hr class="border border-3 opacity-100 w-100" style="color: #707070">
            </section>

            <section class="container d-flex justify-content-center">
                <div id="carouselExampleEvent" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-indicators d-none m-0">
                            <button type="button" data-bs-target="#carouselExample1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        @foreach($events as $key => $event)
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
                                                    <a href="{{ $event->url ? : '#' }}" {{ $event->url ? 'target="_blank"': '' }}
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
                    <button class="carousel-control-prev d-none d-md-block" type="button" data-bs-target="#carouselExampleEvent"
                            data-bs-slide="prev"
                            style="background-color: #D9D9D9; width: 6vh; height: 6vh; border-radius: 50%; top: 50%; transform: translateY(-50%); transform: translateX(-140%);">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none d-md-block" type="button" data-bs-target="#carouselExampleEvent"
                            data-bs-slide="next"
                            style="background-color: #D9D9D9; width: 6vh; height: 6vh; border-radius: 50%; top: 50%; transform: translateY(-50%); transform: translateX(140%);">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <section class="container justify-content-center d-flex flex-column">

                <section class="container d-flex">
                    <h4 class="fs-5 fw-bold">Recomendados para hoje</h4>
                </section>

                <section class="container justify-content-center d-flex gap-4 flex-wrap">
                    @foreach($establishments as $key => $establishment)

                    <div class="card rounded-4 shadow h-100" style="width: 25rem;">
                        <div id="carouselExample{{$key}}" class="carousel slide card-img-top ">
                            <div class="carousel-inner rounded-top-4">
                                @foreach($establishment->banners as $i => $banner)
                                <div class="carousel-item {{ $i === 0 ? 'active' : ''}}">
                                    <img src="{{ asset('images/'.$banner->imagem) }}" class="d-block w-100 img-fluid object-fit-cover" alt="..." style="height: 12em;">
                                </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{$key}}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{$key}}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body d-flex gap-2 p-2">
                            <div>
                                <img src="{{ asset('images/'.$establishment->imagem_logo) }}" alt="" class="card-img object-fit-cover border border-secondary rounded-4" style="width: 5.5em;">
                            </div>
                            <div class="d-flex row gap-2">
                                <h5 class="card-title fw-bold m-0">{{ $establishment->nome }}</h5>
                                <h6 class="card-subtitle fs-5 text-secondary">{{ $establishment->tipo }}</h6>
                                <div class="d-grid gap-2 d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        @foreach($establishment->categories as $categoryPivot)
                                        <img src="{{ asset('images/'.$categoryPivot->category->icone) }}" alt="..." style="width: 1.5em;">
                                        @endforeach
                                    </div>
                                        <a href="{{ url('/estabelecimentos/' . $establishment->id ) }}" class="btn btn-dark border-0 d-flex align-items-center gap-2 justify-content-center px-2 py-1">
                                            <i class="fa-solid fa-utensils fs-6"></i>
                                            <p class="card-text fs-6">ver mais</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </section>
            </section>

            @php
                $printedPromotionals = []; // Um array para rastrear os valores promocionais já impressos
            @endphp

            @foreach($establishments as $key => $establishment)
                @foreach($establishment->products()->distinct()->whereNotNull('promocional')->get(['promocional']) as $value)
                    @if (!in_array($value->promocional, $printedPromotionals))
                        <section class="container justify-content-center d-flex flex-column">
                            <section class="container d-flex">
                                <h4 class="fs-5 fw-bold">{{ $value->promocional }}</h4>
                            </section>
                            @php
                                $printedPromotionals[] = $value->promocional; // Adicione o valor atual ao array de impressão
                            @endphp

                            <section class="container justify-content-center d-flex gap-4 flex-wrap">
                                @foreach($establishments as $key => $establishment)
                                    @foreach($establishment->products()->where('promocional', $value->promocional)->get() as $product)
                                        <div class="card rounded-4 shadow h-100" style="width: 332px;">
                                            <div class="card-body d-flex gap-2 p-2">
                                                <div>
                                                    <img src="{{ asset('images/'.$establishment->imagem_logo) }}" alt=""
                                                         class="card-img object-fit-cover border border-secondary rounded-4" style="width: 5.5em;">
                                                </div>
                                                <div class="d-flex flex-column gap-2 w-100">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="card-title fw-bold m-0">{{ $establishment->nome }}</h5>
                                                        <div class="d-flex gap-2">
                                                            @foreach($establishment->categories as $categoryPivot)
                                                                <img src="{{ asset('images/'.$categoryPivot->category->icone) }}" alt="..." style="width: 1.5em;">
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <h5 class="card-subtitle fs-5 text-secondary">{{ $establishment->tipo }}</h5>
                                                </div>
                                            </div>
                                            <div id="carousel{{$key}}" class="carousel slide card-img-top ">
                                                <div class="carousel-inner">
                                                    @foreach($product->images as $imageProduct)
                                                        <div class="carousel-item active ">
                                                            <img src="{{ asset('images/'.$imageProduct->imagem) }}" class="d-block w-100 img-fluid object-fit-cover" alt="..." style="height: 12em;">
                                                        </div>
                                                    @endforeach
                                                        @if($product->images->count() > 1)
                                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{$key}}" data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </button>
                                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel{{$key}}" data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Next</span>
                                                            </button>
                                                        @endif
                                                </div>
                                            </div>
                                            <div class="card-body d-flex justify-content-between align-items-center gap-1 p-2">
                                                <div class="d-flex justify-content-between w-100">
                                                    <a href="{{ url('/produto/' . $product->id ) }}" class="text-decoration-none text-dark">
                                                        <h5 class="card-title fw-bold m-0">{{ $product->nome_produto }}</h5>
                                                        <p class="m-0">{{$product->tipo}}</p>

                                                    </a>
                                                    <p class="text-light rounded-2 border-0 px-1 py-1 fs-6 fw-bold m-0" style="background-color: #00A023; height: 32px;">
                                                        R${{ number_format($product->preco, 2, ',', '.') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </section>
                        </section>
                    @endif
                @endforeach
            @endforeach





        </main>
        <section class="fixed-bottom d-sm-none container px-5 py-3 d-flex flex-column rounded-top-4 w-100"
                 style="background-color: #131313; margin-bottom: -1px;">
            <div class="d-flex justify-content-between">
                <div>
                    <a class="text-decoration-none p-0 m-0 d-flex flex-column justify-content-center align-items-center"
                       href="{{ url('/') }}">
                        <img src="{{asset('images/Icons/Home-active.svg')}}" alt="">
                        <p class="fs-6 m-0" style="color: #EA9F30;">Home</p>
                    </a>
                </div>
                <div class="align-self-center d-flex flex-column align-items-center" style="margin-top: -48px;">
                    <?php
                        $estabelecimentos = \App\Models\Establishment::all();
                        $estabelecimentoAleatorio = $estabelecimentos->random();
                        $idEstabelecimentoAleatorio = $estabelecimentoAleatorio->id;
                    ?>
                    <a class="text-decoration-none p-0 m-0" href="{{ url('/estabelecimentos/' . $idEstabelecimentoAleatorio ) }}">
                        <img src="{{asset('images/Icons/Indicacao.svg')}}" alt="" style="width: 80px;">
                    </a>
                    <p class="fs-6 m-0" style="color: #FFFFFF; font-family: 'destaque';">Indicação</p>
                </div>
                <div>
                    <a class="text-decoration-none p-0 m-0 d-flex flex-column justify-content-center align-items-center"
                       href="{{ url('/busca') }}">
                        <img src="{{asset('images/Icons/Pesquisa.svg')}}" alt="">
                        <p class="fs-5 m-0" style="color: #FFFFFF;">Busca</p>
                    </a>
                </div>
            </div>
        </section>

    @endsection
