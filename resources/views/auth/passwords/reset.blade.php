@extends('layouts.app')

@section('content')
    <main>
        <div class="formulario">
            <form method="POST" class="formulario__campos" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <h1 class="formulario__campos__titulo">Redefinição de Senha</h1>
                <label for="email">Digite o seu e-mail</label>
                <input
                    id="email"
                    type="email"
                    class="formulario__campo__input @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ $email ?? old('email') }}"
                    required
                    autocomplete="email"
                    autofocus
                >
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                <label for="password">Digite a nova senha</label>

                <input
                    id="password"
                    type="password"
                    class="formulario__campo__input @error('password') is-invalid @enderror"
                    name="password"
                    required
                    autocomplete="new-password"
                >

                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                <label for="password-confirm">Digite sua nova senha novamente</label>
                <input
                    id="password-confirm"
                    type="password"
                    class="formulario__campo__input"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                >
                <div class="formulario__botoes-links">
                    <button type="submit" class="formulario__botoes-links__botao-principal">Alterar senha</button>
                    <a href="{{ url('/login') }}" class="formulario__botoes-links__botao-auxiliar">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
@endsection
