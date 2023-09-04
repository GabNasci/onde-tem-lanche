@extends('layouts.app')
@section('content')
        <main class="d-flex flex-column gap-md-4" style="margin-top: 56px;">

        <section class="px-0 px-md-5">
            <div class="position-relative d-flex justify-content-end align-items-end">
                <a href="#"
                   class="position-absolute btn btn-dark border-0 d-flex align-items-center gap-2 justify-content-center px-2 py-1 me-1"
                   style="background: rgba(0, 0, 0, 0.50);">
                    <i class="fa-solid fa-image"></i>
                    <p class="card-text text-decoration-underline fs-6">ver fotos</p>
                </a>
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
                            </div>

                        </div>
                        <div class="d-none d-lg-block">
                            <h7 class="card-subtitle fw-bold">Descrição do estabelecimento</h7>
                            <p class="card-text .d-sm-none .d-md-block">{{$establishment->descricao}}</p>
                        </div>
                        <div class=" d-lg-flex gap-2">
                            @foreach($establishment->categories as $categoryPivot)
                                <img src="{{ asset('images/'.$categoryPivot->category->icone) }}" alt="..." style="width: 1.5em;">
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
            <div>
                <a href="" class="btn text-decoration-underline">
                    <i class="fa-solid fa-earth-americas" style="font-size: 2em;"></i>
                    <div class="d-flex">
                        <p class="p-0 m-0">Site</p>
                        <img src="img/Icons/arrow.svg" alt="" class="" style="width: 0.7em;">
                    </div>
                </a>
            </div>
            <div>
                <a href="" class="btn text-decoration-underline">
                    <i class="fa-solid fa-phone" style="font-size: 2em;"></i>
                    <div class="d-flex">
                        <p class="p-0 m-0">Ligar</p>
                        <img src="img/Icons/arrow.svg" alt="" class="" style="width: 0.7em;">
                    </div>
                </a>
            </div>

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
                            <p class="card-text" style="text-align: justify;">Pizza Chef, uma pizzaria em
                                Campo Mourão que encanta com sabores autênticos. Massa crocante, ingredientes frescos e um
                                ambiente aconchegante. Uma explosão de delícias para os amantes da pizza. Uma experiência
                                gastronômica que vai além das expectativas.</p>
                        </div>
                        <div class="tab-pane fade card-body border border-1 rounded-3 shadow-sm" id="profile-tab-pane"
                             role="tabpanel" aria-labelledby="profile-tab" tabindex="0" style="height: 260px;">
                            <h5 class="card-title text-start">Contato e localização</h5>
                            <div class="d-flex flex-column gap-4 justify-content-evenly  h-100">
                                <div class="d-flex gap-2 align-items-center">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p class="card-text">atendimentopizzacheff@gmail.com</p>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p class="card-text">Av. Irmãos Pereira, 44444, Centro</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="card-text">(44) 91234-1234</p>
                                    </div>
                                    <div>
                                        <ul class=" list-unstyled d-flex p-0 m-0 justify-content-center align-items-end gap-2">
                                            <li>
                                                <a href="#" class="text-decoration-none link-dark">
                                                    <i class="fa-brands fa-instagram fs-3"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-decoration-none link-dark">
                                                    <i class="fa-brands fa-square-facebook fs-3"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-decoration-none link-dark">
                                                    <i class="fa-brands fa-whatsapp fs-3"></i>
                                                </a>
                                            </li>
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

            <section class="container d-flex align-items-center gap-2">
                <h4 class="px-2 fw-bold m-0" style="background-color: #EA9F30; font-family: 'destaque';">Destaques</h4>
                <hr class="border border-3 opacity-100 w-100" style="color: #707070">
            </section>

            <section class="container d-flex justify-content-center">
                <div id="carouselExample1" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-indicators d-none m-0" style="margin-top: px;">
                            <button type="button" data-bs-target="#carouselExample1" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample1" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-item active">
                            <div class="card rounded-4">
                                <div class="row ">
                                    <div class="col-lg-6">
                                        <img src="/img/Events/imagem-dennis.svg" class="card-img img-fluid object-fit-cover h-100 rounded-4"
                                             alt="...">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-body d-flex row gap-2 gap-md-4 p-0 px-2 py-2">
                                            <h5 class="card-title m-0 fw-bold fs-4">Dennis DJ em Campo Mourão!</h5>
                                            <div class="d-flex gap-2 gap-md-4">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <i class="fa-regular fa-calendar fs-6"></i>
                                                    <p class="card-text">22/08</p>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <i class="fa-regular fa-clock fs-6"></i>
                                                    <p class="card-text">16:00</p>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <i class="fa-solid fa-location-dot fs-6"></i>
                                                    <p class="card-text">Cayenna Club</p>
                                                </div>
                                            </div>
                                            <div class="d-none d-md-block">
                                                <h5 class="card-subtitle fs-5 fw-bold">Descrição do evento</h5>
                                                <p class="card-text">Prepare-se para uma tarde eletrizante em Campo Mourão! No dia 22/08, o
                                                    Cayenna Club, na Usina Mourão, receberá pela primeira vez o aclamado DJ brasileiro Dennis DJ.
                                                    Com suas batidas contagiantes e energia sem igual, Dennis promete agitar a cidade em um evento
                                                    imperdível.</p>
                                            </div>
                                            <div class="d-flex justify-content-center gap-5 gap-md-4">
                                                <a href="#"
                                                   class="btn btn-primary text-dark border-0 d-flex align-items-center gap-2 px-5 px-md-2"
                                                   style="background-color:#7DD3EE;">
                                                    <i class="fa-solid fa-circle-info fs-5"></i>
                                                    <p class="card-text fs-6 d-none d-md-block">
                                                        Visitar página do evento
                                                    </p>
                                                </a>
                                                <a href="#"
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
                        <div class="carousel-item">
                            <div class="card rounded-4">
                                <div class="row ">
                                    <div class="col-lg-6">
                                        <img src="/img/Events/imagem-rodizio.svg"
                                             class="card-img img-fluid object-fit-cover h-100 rounded-4" alt="...">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-body d-flex row gap-2 gap-md-4 p-0 px-2 py-2">
                                            <h5 class="card-title m-0 fw-bold fs-4">Rodízio de pizza com música!</h5>
                                            <div class="d-flex gap-2 gap-md-4">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <i class="fa-regular fa-calendar fs-6"></i>
                                                    <p class="card-text">01/07</p>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <i class="fa-regular fa-clock fs-6"></i>
                                                    <p class="card-text">11:00</p>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <i class="fa-solid fa-location-dot fs-6"></i>
                                                    <p class="card-text">Pizzaria Pizza Chef</p>
                                                </div>
                                            </div>
                                            <div class="d-none d-md-block">
                                                <h5 class="card-subtitle fs-5 fw-bold">Descrição do evento</h5>
                                                <p class="card-text">Desfrute de uma noite de sabores e melodias inesquecíveis na Pizza Chef! A
                                                    pizzaria convida você para um delicioso rodízio de pizzas, acompanhado da encantadora música
                                                    ao
                                                    vivo do cantor sertanejo Estácio Lima.</p>
                                            </div>
                                            <div class="d-flex justify-content-center gap-5 gap-md-4">
                                                <a href="#"
                                                   class="btn btn-primary text-dark border-0 d-flex align-items-center gap-2 px-5 px-md-2"
                                                   style="background-color:#7DD3EE;">
                                                    <i class="fa-solid fa-circle-info fs-5"></i>
                                                    <p class="card-text fs-6 d-none d-md-block">
                                                        Visitar página do evento
                                                    </p>
                                                </a>
                                                <a href="#"
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
                    </div>
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
                </div>
            </section>



            <section class="container d-flex align-items-center gap-2">
                <h4 class="px-2 fw-bold m-0" style="background-color: #EA9F30; font-family: 'destaque';">Cardápio</h4>
                <hr class="border border-3 opacity-100 w-100" style="color: #707070">
            </section>


            <section class="container justify-content-center d-flex flex-column">

                <section class="container d-flex">
                    <h4 class="fs-4 fw-bold">Pizzas de 8 pedaços</h4>
                </section>

                <section class="container p-0 justify-content-center d-flex gap-4 flex-wrap">
                    <div class="card rounded-4 shadow h-100" style="width: 25rem;">
                        <div class="card-img-top d-none d-md-block">
                            <img src="/img/Products/rucula-com-tomate-seco.svg"
                                 class="d-block w-100 img-fluid object-fit-cover rounded-top-4" alt="..." style="height: 12em;">
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center gap-1 p-2">
                            <div class="d-flex flex-column justify-content-between ">
                                <div class="d-flex gap-2">
                                    <a href="produto.html" class="text-decoration-none text-dark">
                                        <h5 class="card-title fw-bold m-0">Rúcula com tomate seco</h5>
                                    </a>

                                    <div class="d-flex gap-2 align-items-start">
                                        <img src="/img/Filters/filtro_pizza.svg" alt="..." style="width: 1.5em;">
                                        <img src="/img/Filters/filtro_veg.svg" alt="..." style="width: 1.5em;">
                                    </div>
                                </div>
                                <div class="gap-2 d-flex">
                                    <p class="btn btn-dark border-0 px-1 py-1 fs-6 fw-bold m-0"
                                       style="background-color: #00A023;">
                                        R$ 22,50
                                    </p>
                                    <p class="btn btn-dark border-0 fs-6 fw-bold px-1 py-1 m-0"
                                       style="background-color: #0084A0;">
                                        Em promoção!
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="/img/Products/rucula-com-tomate-seco.svg" alt=""
                                     class="card-img object-fit-cover border border-2 rounded-2 d-md-none"
                                     style="width: 5.5em; height: 5.5em;">
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-4 shadow h-100" style="width: 25rem;">
                        <div class="card-img-top d-none d-md-block">
                            <img src="/img/Products/margherita.svg" class="d-block w-100 img-fluid object-fit-cover rounded-top-4"
                                 alt="..." style="height: 12em;">
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center gap-1 p-2">
                            <div class="d-flex flex-column gap-2 ">
                                <div class="d-flex gap-2">
                                    <h5 class="card-title fw-bold m-0">Margherita</h5>
                                    <div class="d-flex gap-2 align-items-start">
                                        <img src="/img/Filters/filtro_pizza.svg" alt="..." style="width: 1.5em;">
                                        <img src="/img/Filters/filtro_veg.svg" alt="..." style="width: 1.5em;">
                                    </div>
                                </div>
                                <div class="gap-2 d-flex">
                                    <p class="btn btn-dark border-0 px-1 py-1 fs-6 fw-bold m-0"
                                       style="background-color: #00A023;">
                                        R$ 22,50
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="/img/Products/margherita.svg" alt=""
                                     class="card-img object-fit-cover border border-2 rounded-2 d-md-none"
                                     style="width: 5.5em; height: 5.5em;">
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-4 shadow h-100" style="width: 25rem;">
                        <div class="card-img-top d-none d-md-block">
                            <img src="/img/Products/Pepperoni.svg" class="d-block w-100 img-fluid object-fit-cover rounded-top-4"
                                 alt="..." style="height: 12em;">
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center gap-1 p-2">
                            <div class="d-flex flex-column gap-2 ">
                                <div class="d-flex gap-2">
                                    <h5 class="card-title fw-bold m-0">Pepperoni</h5>
                                    <div class="d-flex gap-2 align-items-start">
                                        <img src="/img/Filters/filtro_pizza.svg" alt="..." style="width: 1.5em;">
                                        <img src="/img/Filters/filtro_veg.svg" alt="..." style="width: 1.5em;">
                                    </div>
                                </div>
                                <div class="gap-2 d-flex">
                                    <p class="btn btn-dark border-0 px-1 py-1 fs-6 fw-bold m-0"
                                       style="background-color: #00A023;">
                                        R$ 22,50
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="/img/Products/Pepperoni.svg" alt=""
                                     class="card-img object-fit-cover border border-secondary rounded-2 d-md-none"
                                     style="width: 5.5em; height: 5.5em;">
                            </div>
                        </div>
                    </div>



                </section>
            </section>

            <section class="container justify-content-center d-flex flex-column">

                <section class="container d-flex">
                    <h4 class="fs-4 fw-bold">Pizzas de 12 pedaços</h4>
                </section>

                <section class="container p-0 justify-content-center d-flex gap-4 flex-wrap">
                    <div class="card rounded-4 shadow h-100" style="width: 25rem;">
                        <div class="card-img-top d-none d-md-block">
                            <img src="/img/Products/rucula-com-tomate-seco.svg"
                                 class="d-block w-100 img-fluid object-fit-cover rounded-top-4" alt="..." style="height: 12em;">
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center gap-1 p-2">
                            <div class="d-flex flex-column gap-2 ">
                                <div class="d-flex gap-2">
                                    <h5 class="card-title fw-bold m-0">Rúcula com tomate seco</h5>
                                    <div class="d-flex gap-2 align-items-start">
                                        <img src="/img/Filters/filtro_pizza.svg" alt="..." style="width: 1.5em;">
                                        <img src="/img/Filters/filtro_veg.svg" alt="..." style="width: 1.5em;">
                                    </div>
                                </div>
                                <div class="gap-2 d-flex">
                                    <p class="btn btn-dark border-0 px-1 py-1 fs-6 fw-bold m-0"
                                       style="background-color: #00A023;">
                                        R$ 22,50
                                    </p>
                                    <p class="btn btn-dark border-0 fs-6 fw-bold px-1 py-1 m-0"
                                       style="background-color: #0084A0;">
                                        Em promoção!
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="/img/Products/rucula-com-tomate-seco.svg" alt=""
                                     class="card-img object-fit-cover border border-secondary rounded-2 d-md-none"
                                     style="width: 5.5em; height: 5.5em;">
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-4 shadow h-100" style="width: 25rem;">
                        <div class="card-img-top d-none d-md-block">
                            <img src="/img/Products/margherita.svg" class="d-block w-100 img-fluid object-fit-cover rounded-top-4"
                                 alt="..." style="height: 12em;">
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center gap-1 p-2">
                            <div class="d-flex flex-column gap-2 ">
                                <div class="d-flex gap-2">
                                    <h5 class="card-title fw-bold m-0">Margherita</h5>
                                    <div class="d-flex gap-2 align-items-start">
                                        <img src="/img/Filters/filtro_pizza.svg" alt="..." style="width: 1.5em;">
                                        <img src="/img/Filters/filtro_veg.svg" alt="..." style="width: 1.5em;">
                                    </div>
                                </div>
                                <div class="gap-2 d-flex">
                                    <p class="btn btn-dark border-0 px-1 py-1 fs-6 fw-bold m-0"
                                       style="background-color: #00A023;">
                                        R$ 22,50
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="/img/Products/Pepperoni.svg" alt=""
                                     class="card-img object-fit-cover border border-secondary rounded-2 d-md-none"
                                     style="width: 5.5em; height: 5.5em;">
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-4 shadow h-100" style="width: 25rem;">
                        <div class="card-img-top d-none d-md-block">
                            <img src="/img/Products/Pepperoni.svg" class="d-block w-100 img-fluid object-fit-cover rounded-top-4"
                                 alt="..." style="height: 12em;">
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center gap-1 p-2">
                            <div class="d-flex flex-column gap-2 ">
                                <div class="d-flex gap-2">
                                    <h5 class="card-title fw-bold m-0">Pepperoni</h5>
                                    <div class="d-flex gap-2 align-items-start">
                                        <img src="/img/Filters/filtro_pizza.svg" alt="..." style="width: 1.5em;">
                                        <img src="/img/Filters/filtro_veg.svg" alt="..." style="width: 1.5em;">
                                    </div>
                                </div>
                                <div class="gap-2 d-flex">
                                    <p class="btn btn-dark border-0 px-1 py-1 fs-6 fw-bold m-0"
                                       style="background-color: #00A023;">
                                        R$ 22,50
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="/img/Products/Pepperoni.svg" alt=""
                                     class="card-img object-fit-cover border border-secondary rounded-2 d-md-none"
                                     style="width: 5.5em; height: 5.5em;">
                            </div>
                        </div>
                    </div>

                </section>
            </section>
        </section>


    </main>
@endsection
