<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Template Menu</title>

    @section('styles')
        <link rel="stylesheet" href="/data_css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="{{asset('data_css\style01.css')}}">
        {{--<link rel="stylesheet" type="text/css" href="{{asset('css\app.css')}}">--}}
        {{--<link rel="stylesheet" href="data_css/bootstrap.css">--}}
    @show

    @section('scripts')
        <script type="text/javascript" src="{{asset('js/jquery-2.1.4.js')}}"></script>
        <script src="js/jquery-2.1.4.js"></script>
        <script src="js/parsley.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="https://cdn.jsdelivr.net/holder/2.9.0/holder.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        {{--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>--}}
    @show
</head>

<body>
<header>
    <a href="{{asset('home')}}"><img src="{{asset('data_img/title.png')}}"></a>
    <nav>
        <ul class="menuAside">
            @foreach($menuAside_objs as $one)
                <li><a href="{{asset($one->url)}}"><img src="{{asset('data_img/'.$one->img)}}"></a></li>
            @endforeach
            {{--<li><a href="{{asset('home')}}"><img src="{{asset('data_img/but1.jpg')}}"></a></li>
            <li><a href="{{asset('home')}}"><img src="{{asset('data_img/but2.jpg')}}"></a></li>
            <li><a href="{{asset('about_me')}}"><img src="{{asset('data_img/but3.jpg')}}"></a></li>
            <li><a href="{{asset('video')}}"><img src="{{asset('data_img/but4.jpg')}}"></a></li>
            <li><a href="{{asset('partners')}}"><img src="{{asset('data_img/but5.jpg')}}"></a></li>
            <li><a href="{{asset('guest-book')}}"><img src="{{asset('data_img/but6.jpg')}}"></a></li>
            <li><a href="{{asset('contact_me')}}"><img src="{{asset('data_img/but7.jpg')}}"></a></li>--}}
            <!-- Authentication Links -->
            @guest
                <li class="login">
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="register">
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="login">
                    <a id="navbarDropdown" href="{{asset('account')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                </li>
                <li class="logout">
                    <div aria-labelledby="navbarDropdown">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                    <li class="dropdown">
                        @if(isset($_COOKIE['lang']))
                           <?php if($_COOKIE['lang'] === 'ru'){
                            //echo 'Hello!';
                           }else{
                                //echo 'Hello2!';
                            }
                           ?>
                        @endif
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img id="imgNavSel" src="https://tattooscalculator.com/img/flag/Rus_40.jpg" alt="..." class="img-thumbnail icon-small">&nbsp;&nbsp;
                            <span id="lanNavSel">Rus</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu mumu" role="menu">
                            <li><a id="navFra" href="home/?lang=fr" class="language">
                                    <img id="imgNavFra" src="https://tattooscalculator.com/img/flag/Fra_40.jpg" alt="France" class="img-thumbnail icon-small">&nbsp;
                                    <span id="lanNavFra">Française</span>&nbsp;
                                </a></li>
                            <li><a id="navEng" href="home/?lang=en" class="language">
                                    <img id="imgNavEng" src="https://tattooscalculator.com/img/flag/Eng_40.jpg" alt="English" class="img-thumbnail icon-small">&nbsp;
                                    <span id="lanNavEng">English</span>&nbsp;
                                </a></li>
                            <li><a id="navRus" href="home/?lang=ru" class="language">
                                    <img id="imgNavRus" src="https://tattooscalculator.com/img/flag/Rus_40.jpg" alt="Russia" class="img-thumbnail icon-small">&nbsp;
                                    <span id="lanNavRus">Русский</span>&nbsp;
                                </a></li>
                        </ul>
                    </li>
            @endguest
        </ul>
        {{--{!! menu('main','bootstrap') !!}--}}
    </nav>
</header>
<main>

    @yield('content')
    <div class="gallery-pagination">{{--<a href="#">Previous</a>
        <ul>
            <li><a href="#">1</a></li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
        </ul> <a href="#">next</a></div>--}}
        <ul>{!!$objs->links()!!}</ul>
    </div>
</main>
<footer>
    <div class="footer-part">
        <ul class="footer-menu">
            @foreach($s_objs as $one)
                {{--<li><a href="{{asset($one->url)}}">{{$one->name}}</a></li>--}}
                {{--Подключение локализации--}}
                <li><a href="{{asset($one->url)}}">{{__('menu.menu.'.$one->name)}}</a></li>
            @endforeach
            {{--<li><a href="{{asset('home')}}">home</a></li>
            <li><a href="{{asset('gallery')}}">gallery</a></li>
            <li><a href="{{asset('about_me')}}">about</a></li>
            <li><a href="{{asset('video')}}">video</a></li>
            <li><a href="{{asset('partners')}}">partners</a></li>
            <li><a href="{{asset('guest-book')}}">contact</a></li>
            <li><a href="{{asset('all')}}">siteMap</a></li>--}}
        </ul>
    </div>
    <div class="footer-part"><small>CopyR {{$name}}</small></div>
</footer>
</body>
</html>