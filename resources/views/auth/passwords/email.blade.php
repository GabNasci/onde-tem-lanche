@extends('layouts.app')

@section('content')
<main style="margin-top: 206px;">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" class="container d-flex flex-column gap-4 align-items-center" action="{{ route('password.email') }}">
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
