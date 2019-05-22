<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Template Menu</title>

    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset('data_css\style01.css')}}">
    @show
</head>

<body>
<header>
    <a href="#"><img src="{{asset('data_img/title.png')}}"></a>
    <nav>
        <ul class="menuAside">
            <li><a href="#"><img src="{{asset('data_img/but1.jpg')}}"></a></li>
            <li><a href="#"><img src="{{asset('data_img/but2.jpg')}}"></a></li>
            <li><a href="#"><img src="{{asset('data_img/but3.jpg')}}"></a></li>
            <li><a href="#"><img src="{{asset('data_img/but4.jpg')}}"></a></li>
            <li><a href="#"><img src="{{asset('data_img/but5.jpg')}}"></a></li>
            <li><a href="#"><img src="{{asset('data_img/but6.jpg')}}"></a></li>
            <li><a href="#"><img src="{{asset('data_img/but7.jpg')}}"></a></li>
        </ul>
    </nav>
</header>
<main>
    <aside class="side-menu">
        <ul class="gallery-menu">
            <li><a href="#">Animals</a></li>
            <li><a href="#">City</a></li>
            <li><a href="#">fashion</a></li>
            <li><a href="#">Nature</a></li>
            <li><a href="#">Wedding</a></li>
            <li><a href="#">Macro</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Retro</a></li>
        </ul>
    </aside>
    @yield('content')
</main>
<footer>
    <div class="footer-part">
        <ul class="footer-menu">
            <li><a href="#">home</a></li>
            <li><a href="#">gallery</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">video</a></li>
            <li><a href="#">partners</a></li>
            <li><a href="#">contact</a></li>
        </ul>
    </div>
    <div class="footer-part"><small>CopyR</small></div>
</footer>
</body>
@section('scripts')
@show
</html>