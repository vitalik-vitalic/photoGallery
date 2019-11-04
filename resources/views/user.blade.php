@extends('layouts.static')
@section('content')
        <h1 style="color: white">{{$obj->name}}</h1>
        <iframe src="http://localhost:9090/chat.html?Name={{(Auth::guest())?'default':Auth::user()->name}}&Room=main" class="chat-frame"></iframe>
@endsection
