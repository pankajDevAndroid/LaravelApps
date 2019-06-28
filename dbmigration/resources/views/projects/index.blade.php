@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Projects Page </h1>
    <table class="table">
        <tr>
            <td><b>Technology</b></td>
            <td><b>Opration</b></td>
        </tr>
        @foreach($projects as $project)
        <tr>
            <td>
                <a href='{{url("projects/$project->id/")}}'>
                    {{$project->title}}
                </a>
            </td>
            <td><a class="btn btn-primary" href='{{url("projects/$project->id/edit")}}'> Edit</a></td>
        </tr>
        @endforeach

    </table>


    <br />

    <a class="btn btn-primary" href='{{url("projects/create")}}'>Click to add technology</a>
</div>
@endsection