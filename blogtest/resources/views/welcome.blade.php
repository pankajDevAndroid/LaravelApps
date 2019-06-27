@extends('layout')

@section('title','Home')



@section('content')

<h1> {!!$foo!!}Home Page </h1>
<h1>Home Page {{$foo}}</h1>

<ul>

    @foreach ($params as $technology)
    <li>{{ $technology}} </li>
    @endforeach
</ul>

@endsection