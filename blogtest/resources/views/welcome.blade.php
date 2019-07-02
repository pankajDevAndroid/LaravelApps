@extends('layout')

@section('title','Home')



@section('content')

<div class="container">
    <h1>Home Page</h1>
    <h4>Home Page {{$foo}}</h4>

    <ul>
        @foreach ($params as $technology)
        <li>{{ $technology}} </li>
        @endforeach
    </ul>

    <h4> {!!$foo!!}Home Page </h4>
</div>

@endsection