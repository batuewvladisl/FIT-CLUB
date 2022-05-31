<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/bits.png" type="image/png">
    <link rel="stylesheet" href="../css/show.css">
    <title>FIT-CLUB</title>
</head>

    <body>
        <header class="header">
            <div class="header_navi">
                <img class="header_logo" src="/img/logowhite.png" alt="">
                <div class="header_navi_txt">
                    <button><a href="{{ route('welcome') }}" class="b1">Главная</a></button>
                     
                    @auth
                    @if(auth()->user()->roles )
                    <button><a class="b1 b5" href="{{route('admin')}}">Админ</a></button>
                    @endif
                    @endauth
                    @if (Route::has('login'))
                        @auth
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><a class="b1 b5" href="{{ route('logout') }}">Выйти</a></button>
                        </form>
                        @else
                        @endauth
                    @endif
                </div>
            </div>
        </header>
                    <div class="form_anketa">
                        <p class="ankets_zag">Редактирование заявки</p>
                        <div class="ankets_block">
                                <form class="form" method="post" action="{{ route('show-anketa-submit', $data->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <label for="name">ФИО</label>
                                    <input id="name" placeholder="Введите ФИО" type="text" class="form-control inputs @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>
                                    
                                    <label for="telephone">Номер телефона</label>
                                    <input id="telephone" placeholder="Введите номер" type="tel" maxlength="11" class="form-control inputs @error('telephone') is-invalid @enderror" name="telephone" value="{{ $data->telephone }}" required autocomplete="telephone" autofocus>
                    
                                    <label for="abonement">Абонемент</label>
                                    <input class="inputs" id="abonement" @error('abonement') is-invalid @enderror name="abonement" value="{{ $data->abonement }}" required autocomplete="abonement">
                                    
                                    
                                    @foreach([
                                    'approved' => 'Одобрено',
                                    'not_approved' => 'Неодобренно',
                                    ] as $field => $title)
                                    <div class="checkbox_div">
                                        <label for="checkbox">{{ $title }}</label>
                                        <input type="checkbox" class="checkbox_input" id="{{ $field }}" @error('$field') is-invalid @enderror name="{{ $field }}"
                                        @if ($data->$field == 1)
                                            checked disabled
                                        @endif
                                        ></label>
                                    </div>
                                    @endforeach

                                    <button class="button_one">
                                        <a type="submit" class="button1">Отправить</a>
                                    </button>
                                </form>
                        </div>
                    </div>
    </body>
</html>
