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
                                    @foreach($product->establishment->banners as $i => $banner)
                                        <div class="tab-pane {{ $i === 0 ? 'active' : ''}} " id="{{$i + 1}}-tab-pane"
                                             role="tabpanel" aria-labelledby="{{$i + 1}}-tab" tabindex="0">
                                            <p>{{$i + 1 . "/" . $product->establishment->banners->count()}}</p>
                                            <img src="{{ asset('images/'.$banner->imagem) }}" class="img-fluid object-fit-cover w-100" alt="" style="height: 220px">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="modal-footer p-0 justify-content-center">
                                <ul class="nav nav-underline list-unstyled" id="myTab" role="tablist">
                                    @foreach($product->establishment->banners as $i => $banner)
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
                <img src="{{ asset('images/'.$product->establishment->banners()->where('is_destaque', true)->first()->imagem)}}" class="w-100 img-fluid object-fit-cover" alt=""
                     style="height: 10rem;">
            </div>
            <div class="d-flex">
                <div class="col-4 col-md-2 p-2">
                    <img src="{{asset('images/' . $product->establishment->imagem_logo)}}" class="card-img img-fluid rounded-4 border border-2" alt="..."
                         style="width: 100%;">
                </div>
                <div class="col-md-10">
                    <div class="d-flex flex-column gap-2 p-0 px-0 px-md-2 py-2" style="max-height: 176.4px;">
                        <div class="d-flex flex-column flex-md-row gap-2 justify-content-md-between">
                            <div class="d-flex gap-2">
                                <h5 class="card-title m-0 fw-bold fs-4">{{$product->establishment->nome}}</h5>
                                <ul class="d-none list-unstyled d-md-flex p-0 m-0 justify-content-center align-items-end gap-2">
                                    <li>
                                        <a href="{{$product->establishment->instagram}}" class="text-decoration-none link-dark">
                                            <i class="fa-brands fa-instagram fs-4"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$product->establishment->facebook}}" class="text-decoration-none link-dark">
                                            <i class="fa-brands fa-square-facebook fs-4"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$product->establishment->whatsapp}}" class="text-decoration-none link-dark">
                                            <i class="fa-brands fa-whatsapp fs-4"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex gap-4">
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="fa-regular fa-clock"></i>
                                        <p class="card-text fw-bold">{{$product->establishment->horario_inicial->format('H:i') . " - " . $product->establishment->horario_final->format('H:i')}}</p>
                                    </div>
                                    <div class="d-none d-lg-flex gap-2 align-items-center">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p class="card-text fw-bold">{{$product->establishment->logradouro . ", " . $product->establishment->numero . ", " . $product->establishment->bairro}}</p>
                                    </div>
                                    <div class="d-none d-lg-flex gap-2 align-items-center">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="card-text fw-bold">{{$product->establishment->whatsapp}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-none d-lg-block">
                            <h7 class="card-subtitle fw-bold">Descrição do estabelecimento</h7>
                            <p class="card-text .d-sm-none .d-md-block">{{$product->establishment->descricao}}</p>
                        </div>
                        <div class=" d-lg-flex gap-2">
                            @foreach($product->establishment->categories as $categoryPivot)
                                <img src="{{ asset('images/'.$categoryPivot->category->icone) }}" alt="..." style="width: 32px;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-flex container flex-column gap-4 ">
            <div>
                <div class="row ">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/'.$product->images()->first()->imagem) }}"
                             class="img-fluid object-fit-cover h-100 w-100 rounded-4" alt="...">
                    </div>
                    <div class="col-lg-6">
                        <div class=" d-flex row gap-4 gap-md-4 p-0 px-2 py-2 ">
                            <div class="d-flex gap-2 align-items-center">
                                <h5 class="m-0 fw-bold fs-2">{{$product->nome_produto}}</h5>
{{--                                <div class="d-flex gap-2 ">--}}
{{--                                    <img src="/img/Filters/filtro_pizza.svg" alt="..." style="width: 2em;">--}}
{{--                                    <img src="/img/Filters/filtro_veg.svg" alt="..." style="width: 2em;">--}}
{{--                                </div>--}}
                            </div>
                            <div class="">
                                <p class="fs-5 m-0">{{$product->descricao}}</p>
                            </div>
                            <div class="d-flex flex-column align-items-center flex-md-row gap-2 gap-md-4">
                                <p class="btn btn-dark border-0 px-2 py-1 fs-3 fw-bold m-0"
                                   style="background-color: #00A023;">
                                    R${{ number_format($product->preco, 2, ',', '.') }}
                                </p>
                                <a href="{{'https://wa.me/' . $product->establishment->whatsapp}}" target="_blank"
                                   class="btn btn-outline-success d-flex justify-content-center align-items-center gap-2 px-5 px-md-2"
                                   style="border-color:#1B8944 ;">
                                    <i class="fa-brands fa-whatsapp fs-5" style="color: #1B8944;"></i>
                                    <p class="card-text fs-6" style="color: #1B8944;">
                                        Seja atendido via WhatsApp
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>


    </main>
@endsection
