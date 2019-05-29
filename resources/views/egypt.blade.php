@extends('layouts.site')
@section('content')
    <div class="gallery">
        <div class="gallery-photo">
            <ul>
                @for($i=0;$i<20;$i++)
                    <li>
                        <a href="#">
                            <figure><img src="data_img/egypt/{{$arr2[$i]->path}}" alt="">
                                <figcaption>{{$arr2[$i]->path}}</figcaption>
                            </figure>
                        </a>
                    </li>
                @endfor
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
