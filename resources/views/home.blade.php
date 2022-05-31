<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/bits.png" type="image/png">
    <link rel="stylesheet" href="css/home.css">
    <title>FIT-CLUB</title>
</head>

    <body>
        <header class="header">
            <div class="header_navi">
                <img class="header_logo" src="img/logowhite.png" alt="">
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

            @if(session()->has('success'))
            <div class="warning">
                {{ session()->get('success') }}
            </div>
            @endif
                    <div class="form_anketa">
                        <p class="ankets_zag">Оставьте свою заявку</p>
                        <div class="ankets_block">
                                <form class="form" method="post" action="{{ route('users') }}" enctype="multipart/form-data">
                                    @csrf
                                    <label for="name">ФИО</label>
                                    <input id="name" placeholder="Введите ФИО" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label for="telephone">Номер телефона</label>
                                    <input id="telephone" placeholder="Введите номер" type="tel" maxlength="11" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>
                    
                                    <label for="abonement">Абонемент</label>
                                    <select class="minimal" id="abonement" @error('{{ abonement }}') is-invalid @enderror name="abonement" required autocomplete="abonement">
                                        @foreach($abonement as $element)
                                        <option>{{ $element->abonement }}</option>
                                        @endforeach
                                    </select>
                                    <button class="button_one">
                                        <a type="submit" class="button1">Отправить</a>
                                    </button>
                                </form>
                        </div>
                    </div>

                        <p class="your_ankets">Ваши заявки</p>
                        @foreach($data as $el)
                        <div class="anketa_content">
                            <div class="anketa_bg">
                                <div class="form_anketa">
                                    @if($el->isApproved())
                                    <img class="approved_img" src="img/like.png" alt="">
                                    @endif
                                    
                                    @if($el->isNotApproved())
                                    <img class="approved_img" src="img/dislike.png" alt="">
                                    @endif
                                    <p class="style_txt"><b>{{ $el->name }}</b></p>
                                    <p class="style_txt">{{ $el->telephone }}</p>
                                    <p class="style_txt">{{ $el->abonement }}</p>
                                    <p class="style_txt"><small style="color: #2d5eff;"><b>{{ $el->created_at }}</b></small></p>
                                    <div class="buttons">
                                        <a href="{{ route('user-delete', $el->id) }}" type="submit" class="button2">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"></script>
    </body>
</html>
