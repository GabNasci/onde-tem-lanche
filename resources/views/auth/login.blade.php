@extends('layouts.app')

@section('content')
<main style="margin-top: 112px;">



    <form method="POST" class="container d-flex flex-column gap-4 align-items-center" action="{{ route('login') }}">
        @csrf
        <h1 class="text-center fs-2 fw-bold m-0">Acesse sua conta.</h1>

        <div class="form-outline text-center" style="width: 300px;">
            <label class="form-label fs-5" for="form2Example1">Insira seu E-mail</label>
            <input id="email"
                   type="email"
                   placeholder="E-mail"
                   name="email"
                   required
                   autocomplete="current-password"
                   autofocus
                   class="form-control @error('email') is-invalid @enderror" style="border: 1px solid #ACACAC;"/>
        </div>


        <div class="form-outline text-center" style="width: 300px;">
            <label class="form-label fs-5" for="form2Example2">Insira sua Senha</label>
            <input id="password"
                   type="password"
                   placeholder="Digite sua senha"
                   name="password"
                   required
                   autocomplete="current-password"
                   autofocus
                   class="form-control @error('password') is-invalid @enderror" style="border: 1px solid #ACACAC;"/>
        </div>

        @error('password')
        <span class="invalid-feedback text-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror

        <div class="d-flex flex-column justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary px-5 fs-6 rounded-pill">Fazer o login</button>
        </div>

        <div class="col d-flex justify-content-center m-0">

            <div class="d-flex flex-column justify-content-center align-items-center p-0">
                <div class="d-flex gap-2">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Lembrar de mim </label>
                </div>
                @if(Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="p-0 m-0">Esqueceu sua senha?</a>
                @endif
            </div>
        </div>
        <hr class="opacity-100" style="color: #BDBDBD; width: 70%;">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <a href="{{ url("/register")  }}" class="btn btn-outline-primary px-5 rounded-pill">Criar conta</a>
        </div>
    </form>

</main>
@endsection
