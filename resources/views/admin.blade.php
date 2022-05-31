<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="img/bits.png" type="image/png">
    <link rel="stylesheet" href="css/admin.css">
    <title>FIT-CLUB</title>
</head>

    <body>
        <header class="header">
            <div class="header_navi">
                <img class="header_logo" src="img/logowhite.png" alt="">
                <div class="header_navi_txt">
                    <button><a href="{{ route('welcome') }}" class="b1">Главная</a></button>
                    <button class="b1"><a class="b11" href="{{ route('home') }}">Кабинет</a></button>
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
            
            <p class="filter_zag">Фильтрация заявок</p>
            <form class="filter_form" method="GET" action="{{route("admin")}}">
                <div class="filters">
                    <div class="filter_date">
                        <label class="label_date" for="date_from">От:</label>
                        <input class="input_date" type="date" name="date_from" id="date_from" value="{{ request()->date_from }}">
                        <label class="label_date" for="date_to">До:</label>
                        <input class="input_date" type="date" name="date_to" id="date_to" value="{{ request()->date_to }}">
                    </div>
                    <div class="filter_name">
                        <input class="input_name" placeholder="Введите ФИО" type="text" name="name" value="{{ request()->name }}" id="name">
                    </div>
                    <div class="filter_checked">
                        <select class="filter_select" id="approve" name="approve">
                            <option disabled selected>Выберите фильтр</option>
                            <option @if(isset($_GET['approve'])) @if($_GET['approve'] == 'Одобрено') selected @endif @endif>Одобрено</option>
                            <option @if(isset($_GET['approve'])) @if($_GET['approve'] == 'Неодобрено') selected @endif @endif>Неодобрено</option>
                        </select>
                    </div>
                </div>
                    <div class="filter_button">
                        <button type="submit" class="button1 buttonf1">Показать</button>
                        <a href="{{ route("admin") }}" class="button2 buttonf2">Сбросить</a>
                    </div>
            </form>

                        <p class="your_ankets">Заявки пользователей</p>
                        @foreach($data as $el)
                        <div class="ankets_cont">
                            <div class="form_anketa">
                                <div class="anketa_bg">
                                    @if($el->isApproved())
                                        <img class="approved_img" src="img/like.png" alt="">
                                    @endif
                                    
                                    @if($el->isNotApproved())
                                        <img class="approved_img" src="img/dislike.png" alt="">
                                    @endif
                                    <p class="style_txt"><b>{{ $el->name }}</b></p>
                                    <p class="style_txt">{{ $el->telephone }}</p>
                                    <p class="style_txt">{{ $el->abonement }}</p>
                                    <p class="style_txt"><small style="color: #2d5eff;"><b>{{ $el->updated_at }}</b></small></p>
                                    <div class="buttons">
                                        <a href="{{ route('show-anketa', $el->id) }}" type="submit" class="button1">Редактировать</a>
                                        <a href="{{ route('user-delete', $el->id) }}" type="submit" class="button2">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{$data->links('components/pagination')}}


        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"></script>
    </body>
</html>
