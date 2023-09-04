@extends('layouts.app')

@section('content')
<!--<div class="container">
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

</div>-->

<main style="margin-top: 206px;">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" class="container d-flex flex-column gap-4 align-items-center" {{ route('password.email') }}>
        @csrf
        <h1 class="text-center fs-2 fw-bold m-0">Redefinição de Senha</h1>

        <div class="form-outline text-center" style="width: 300px;">
            <label for="email" class="form-label" style="font-size: large;">Digite o e-mail cadrastado</label>
            <input id="email"
                   type="email"
                   name="email"
                   required
                   autocomplete="email"
                   autofocus
                   class="form-control @error('email') is-invalid @enderror" style="border: 1px solid #ACACAC;"
                   placeholder="{{ old('email') }}" />
        </div>
        @error('email')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="d-flex flex-column justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary rounded-pill">Enviar link de redefinição</button>
        </div>

        <div>
            <a href="{{ url('/login') }}"class="fs-6" style="color: #131313;">Voltar para tela de Login</a>
        </div>


    </form>
</main>
@endsection
