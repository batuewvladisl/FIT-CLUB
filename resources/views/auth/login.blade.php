<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/bits.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('../css/login.css') }}">
    <title>FIT-CLUB</title>
</head>

        <body>
            <header class="header">
                <div class="header_navi">
                    <img class="header_logo" src="img/logowhite.png" alt="">
                    <div class="header_navi_txt">
                            <button><a class="b1" href="{{ route('welcome') }}">Главная</a></button>
                            <button href="{{ route('login') }}"><a class="b4 b5" href="{{ route('login') }}">Войти</a></button>
                        @if (Route::has('register'))
                            <button><a class="b4 b5" href="{{ route('register') }}">Регистрация</a></button>
                        @endif
                    </div>
                </div>
            </header>

            <div class="podheader">
                <div class="podheader_block">
                    <div class="podheader_txt">
                        <form method="POST" action="{{ route('login') }}" class="form">
                            @csrf
                                <label for="email">{{ __('E-mail') }}</label>
                                <input id="email" placeholder="Введите e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                <label for="password">{{ __('Пароль') }}</label>
                                <input id="password" placeholder="Введите пароль" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                <button type="submit" class="button1">
                                    {{ __('Войти') }}
                                </button>
                                @error('password')
                                <br>
                                <span>
                                    <strong class="warning">{{ $message }}</strong>
                                </span>
                                @enderror
                    
                                @error('email')
                                <br>
                                <span>
                                    <strong class="warning">{{ $message }}</strong>
                                </span>
                                <br><br>
                                @enderror
                        </form>
                    </div>
                </div>
            </div>
                
        </body>
