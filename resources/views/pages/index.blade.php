@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    @foreach ($trains as $train)
        <div>{{$train['acengy']}}</div>
    @endforeach
@endsection
