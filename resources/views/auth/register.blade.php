@extends('layouts.app')

@section('content')

   <!-- <main>
        <div class="formulario">
            <form method="POST" class="formulario__campos" action="{{ route('register') }}">
                @csrf
                <h1 class="formulario__campos__titulo">
                    {{ __('Legal! Vamos criar sua conta') }}
                </h1>
                <label type="text" for="name">Qual seu nome completo?</label>
                <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Seu nome completo"
                    required
                    class="formulario__campo__input @error('name') is-invalid @enderror"
                    value="{{ old('name') }}"
                    autofocus
                />
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label type="text" for="telephone">Qual seu telefone?</label>
                <input
                    id="telephone"
                    type="text"
                    placeholder="Número de telefone"
                    class="formulario__campo__input phone @error('telephone') is-invalid @enderror"
                    name="telephone"
                    value="{{ old('telephone') }}"
                    required
                    autofocus
                />
                @error('telephone')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="email">Insira seu melhor e-mail</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    placeholder="Seu melhor e-mail"
                    class="formulario__campo__input @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    required
                    autofocus
                />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="password">Crie sua senha</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    class="formulario__campo__input @error('password') is-invalid @enderror"
                    placeholder="Crie sua senha"
                    autofocus
                />
                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password-confirm">Confirme sua senha</label>
                <input
                    id="password-confirm"
                    type="password"
                    class="formulario__campo__input"
                    name="password_confirmation"
                    placeholder="Confirme sua senha"
                    required
                    autocomplete="new-password"
                >

                <div class="formulario__botoes-links">
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox"
                                   class="form-check-input @error('termo') is-invalid @enderror"
                                   required
                                   name="termo"
                                {{ old('termo') ? 'checked' : '' }}>
                            <label class="form-check-label" for="termo">
                                    <span class="text-center">
                                        Eu aceito os
                                        <a href="{{ url('/termos') }}" class="formulario__botoes-links__aceite__link"
                                        >termos e condições</a
                                        >.
                                    </span>
                            </label>

                            @error('termo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="formulario__botoes-links__botao-principal">Fazer Cadastro</button>
                    <a href="{{ url('/login') }}" class="formulario__botoes-links__botao-auxiliar">Voltar para tela inicial</a>
                </div>
            </form>
        </div>
    </main>-->

    <main style="margin-top: 112px;">
        <form method="POST" action="{{ route('register') }}" class="container text-center d-flex flex-column gap-4 align-items-center">
            @csrf
            <h1 class="text-center fw-bold fs-2">Legal! Vamos criar sua conta.</h1>
            <div class="d-flex flex-column gap-4">
                <div>
                    <label type="text" for="name" class="form-label fs-5" for="form2Example1">Qual seu nome completo?</label>
                    <input id="name"
                           name="name"
                           type="text"
                           placeholder="Seu nome completo"
                           required
                           value="{{ old('name') }}"
                           autofocus
                           class="form-control @error('name') is-invalid @enderror" style="border: 1px solid #ACACAC;"
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div>
                    <label type="text" for="telephone" class="form-label fs-5" for="form2Example1">Qual seu telefone?</label>
                    <input id="telephone"
                           type="text"
                           name="telephone"
                           value="{{ old('telephone') }}"
                           required
                           autofocus
                           class="form-control @error('telephone') is-invalid @enderror" style="border: 1px solid #ACACAC;"
                           placeholder="(DDD)XXXXX-XXXX" />
                </div>
                @error('telephone')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div>
                    <label for="email" class="form-label fs-5">Digite seu melhor e-mail</label>
                    <input id="email"
                           type="email"
                           name="email"
                           placeholder="Seu melhor e-mail"
                           value="{{ old('email') }}"
                           required
                           autofocus
                           class="form-control @error('email') is-invalid @enderror" style="border: 1px solid #ACACAC;"
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div>
                    <label for="password" class="form-label fs-5" for="form2Example2">Crie uma senha</label>
                    <input id="password"
                           name="password"
                           type="password"
                           required
                           placeholder="Crie sua senha"
                           autofocus
                           class="form-control @error('password') is-invalid @enderror" style="border: 1px solid #ACACAC;"
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div>
                    <label for="password-confirm" class="form-label fs-5">Confirme sua senha</label>
                    <input id="password-confirm"
                           type="password"
                           name="password_confirmation"
                           placeholder="Confirme sua senha"
                           required
                           autocomplete="new-password"
                           class="form-control" style="border: 1px solid #ACACAC;"
                </div>
            </div>
            <div class="container d-flex justify-content-center">

                <div class="d-flex flex-column justify-content-center align-items-center p-0">
                    <div class="d-flex gap-2">
                        <input class="form-check-input border border-2 @error('termo') is-invalid @enderror"
                               type="checkbox"
                               class="form-check-input "
                               required
                               name="termo"
                            {{ old('termo') ? 'checked' : '' }} />
                        <label class="form-check-label" for="form2Example31"> Eu li e aceito os <a href="{{ url('/termos') }}">termos e condições de
                                uso</a> </label>
                    </div>
                    @error('termo')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror

                </div>
            </div>

            <div class="d-flex flex-column justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary rounded-pill px-4 fs-6">Fazer cadastro</button>
            </div>
            <a href="{{ url('/login') }}" class="p-0 m-0">Ir para a tela de Login</a>
            <hr>


        </form>

    </main>
@endsection
