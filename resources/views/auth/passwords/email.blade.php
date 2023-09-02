@extends('layouts.app')

@section('content')
<div class="container">
    <div class="formulario">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" class="formulario__campos" action="{{ route('password.email') }}">
            @csrf
            <h1 class="formulario__campos__titulo">Redefinição de Senha</h1>
            <label for="email">Digite o e-mail cadastrado</label>
            <input
                id="email"
                type="email"
                name="email"
                class="formulario__campo__input @error('email') is-invalid @enderror"
                value="{{ old('email') }}"
                autocomplete="email"
                autofocus
                required
            />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="formulario__botoes-links">
                <button type="submit" class="formulario__botoes-links__botao-principal">Enviar link de redefinição</button>
                <a href="{{ url('/login') }}" class="formulario__botoes-links__botao-auxiliar">Voltar para tela inicial</a>
            </div>
        </form>

    </div>

</div>
@endsection
