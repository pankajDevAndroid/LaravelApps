@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{$project->title}}</h1>
    <br />
    <p>{{$project->description}}</p>
</div>


@endsection