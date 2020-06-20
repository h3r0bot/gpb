@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0 h-100 d-flex flex-column">
        <div class="row m-0 h-100">
            <div class="col-md-6 p-0 m-0">
                <nav class="navbar position-absolute navbar-light bg-light p-5">
                    <img src="{{ asset('storage/logo.png') }}" width="163" height="34" alt="" loading="lazy">
                </nav>
                <div class="row justify-content-center p-0 m-0 h-100">
                    <div class="col-md-6 align-self-center">
                        <form method="POST" action="{{ route('login') }}">
                            <div class="text-center mb-5">
                                <h1>Добро пожаловать<br>в команду!</h1>
                                <p class="text-muted">Пожалуйста, введите свои учетные данные,<br>чтобы продолжить.</p>
                            </div>
                            @csrf
                            <div class="form-group">
                                <label class="text-muted" for="email">{{ __('ЛОГИН') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="password">
                                    {{ __('ПАРОЛЬ') }}
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link pr-0 text-muted" href="{{ route('password.request') }}">
                                            {{ __('Забыли пароль?') }}
                                        </a>
                                    @endif
                                </label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Войти') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 m-0 bg"></div>
        </div>
    </div>
@endsection
