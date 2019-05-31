@extends('layouts.site')
@section('content')
    <aside class="side-menu">
        <ul class="gallery-menu">
            @foreach($arr as $one)
                <li>
                    <a href="{{$one->name}}">{{$one->name}}</a>
                </li>
            @endforeach

            {{--<li><a href="#">Animals</a></li>
            <li><a href="#">City</a></li>
            <li><a href="#">fashion</a></li>
            <li><a href="#">Nature</a></li>
            <li><a href="#">Wedding</a></li>
            <li><a href="#">Macro</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Retro</a></li>--}}
        </ul>
    </aside>
    <div class="gallery">
        <div class="gallery-photo">
            <ul>
                @foreach($objs as $one)
                    <li>
                        <a href="#">
                            @if($one->path)
                            <figure><img src="{{asset('data_img/portrait/'.$one->path)}}" alt="">
                                <figcaption>{{$one->path}}</figcaption>
                            </figure>
                            @else
                                <figure><img src="{{asset($one->path)}}" alt="">
                                    <figcaption>{{$one->path}}</figcaption>
                                </figure>
                            @endif
                        </a>
                    </li>
                @endforeach
                {{--@for($i=0;$i<20;$i++)
                    <li>
                        <a href="#">
                            <figure><img src="data_img/portrait/{{$arr2[$i]->path}}" alt="">
                                <figcaption>{{$arr2[$i]->path}}</figcaption>
                            </figure>
                        </a>
                    </li>
                @endfor--}}
                {{--<li>

                    --}}{{--@foreach($arr2 as $one2)
                        <p>{{$one2->path}} {{$one2->author}}</p>
                    @endforeach--}}{{--
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo03.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo04.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a>
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure><img src="data_img/portrait/Photo01.jpg" alt="">
                            <figcaption>Photo1</figcaption>
                        </figure>
                    </a>
                </li>--}}
            </ul>
        </div>
    </div>
@endsection
