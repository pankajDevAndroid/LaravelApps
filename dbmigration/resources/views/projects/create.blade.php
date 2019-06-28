@extends('layouts.app')
@section('content')


<div class="container">

    <!-- <form method="POST" action="/LARAVELWORKPLACE/LaravelApps/dbmigration/public/projects"> -->
    <form method="POST" action='{{url("projects")}}'>
        @csrf

        <div>
            <input class="form-control" type="text" name='title' placeholder="Enter title" />
        </div>

        <br />

        <div>
            <textarea class="form-control" name='description' placeholder="Enter description"> </textarea>
        </div>

        <br />

        <div>
            <button class="btn btn-primary" type="submit">Create entry </button>
        </div>
    </form>

</div>

@endsection