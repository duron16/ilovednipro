<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>I Love Dnipro</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!--[if (lt IE 10)]>
    <style>.wrapper {display:none;} body {background: #ECF0F1;}</style>
<div id="old-ie-box" style="text-align: center; font-size: 20px; margin-top: 100px;">
<div id="old-ie-head">ilovednipro.com</div>
<div id="old-ie">
<p>Извините, но этот сайт предназначен для браузеров Internet Explorer 10 и старше. Обновите, пожалуйста, Ваш браузер, или установите другой:</p><a href="https://www.google.com.ua/intl/ru/chrome/browser/desktop/index.html" class="chrome-ie">Chrome</a><a href="https://www.mozilla.org/ru/firefox/new/" class="firefox-ie">Firefox</a><a href="http://www.opera.com/ru" class="opera-ie">Opera</a>
</div></div>
    <![endif]-->

</head>

<body>

<div class="wrapper">
    <div id="content">
        <!--header-->
        <div class="header">
            <div class="container">
                <a href="/{{LaravelLocalization::getCurrentLocale()}}/addNews" data-action="route" class="header-btn addNews">{{trans('main.addNews')}}</a>
                <div class="header-right">
                    <form action="#" class="hidden">
                        <input type="search" id="search" placeholder="{{trans('main.search')}}...">
                        <button></button>
                    </form>

                    <ul class="nav">
                        <li><a href="#">{{LaravelLocalization::getCurrentLocale()}}</a>
                            <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                @if($localeCode !== LaravelLocalization::getCurrentLocale())
                                    <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                        {{$localeCode}}
                                    </a>
                                @endif
                            </li>
                        @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--header-end-->
        <div class="video-wrap">
            <video autoplay loop>
                <source src="video/bg.mp4">
            </video>
            <h2 class="main-h2">I ♥ DNIPRO</h2>
        </div>
        <div class="content">
            <div class="container">
                <div class="about-dnipro">
                    <div class="about-dnipro-item">
                        <h4>{{ LaravelLocalization::getCurrentLocaleName() }} {{LaravelLocalization::getDefaultLocale()}} </h4>
                        <div class="img-wrap">
                            <img src="img/2.jpg" alt="q123" class="background-size-cover">
                        </div>
                        <p>Дніпропетровськ - моє улюблене <br>Європейське місто. Дніпропетровськ - моє улюблене Європейське місто. Дніпропетровськ - моє улюблене Європейське місто. Дніпропетровськ - моє улюблене Європейське місто. Дніпропетровськ - моє улюблене Європейське місто.</p>
                    </div>
                    <div class="about-dnipro-item">
                        <h4>Річка, що об'єднує націю</h4>
                        <div class="img-wrap">
                            <img src="img/1.jpg" alt="q123" class="background-size-cover">
                        </div>
                        <p>Річка, що об'єднує націю. Річка, що об'єднує націю. Річка, що об'єднує націю. Річка, що об'єднує націю. Річка, що об'єднує націю. Річка, що об'єднує націю.</p>
                    </div>
                </div><!--about-dnipro-end-->
                <div class="requisites">
                    <h5>Наші реквізити:</h5>
                    <table>
                        <tr>
                            <td class="requisites-company">Повна назва:</td>
                            <td>ГРОМАДСЬКА ОРГАНІЗАЦІЯ «ЗМIНИМО МАЙБУТНЄ»</td>
                        </tr>
                        <tr>
                            <td class="requisites-okpo">Код ЄДРПОУ:</td>
                            <td>39383928</td>
                        </tr>
                        <tr>
                            <td class="requisites-uah">Р/р (UAH):</td>
                            <td>26005052741362</td>
                        </tr>
                        <tr>
                            <td class="requisites-usd">Р/р (USD):</td>
                            <td>26009052738757</td>
                        </tr>
                        <tr>
                            <td class="requisites-eur">Р/р (EUR):</td>
                            <td>26009052738757</td>
                        </tr>
                        <tr>
                            <td class="requisites-note">Призначення платежу:</td>
                            <td>Благодійна допомога</td>
                        </tr>
                    </table>
                    <div class="privat-card">
                        <p class="privat-card-caption">Кредитна картка у Приват:</p>
                        <p>4731217110391545</p>
                        <p>Степаненко Максим Михайлович</p>
                    </div>
                </div>
                <div class="dnipro-news">
                    @foreach($news as $one)
                        <div class="dnipro-news-item" data-id="{{$one['id']}}">
                            <div class="img-wrap">
                                <img src="img/apteka.jpg" alt="q123" class="background-size-cover">
                            </div>
                            <h3>{{$one['title']}}</h3>
                            <p>{!! explode('<cut />', $one['content'])[0] !!}</p>
                            <div class="news-item-bottom">
                                <div class="news-date">{{$one['created_at']}} {{--<span>16:58</span>--}}</div>
                                <div class="news-views">{{$one['views']}}</div>
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="load-more">
                        <div class="load-more-btn">{{trans('main.load')}}</div>
                    </div>--}}
                </div><!--dnipro-news-->
            </div><!--container-end-->
        </div><!--content-end-->
        <div class="footer">
            <div class="container">
                <div class="copyright">
                    <p>Copyright &copy; 2015 Dnipro. All rights reserved</p>
                </div>
                <ul class="social">
                    <li><a href="#" class="vk"></a></li>
                    <li><a href="#" class="fb"></a></li>
                    <li><a href="#" class="tw"></a></li>
                    <li><a href="#" class="inst"></a></li>
                    <li><a href="#" class="gp"></a></li>
                    <li><a href="#" class="odn"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--modal-form1-->
    <div class="modal-box form hidden">
        <div class="modal-wrap">
            <div class="form1">
                <a href="/{{LaravelLocalization::getCurrentLocale()}}" data-action="route" class="modal-close"></a>
                <h6>{{trans('main.addNews')}}</h6>
                <form action="{{route('suggestion.post')}}" method="post">
                    {!! csrf_field() !!}
                    <label>{{trans('main.name')}}<input name="name" type="text" placeholder="{{trans('main.name')}}" autofocus></label>
                    <label>Email<input name="email" type="email" placeholder="Email"></label>
                    <label for="form1-news">{{trans('main.news')}}:</label>
                    <textarea id="form1-news" name="content" placeholder="{{trans('main.news')}}..."></textarea>
                    <button class="modal-btn">{{trans('main.go')}}</button>
                </form>
            </div>

        </div><!--modal-form1-end-->
    </div>

    <!--modal-form2-->
    <div class="modal-box hidden form2">
        <div class="modal-wrap">
            <span class="loader">loading...</span>
            <div class="load">

            </div>
        </div><!--modal-form2-end-->
    </div>
</div>

<script>
    var module = {};
    window.LANG = '{{LaravelLocalization::getCurrentLocale()}}';
</script>
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('bower_components/director/build/director.min.js')}}"></script>
<script src="{{asset('bower_components/underscore/underscore-min.js')}}"></script>
<script src="{{asset('bower_components/toastr/toastr.min.js')}}"></script>
<script src="{{asset('js/laroute.js')}}"></script>
<script src="{{asset('js/app/global.js')}}"></script>
<script src="{{asset('js/app/routing.js')}}"></script>
<script src="{{asset('js/app/main/app.js')}}"></script>
<script src="{{asset('js/jquery.bgdsize.js')}}"></script>

<script>
$(document).ready(function() {
    $('.background-size-cover').bgdSize('cover');
});
</script>

<script>
    module.app.init();
    @if (Session::has('status'))
        toastr.success('{{trans('main.saved')}}', '{{trans('main.thx')}}');
    @endif
</script>
</body>

</html>
