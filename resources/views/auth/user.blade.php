@extends('layouts.app')

@section('content')
    <main style="margin-top: 112px;">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="perfil">
            <div class="container d-flex justify-content-center flex-column gap-3 align-items-center">
                <h1 class="text-center fs-2 fw-bold">Meu perfil</h1>
                <div class="d-flex flex-column justify-content-center align-items-center gap-1">
                    <img class="rounded-circle img-fluid object-fit-cover" src="{{ isset($user->avatar) ? asset('/images/Avatars/desktop_perfil_foto.png') : asset('/images/Avatars/avatar.png')  }}"
                         style="height: 154px; width: 154px;">
                </div>
                <h1 class="fs-3 m-0 fw-bold">Olá, Henrique</h1>
                <div class="d-flex flex-column justify-content-center align-items-center gap-1">
                    <p class="fs-5 m-0 fw-bold">Nome completo:</p>
                    <p class="p-0 m-0">{{ $user->name }}</p>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center gap-1 ">
                    <p class="fs-5 m-0 fw-bold">E-mail:</p>
                    <p class="p-0 m-0">{{ $user->email }}</p>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center gap-1">
                    <p class="fs-5 m-0 fw-bold">Telefone:</p>
                    <p class="p-0 m-0">{{ $user->telephone }}</p>
                </div>

                <!-- Botão para abrir o pop-up -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Alterar informações
                </button>
            </div>

            <!-- Janela de pop-up -->
            <section class="alterar-perfil">
                <!--<div class="alterar-perfil__pop-up">
                    <hr/>
                    <form method="POST" action="{{ route('user.update') }}" class="alterar-perfil__pop-up__formulario">
                        @method('PUT')
                        @csrf
                        <h1 class="alterar-perfil__pop-up__formulario__titulo">Alterar informações</h1>
                        <label type="text" for="nome" class="alterar-perfil__pop-up__formulario__dado">Nome</label>
                        <input
                            id="nome"
                            type="text"
                            name="name"
                            value="{{ $user->name }}"
                            placeholder="Digite seu nome copleto"
                            class="alterar-perfil__pop-up__formulario__valor"
                            required
                            autofocus
                            maxlength="255"
                        />
                        <label for="email" class="alterar-perfil__pop-up__formulario__dado">E-mail</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ $user->email }}"
                            placeholder="Digite seu e-mail"
                            class="alterar-perfil__pop-up__formulario__valor"
                            required
                            autofocus
                            maxlength="255"
                        />
                        <label for="telephone" class="alterar-perfil__pop-up__formulario__dado">Telefone</label>
                        <input
                            id="telephone"
                            type="text"
                            name="telephone"
                            value="{{ $user->telephone }}"
                            placeholder="Digite seu telefone"
                            class="alterar-perfil__pop-up__formulario__valor"
                            required
                            autofocus
                        />
                        <button type="submit" class="alterar-perfil__botao-principal">Salvar Alterações</button>
                        <a href="{{ url('/password/reset') }}" class="alterar-perfil__botao-auxiliar">Esqueci minha
                            senha</a>
                    </form>
                    <hr/>
                    <div class="alterar-perfil__pop-up__fechar">
                        <button class="alterar-perfil__pop-up__fechar__botao" onclick="fecharJanela()">
                            <img src="{{ asset('images/cancel.svg') }}" alt="Cancelar"/>
                        </button>
                    </div>
                </div>-->

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('user.update') }}">
                                @method('PUT')
                                @csrf

                            <div class="modal-header d-flex flex-column align-items-center">
                                <h1 class="modal-title fs-5 m-0" id="exampleModalLabel">Alterar suas informações</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex flex-column align-items-center">

                                <div class="form-outline mb-4 text-center me-0" style="width: 300px;">
                                    <label class="form-label fs-5" for="form2Example1">Nome:</label>
                                    <input id="nome"
                                           type="text"
                                           name="name"
                                           value="{{ $user->name }}"
                                           placeholder="Digite seu nome copleto"
                                           class="alterar-perfil__pop-up__formulario__valor"
                                           required
                                           autofocus
                                           maxlength="255" class="form-control" style="border: 1px solid #ACACAC;"/>
                                </div>

                                <div class="form-outline mb-4 text-center" style="width: 300px;">
                                    <label class="form-label fs-5" for="form2Example1">E-mail</label>
                                    <input id="email"
                                           name="email"
                                           type="email"
                                           value="{{ $user->email }}"
                                           placeholder="Digite seu e-mail"
                                           class="alterar-perfil__pop-up__formulario__valor"
                                           required
                                           autofocus
                                           maxlength="255" class="form-control" style="border: 1px solid #ACACAC;"/>
                                </div>

                                <div class="form-outline mb-4 text-center" style="width: 300px;">
                                    <label class="form-label fs-5" for="form2Example1">Telefone</label>
                                    <input id="telephone"
                                           type="text"
                                           name="telephone"
                                           value="{{ $user->telephone }}"
                                           placeholder="Digite seu telefone"
                                           class="alterar-perfil__pop-up__formulario__valor"
                                           required
                                           autofocus
                                           class="form-control" style="border: 1px solid #ACACAC;"/>
                                </div>

                                <div class="form-outline mb-4 text-center" style="width: 300px;">
                                    <label class="form-label fs-5" for="form2Example1">Alterar Imagem</label>
                                    <input type="file" accept="image/png, image/jpeg" id="form2Example1" class="form-control"
                                           style="border: 1px solid #ACACAC;" placeholder="" />
                                </div>

                                <a href="{{ url('/password/reset') }}" class="p-0 m-0">Redefinir sua senha</a>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection
        @section('scripts')
            <script>
                const modal = document.querySelector('.alterar-perfil__pop-up')

                function abrirJanela() {
                    modal.classList.add('ativar')
                }

                function fecharJanela() {
                    modal.classList.remove('ativar')
                }
            </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://kit.fontawesome.com/b3b83db5db.js" crossorigin="anonymous"></script>
@endsection
