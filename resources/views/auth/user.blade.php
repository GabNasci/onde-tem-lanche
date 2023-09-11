@extends('layouts.app')

@section('content')
    <main style="margin-top: 112px;">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <div class="container d-flex justify-content-center flex-column gap-3 align-items-center">
                <h1 class="text-center fs-2 fw-bold">Meu perfil</h1>
                <div class="d-flex flex-column justify-content-center align-items-center gap-1">
                    <img class="rounded-circle img-fluid object-fit-cover" src="{{ isset($user->avatar) ? 'images/' . $user->avatar : asset('images/Avatars/avatar.png')  }}"
                         style="height: 154px; width: 154px;" alt="foto de perfil do usuário">
                </div>
                <?php
                $nomeExploded = explode(" ", Auth::user()->name);
                ?>
                <h1 class="fs-3 m-0 fw-bold">Olá, {{isset($nomeExploded[0]) ? $nomeExploded[0] : Auth::user()->name}}</h1>
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

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Alterar informações
                </button>
            </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                            <div class="modal-header d-flex flex-column align-items-center">
                                <h1 class="modal-title fs-5 m-0" id="exampleModalLabel">Alterar suas informações</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex flex-column align-items-center">

                                <div class="form-outline mb-4 text-center me-0" style="width: 300px;">
                                    <label class="form-label fs-5" for="nome">Nome:</label>
                                    <input id="nome"
                                           type="text"
                                           name="name"
                                           value="{{ $user->name }}"
                                           placeholder="Digite seu nome copleto"
                                           required
                                           autofocus
                                           maxlength="255" class="form-control" style="border: 1px solid #ACACAC;"/>
                                </div>

                                <div class="form-outline mb-4 text-center" style="width: 300px;">
                                    <label class="form-label fs-5" for="email">E-mail</label>
                                    <input id="email"
                                           name="email"
                                           type="email"
                                           value="{{ $user->email }}"
                                           placeholder="Digite seu e-mail"
                                           required
                                           autofocus
                                           maxlength="255" class="form-control" style="border: 1px solid #ACACAC;"/>
                                </div>

                                <div class="form-outline mb-4 text-center" style="width: 300px;">
                                    <label class="form-label fs-5" for="telephone">Telefone</label>
                                    <input id="telephone"
                                           type="text"
                                           name="telephone"
                                           value="{{ $user->telephone }}"
                                           placeholder="Digite seu telefone"
                                           required
                                           autofocus
                                           class="form-control" style="border: 1px solid #ACACAC;"/>
                                </div>

                                <div class="form-outline mb-4 text-center" style="width: 300px;">
                                    <label class="form-label fs-5" for="avatar">Alterar Imagem</label>
                                    <input name="avatar" id="avatar" type="file" accept="image/png, image/jpeg" class="form-control"
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
        @endsection
    </main>
        @section('scripts')
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://kit.fontawesome.com/b3b83db5db.js" crossorigin="anonymous"></script>
@endsection
