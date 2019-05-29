@extends('layouts.static')
@section('content')

                <div class="card-header">{{$obj->name}}</div>

                <div class="card-body">
                    {!! $obj->body !!}
                </div>

@endsection
