@extends('layouts.static')
@section('content')

            <div class="card">
                {{--<div class="card-header">{{$arr}}</div>--}}
                <p>Site Map:</p>
                <div class="card-body">
                    @foreach($arr as $one)
                        <p>
                            <a href="{{asset($one->url)}}">{{$one->name}}</a>
                        </p>
                    @endforeach
                </div>
            </div>

@endsection
