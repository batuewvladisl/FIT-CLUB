<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>IzhTiSi</title>
<style>
* {
    max-width: 100%;
    margin: 0px;
}

::selection {
    background: #ffe6006b;
}

::-moz-selection {
    background: #ffe6006b;
}

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track {
  background: #cacaca6b;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background: #fed932;
  border-radius: 10px;
}

@font-face {
	font-family: 'Nunito-Light'; 
	src: local('Nunito-Light'),
    url(../fonts/Nunito-Light.ttf); 
}

button {
    padding: 0;
    border: none;
    font: inherit;
    color: inherit;
    background-color: transparent;
    cursor: pointer;
}

p {
    font-family: 'Nunito-Light';
}

ul {
    font-family: 'Nunito-Light';
}

li {
    list-style-type: none;
}

li:before {
    content: "> ";
}

a:active,
a:hover,
a {
    text-decoration: none;
    color: rgb(0, 0, 0);
}

.div_header {
    max-width: 100%;
    padding: 1.2%;
    background: #fed932;
}

.header {
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.b11, .b22, .b33, .b44 {
    color: white;
}

.b1, .b2, .b3, .b4 {
    width: 150px;
    padding: 0.5%;
    color: white;
    font-size: 25px;
    font-family: 'Nunito-Light';
    background: #e95358;
    transition-duration: 1s;
    border-radius: 6px;
}

.b1:hover {
    transition: 1s;
    background: #e95358ce;
    border-radius: 13px;
}

.b2:hover {
    transition: 1s;
    background: #e95358ce;
    border-radius: 13px;
}

.b3:hover {
    transition: 1s;
    background: #e95358ce;
    border-radius: 13px;
}

.b4:hover {
    transition: 1s;
    background: #e95358ce;
    border-radius: 13px;
}

.b5 {
    width: 150px;
    font-family: 'Nunito-Light';
    font-weight: bold;
    padding: 0.5%;
    font-size: 25px;
    background: #ffffffaf;
    box-shadow: 0px 0px 10px 1px rgb(0, 0, 0);
    border-radius: 6px;
    transition-duration: 1s;
}

.b5:hover{
    transition: 1s;
    background: #ffffff94;
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.b6 {
    width: 75px;
    font-family: 'Nunito-Light';
    font-weight: bold;
    padding: 0.5%;
    font-size: 25px;
    background: #ffffffaf;
    box-shadow: 0px 0px 10px 1px rgb(0, 0, 0);
    border-radius: 6px;
    transition-duration: 1s;
}

.polit_one_opis, .polit_two_opis, .polit_three_opis, .polit_four_opis {
    display: flex;
    align-items: center;
    flex-direction: column;
    margin-top: 1%;
}

.polit_one, .polit_two, .polit_three, .polit_four {
    width: 85%;
}

.polit_one_zag, .polit_two_zag, .polit_three_zag, .polit_four_zag {
    font-size: 35px;
    font-weight: bold;
    text-align: center;
}

.polit_one_opis, .polit_two_opis, .polit_three_opis, .polit_four_opis {
    font-size: 20px;
}

.footer {
    display: flex;
    justify-content: center;
    max-width: 100%;
    padding: 1%;
    background: #fed932;
    margin-top: 5%;
}

.footer_txt {
    font-size: 27px;
    text-align: center;
    transition-duration: 1s;
    width: 340px;
}

.footer_txt:hover {
    transition: 1s;
    transform: scale(0.9);
}

</style>

    <body>
            <div class="div_header">
                <header class="header">
                    <img class="logo_img" src="img/logo.png" alt="">
        
                    <button class="b1"><a class="b11" href="{{ route('welcome') }}">Услуги</a></button>
                    <button class="b2"><a class="b22" href="{{ route('welcome') }}">Продукты</a></button>
                    <button class="b3"><a class="b33" href="{{ route('welcome') }}">Цены</a></button>
                    <button class="b4"><a class="b44" href="{{ route('welcome') }}">О нас</a></button>


                    @if (Route::has('login'))
                        @auth
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="b6">
                            @csrf
                            <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><a href="{{ route('logout') }}">Выйти</a></button>
                        </form>
                        @else

                            <button href="{{ route('login') }}" class="b5"><a  href="{{ route('login') }}">Войти</a></button>
                            @if (Route::has('register'))
                            <button class="b5"><a href="{{ route('register') }}">Рег</a></button>
                            @endif
                        @endauth
                    @endif
                </header>
            </div>
            <div class="polit_one_opis"> 
                <div class="polit_one">
                    <div class="polit_one_zag">
                        <p>Политика конфиденциальности в области обработки и защиты персональных данных</p>
                    </div>

                    <div class="polit_one_opis">
                        <p>Настоящая Политика конфиденциальности персональных данных (далее — Политика конфиденциальности) действует в отношении информации, которую ООО «1С-ИжТиСи» (далее — Администрация) может получить о Пользователе во время использования им сайта в сети Интернет.<br><br>
                            Использование Сайта и форм обратной связи, размещенных на нём, означает добровольное согласие Пользователя с настоящей Политикой конфиденциальности и указанными в ней условиями обработки его персональной информации. В случае несогласия с этими условиями Пользователь должен воздержаться от использования Сайта.<br><br>
                            Администрация не проверяет достоверность персональных данных, предоставляемых Пользователем Сайта, исходя из того, что Пользователь дееспособен и предоставляет достоверную и достаточную персональную информацию.<br><br>
                            Настоящая Политика конфиденциальности применяется только к Сайту. Сайт не контролирует и не несет ответственности за сайты третьих лиц, на которые Пользователь может перейти по ссылкам, доступным на Сайте.</p>
                    </div>
                </div>
            </div>

            <div class="polit_two_opis"> 
                <div class="polit_two">
                    <div class="polit_two_zag">
                        <p>Условия обработки и хранения персональной информации</p>
                    </div>

                    <div class="polit_two_opis">
                        <p>Администрация Сайта принимает необходимые организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц.<br><br>
                            Администрация Сайта обязуется обеспечивать обработку и хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование, либо разглашение иными возможными способами переданных персональных данных Пользователя, за исключением ситуаций, описанных в настоящей Политике Конфиденциальности.<br><br>
                            Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств.<br><br>
                            В случае выявления недостоверных персональных данных или неправомерных действий Администрация осуществляет блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя, или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки.<br><br>
                            Администрация Сайта совместно с Пользователем принимает все необходимые меры по предотвращению убытков или иных отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.</p>
                    </div>
                </div>
            </div>

            <div class="polit_three_opis"> 
                <div class="polit_three">
                    <div class="polit_three_zag">
                        <p>Цели обработки персональной информации пользователей</p>
                    </div>

                    <div class="polit_three_opis">
                        <p>Персональная информация Пользователя Администрация Сайта может использовать в целях:<br><br>
                            > Идентификации Пользователя, для целей заключения, исполнения и прекращения гражданско-правовых договоров.<br>
                            > Установления с Пользователем обратной связи, включая направление уведомлений, запросов по использованию Сайта, обработки запросов и заявок от Пользователя, связанных с деятельностью компании ООО «1С-ИжТиСи».<br>
                            > Предоставления Пользователю эффективной клиентской и технической поддержки при возникновении проблем, связанных с использованием Сайта и (или) иных продуктов ООО «1С-ИжТиСи».<br>
                            > Предоставления Пользователю с его согласия обновлений продукции, специальных предложений, информации о ценах, новостной рассылки и иных сведений от имени ООО «1С-ИжТиСи».<br>
                            > Получения информации о лояльности и удовлетворенности Пользователя, исследования в рамках улучшения Сайта, а также продуктов или услуг ООО «1С-ИжТиСи».<br>
                            > Предоставления Пользователю доступа к персонализированным ресурсам Сайта.</p>
                        
                    </div>
                </div>
            </div>

            <div class="polit_four_opis"> 
                <div class="polit_four">
                    <div class="polit_four_zag">
                        <p>Изменения в политике конфиденциальности</p>
                    </div>

                    <div class="polit_four_opis">
                        <p>Действующая Политика конфиденциальности размещена на странице по адресу /dashboard<br><br>

                            Администрация Сайта вправе вносить изменения в настоящую Политику конфиденциальности без согласия Пользователя. Новая Политика конфиденциальности вступает в силу с момента ее размещения на Сайте, если иное не предусмотрено новой редакцией Политики конфиденциальности.<br><br>
                            
                            Иные права и обязанности Администрации в связи с обработкой персональных данных определяются законодательством Российской Федерации в области персональных данных.</p>
                    </div>
                </div>
            </div>
                
                    <footer class="footer">
                        <p class="footer_txt">+7 (800) 77-51-256 <br>Skype: sale_1c-izhtc <br>sale@1c-izhtc.ru <br>2005-2022 © 1C-ИжТиСи</p>
                    </footer>
                    
    </body>
</html>
