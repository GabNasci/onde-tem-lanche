@extends('layouts.app')

@section('content')
    <!--<main>
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
    </main>-->

    <main style="margin-top: 173.5px;">
        <form method="POST" class="container d-flex flex-column align-items-center gap-3" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <h1 class="text-center fs-2" style="font-weight: 600; font-family: Montserrat;">Redefinição de Senha</h1>
            <!-- Email input -->
            <div class="form-outline text-center" style="width: 300px;">
                <label class="form-label" for="form2Example1" style="font-size: large;">Digite o seu e-mail</label>
                <input id="email"
                       type="email"
                       class="formulario__campo__input "
                       name="email"
                       value="{{ $email ?? old('email') }}"
                       required
                       autocomplete="email"
                       autofocus
                       class="form-control" style="border: 1px solid #ACACAC;"
                       placeholder="E-mail" />
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <!-- Senha input -->
            <div class="form-outline text-center" style="width: 300px;">
                <label class="form-label" for="form2Example2" style="font-size: large;">Digite sua nova senha</label>
                <input id="password"
                       type="password"
                       name="password"
                       required
                       autocomplete="new-password"
                       class="form-control @error('password') is-invalid @enderror" style="border: 1px solid #ACACAC;"
                       placeholder="Senha" />
            </div>

            <div class="form-outline text-center" style="width: 300px;">
                <label class="form-label" for="form2Example2" style="font-size: large;">Digite-a novamente</label>
                <input type="password" id="formExample" class="form-control" style="border: 1px solid #ACACAC;"
                       placeholder="Confirme sua senha" />
            </div>

            <!-- Botão de Login -->
            <div class="d-flex flex-column justify-content-center align-items-center">
                <button type="button" class="btn btn-primary btn-block mt-4" style="width: 180px;">Alterar sua senha</button>
            </div>
            <!-- voltar para tela inicial -->
            <div class="mt-2">
                <a href="login.html"class="fs-6" style="color: #131313;">Voltar para tela inicial</a>
            </div>


        </form>
    </main>



@endsection
