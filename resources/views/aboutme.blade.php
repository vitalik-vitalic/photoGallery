@extends('layouts.static')
@section('content')
                <div class="card-header">{{$obj->name}}</div>
                <p>About Me View</p>
                <div class="card-body">
                    {!! $obj->body !!}
                </div>
@endsection
