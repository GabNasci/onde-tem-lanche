<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Styles -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />


    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/mapa.js') }}"></script>
</head>
<body>
    <div id="app">

        <header class="header fixed-top" style="margin-top: -1px;">
            <nav class="navbar navbar-expand-lg" style="background-color: #EA9F30;" data-bs-theme="dark">
                <div class="container-fluid px-md-5">
                    <a class="navbar-brand p-0 m-0" href="{{ url('/') }}">
                        <img class="logo" src="{{ asset("images/Logos/ondetemlanchelogo.svg") }}" title="logo onde tem lanche?"
                             alt="logo onde tem lanche?"  style="margin-right: 10vw;" />
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <img src="{{ asset("images/SVG/menu_hamburguer.svg") }}" class="navbar-toggler-icon" alt="">
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
                         style="background-color: #EA9F30; width: 12em;">
                        <div class="offcanvas-header justify-content-end">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body gap-2">
                            <ul class="navbar-nav float justify-content-center flex-grow-1 gap-4 mb-4 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-dark" aria-current="page" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <?php
                                    $estabelecimentos = \App\Models\Establishment::all();
                                    $estabelecimentoAleatorio = $estabelecimentos->random();
                                    $idEstabelecimentoAleatorio = $estabelecimentoAleatorio->id;
                                    ?>
                                    <a class="nav-link text-dark " href="{{ url('/estabelecimentos/' . $idEstabelecimentoAleatorio ) }}">Indicação</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark " href="{{ url('/busca') }}">Busca</a>
                                </li>
                            </ul>
                            <div class="d-flex flex-column-reverse align-items-center justify-content-center text-center flex-md-row gap-2">
                                @guest
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-outline-light px-3 m-0">{{ __('Fazer Cadastro') }}</a>
                                    @endif

                                    @if (Route::has('login'))
                                            <a href="{{ route('login') }}" class="btn btn-light px-5 m-0">{{ __('Login') }}</a>
                                    @endif
                                @else

                                        <?php
                                        $nomeExploded = explode(" ", \Illuminate\Support\Facades\Auth::user()->name);
                                        $userAvatar = \Illuminate\Support\Facades\Auth::user()->avatar;
                                        ?>
                                        <a href="{{ route('user') }}" class="text-decoration-none text-dark m-0">Bem vindo, {{isset($nomeExploded[0]) ? $nomeExploded[0] : Auth::user()->name}}!</a>
                                        <img src="{{ isset($userAvatar) ? 'images/' . $userAvatar : asset('images/Avatars/avatar.png')  }}" class="rounded-circle img-fluid object-fit-cover" alt="" style="height: 50px;width: 50px;">

                            </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a class="btn btn-light p-1 m-0" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>

                                @endguest



                        </div>
                    </div>
                </div>
            </nav>
        </header>


        <main>
            @include('flash-message')
            @yield('content')

        </main>
    </div>

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
                <a class="text-decoration-none p-0 m-0" href="estabelecimento.html">
                    <img src="{{asset('images/Icons/Indicacao.svg')}}" alt="" style="width: 80px;">
                </a>
                <p>Indicação</p>
            </div>
            <div>
                <a class="text-decoration-none p-0 m-0 d-flex flex-column justify-content-center align-items-center"
                   href="{{ url('/busca') }}">
                    <img src="{{asset('images/Icons/Pesquisa.svg')}}" alt="">
                    <p class="fs-6 m-0" style="color: #FFFFFF;">Busca</p>
                </a>
            </div>
        </div>
    </section>
    <div class="w-100 pb-5" style="background-color: #EA9F30;">
        <footer class="w-100 pt-4 d-flex flex-column align-items-center align-items-lg-start gap-4"
                style="margin-top: 112px;">
            <section
                class="container d-flex flex-column flex-lg-row justify-content-around align-items-center align-items-lg-start gap-2">
                <div class="d-flex flex-column gap-2 align-items-center align-items-lg-start">
                    <h6 class="m-0 fw-bold fs-5">Canais de Atendimento</h6>
                    <ul class="list-unstyled d-flex flex-column align-items-center align-items-lg-start">
                        <li class="footer__item">
                            <i class="fa-solid fa-envelope"></i>
                            atendimento@ondetemlanche.com.br
                        </li>
                        <li class="footer__item">
                            <i class="fa-solid fa-phone"></i>
                            +55 (44) 99999-9999
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-column gap-2">
                    <h6 class="m-0 fw-bold fs-5">Redes Sociais</h6>
                    <ul class="d-flex p-0 m-0 justify-content-center gap-2">
                        <a href="#" class="text-decoration-none link-dark">
                            <i class="fa-brands fa-square-facebook fs-5"></i>
                        </a>
                        <a href="#" class="text-decoration-none link-dark">
                            <i class="fa-brands fa-instagram fs-5"></i>
                        </a>
                        <a href="#" class="text-decoration-none link-dark">
                            <i class="fa-brands fa-youtube fs-5"></i>
                        </a>
                        <a href="#" class="text-decoration-none link-dark">
                            <i class="fa-brands fa-twitter fs-5"></i>
                        </a>
                    </ul>
                </div>
                <div class="d-flex flex-column align-items-center align-items-lg-start gap-2 m-0 me-lg-5">
                    <h6 class="m-0 fw-bold fs-5">Documentos</h6>
                    <ul class="d-flex flex-column align-items-center align-items-lg-start m-0 p-0 me-lg-5">
                        <a href="{{ route('termos') }}" class="link-dark">Termos e condições de uso</a>
                        <a href="{{ route('politica-de-privacidade') }}" class="link-dark">Privacidade do usuário</a>
                    </ul>
                </div>
            </section>
            <section class="container d-flex justify-content-center">
                <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                    <img class="logo__footer" src="{{ asset("images/Logos/ondetemlanchelogo.svg") }}" title="logo onde tem lanche?"
                         alt="logo onde tem lanche?" />
                    <p class=" m-0">desenvolvido por É os Guri</p>
                </div>
            </section>
        </footer>
    </div>

    <!--Importação de scripts (Bootstrap e Fontawesome)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b3b83db5db.js" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
