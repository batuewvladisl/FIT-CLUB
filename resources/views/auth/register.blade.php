<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/bits.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>FIT-CLUB</title>
</head>

        <body>
            <header class="header">
                <div class="header_navi">
                    <img class="header_logo" src="img/logowhite.png" alt="">
                    <div class="header_navi_txt">
                            <button class="b1"><a class="b11" href="{{ route('welcome') }}">Главная</a></button>
                            <button href="{{ route('login') }}"><a class="b1 b5" href="{{ route('login') }}">Войти</a></button>
                        @if (Route::has('register'))
                            <button><a class="b1 b5" href="{{ route('register') }}">Регистрация</a></button>
                        @endif
                    </div>
                </div>
            </header>
        
                <div class="podheader">
                    <div class="podheader_block">
                        <div class="podheader_txt">
                                <form method="POST" action="{{ route('register') }}" class="form">
                                    @csrf
    
                                    <label for="name">{{ __('Логин') }}</label>
                                    <input id="name" placeholder="Введите логин" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                    @error('name')
                                    <span class="warning">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <br><label for="email">{{ __('E-mail') }}</label>
                                    <input id="email" placeholder="Введите e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    
                                    @error('email')
                                    <br>
                                    <span class="warning">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                    @enderror
                                    
                                    <label for="password">{{ __('Пароль') }}</label>
                                    <input id="password" placeholder="Введите пароль" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    <label for="password-confirm">{{ __('Подтвердить пароль') }}</label>
                                    <input id="password-confirm" placeholder="Подтвердите пароль" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    
                                    @error('password')
                                    <span class="warning">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    
                                    
                                    <button type="submit" class="button1">
                                        {{ __('Зарегестрироваться') }}
                                    </button>
                                </form>
                        </div>
                    </div>
                </div>
                        
        </body>             
    