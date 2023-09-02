@extends('layouts.app')

@section('content')

    <main>
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
    </main>
@endsection
