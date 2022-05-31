<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/bits.png" type="image/png">
    <link href="css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/welcome.css">
    <title>FIT-CLUB</title>

<body>
    <header class="header">
        <div class="header_navi">
            <img class="header_logo" src="img/logowhite.png" alt="">
            <div class="header_navi_txt">
                <button class="b1"><a class="b11" href="#o_nas"><img class="img_navi" src="img/info.png" alt=""><p class="button_hide">О нас</p></a></button>
                <button class="b1"><a class="b11" href="#sale"><img class="img_navi" src="img/sale.png" alt=""><p class="button_hide">Акции</p></a></button>
                <button class="b1"><a class="b11" href="#treners"><img class="img_navi" src="img/treners.png" alt=""><p class="button_hide">Тренеры</p></a></button>
                <button class="b1"><a class="b11" href="#contact"><img class="img_navi" src="img/contacts.png" alt=""><p class="button_hide">Контакты</p></a></button>
                @auth
                <button class="b1"><a class="b11" href="{{ route('home') }}"><img class="img_navi" src="img/kabinet.png" alt=""><p class="button_hide">Кабинет</p></a></button>
                @endauth
                @if (Route::has('login'))
                    @auth
                    <form class="form_exit" id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img class="img_navi" src="img/exit.png" alt=""><a class="b11 b1 b5 bh" href="{{ route('logout') }}">Выйти</a></button>
                    </form>
                    @else
                    <form class="form_exit" action="{{ route('login') }}">
                        @csrf
                        <button><img class="img_navi" src="img/vhod.png" alt=""><a class="b11 b1 b5 bh">Войти</a></button>
                    </form>
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <div class="podheader_img1">
        <img src="img/fon2.jpg" alt="" class="podheader_img">
        <div class="podheader">
            <div class="podheader_block">
                <img src="img/logoblack.png" alt="" class="podheader_logo">
                <div class="podheader_txt">
                    <p>Самый современный и комфортабельный фитнес клуб Ижевске. Приходите и окунитесь в атмосферу домашнего уюта, позитива, спорта и красоты!</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="o_nas">
        <div class="o_nas_zag">
            <p id="o_nas">О нас</p>
        </div>
        <div class="o_nas_block" data-aos="zoom-in-down" data-aos-delay="80" data-aos-duration="1250">
            <div class="o_nas_txt">
                <p>Фитнес делает тебя <b>сильнее,</b> меняет твою жизнь к лучшему и помогает решиться на новый шаг для достижения <b>поставленной цели.</b> Открывает новые возможности и придает уверенности в себе. Каждая новая победа над собой - это очередное доказательство, что <b>фитнес - это часть тебя!</b><br>
                Мы заряжаем своих клиентов энергией, которая несет положительные перемены в уровне жизни,  что дает возможность получать удовольствие от каждого дня.<br>
                Мы создаем в наших фитнес клубах атмосферу <b>комфорта, искренности и доброжелательности,</b> пространство для достижения успеха, фитнес-среду с общими интересами, окружая заботой и вниманием каждого.</p>
            </div>
        </div>
    </div>

    <div class="abonement">
        <div class="abonement_zag">
            <p id="sale">Абонементы по акции</p>
        </div>
        <div class="abonement_one_block">
            <div class="abonement_one" data-aos="fade-down-right" data-aos-delay="200" data-aos-duration="1750" data-aos-anchor=".abonement_img1">
                <img class="abonement_img1" src="img/tovar.jpg" alt="">
                <div class="abonement_txt1">
                    <p>2 месяца БЕЗЛИМИТ<br><br>2999₽<br><br></p>
                <button class="abonement_button1"><a href="{{ route('home') }}">Оставить заявку</a></button>
                </div>
            </div>
            <div class="abonement_two" data-aos="fade-down-left" data-aos-delay="200" data-aos-duration="1750" data-aos-anchor=".abonement_img1">
                <img class="abonement_img2" src="img/tovar.jpg" alt="">
                <div class="abonement_txt2">
                    <p>4 месяца БЕЗЛИМИТ<br><br>3999₽<br><br></p>
                <button class="abonement_button2"><a href="{{ route('home') }}">Оставить заявку</a></button>
                </div>
            </div>
        </div>
        <div class="abonement_two_block">
            <div class="abonement_three" data-aos="fade-up-right" data-aos-delay="200" data-aos-duration="1750" data-aos-anchor=".abonement_img3">
                <img class="abonement_img3" src="img/tovar.jpg" alt="">
                <div class="abonement_txt3">
                    <p>6 месяцев БЕЗЛИМИТ<br><br>4999₽<br><br></p>
                <button class="abonement_button4"><a href="{{ route('home') }}">Оставить заявку</a></button>
                </div>
            </div>
            <div class="abonement_four" data-aos="fade-up-left" data-aos-delay="200" data-aos-duration="1750" data-aos-anchor=".abonement_img3">
                <img class="abonement_img4" src="img/tovar.jpg" alt="">
                <div class="abonement_txt4">
                    <p>8 месяцев БЕЗЛИМИТ<br><br>6999₽<br><br></p>
                <button class="abonement_button4"><a href="{{ route('home') }}">Оставить заявку</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="treners">
        <div class="trener_zag">
            <p id="treners">Тренеры</p>
        </div>
        <div class="trener_blocks">
            <div class="trener_one">
                <div class="fio1" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1450">
                    <div class="photo" data-title="Персональный тренер базового уровня, тренер кардио тренировок. Стаж тренировок 5 лет"><img src="img/trener3.png" alt=""></div>
                    <p>Петров Алексей</p>
                </div>
                <div class="fio2" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1450">
                    <div class="photo" data-title="Мастер тренер продвинутого уровня, тренер групповых программ. Стаж тренировок 7 лет"><img src="img/trener2.png" alt=""></div>
                    <p>Пушин Михайл</p>
                </div>
            </div>
            <div class="trener_two">
                <div class="fio3" data-aos="fade-left" data-aos-delay="450" data-aos-duration="1450">
                    <div class="photo" data-title="Старший тренер продвинутого уровня, тренер силовых программ. Стаж тренировок 10 лет"><img src="img/trener11.png" alt=""></div>
                    <p>Громов Андрей</p>
                </div>
                <div class="fio4" data-aos="fade-left" data-aos-delay="600" data-aos-duration="1450">
                    <div class="photo" data-title="Персональный тренер среднего уровня, инструктор-методист. Стаж тренировок 4 года"><img src="img/trener4.png" alt=""></div>
                    <p>Власов Николай</p>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="contact_zag">
            <p id="contact">Контакты</p>
        </div>
        <div class="contact_content" data-aos="zoom-in-down" data-aos-delay="80" data-aos-duration="1650">
            <div class="contact_info">
                Наши контакты:<br><br>
                Телефон: +7(904)-904-04-04<br>
                E-mail: fit-club@mail.ru<br>
                Наш адрес: г. Ижевск,<br>
                ул. Ленина 106<br><br>
                Режим работы <b>круглосуточно</b>
            </div>
            <div class="contact_cart">
                <iframe class="contact_cart" src="https://yandex.ru/map-widget/v1/?um=constructor%3A6aad5a4c1331cf99c5e24075bccd6f165692c8c2dd9de87f4fb0e47b9638ccb7&amp;source=constructor" width="782" height="411" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="ceti">
            <a href="https://telegram.org/" target="_blank" class="c1"><img src="img/telegram.png" alt=""></a>
            <a href="https://www.youtube.com/" target="_blank" class="c2"><img src="img/you.png" alt=""></a>
            <a href="https://www.instagram.com/" target="_blank" class="c3"><img src="img/inst.png" alt=""></a>
            <a href="https://www.facebook.com/" target="_blank" class="c4"><img src="img/face.png" alt=""></a>
        </div>
        <div class="polit">
            <a class="b1 b55" href="#">Политика конфиденциальности</a>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
