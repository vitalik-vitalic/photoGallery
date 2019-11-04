@extends('layouts.static')
@section('content')
    @foreach($users as $user)
        <li><a href="{{asset('users/'.$user->id)}}"><span style="color: white"><b>{{$user->name}}</b></span><br></a></li>
    @endforeach
    <p align="center">
        {!!$users->links()!!}
    </p>
@endsection
