@extends('layouts.app')
@section('content')

<div class="container">

    <h1>Edit Project </h1>

    <form method="POST" action='{{url("projects/$project->id")}}'>

        @method('PATCH')
        @csrf

        <label>Title:</label>
        <div>
            <input class="form-control" type="text" name='title' placeholder="Enter title" value="{{$project->title}}" />
        </div>

        <br />
        <label>Description:</label>
        <div>
            <textarea class="form-control" name='description' placeholder="Enter description">{{$project->description}} </textarea>
        </div>

        <br />

        <div>
            <button class="btn btn-primary" type="submit">Update entry </button>
        </div>
    </form>

    <br />

    <form method="POST" action='{{url("projects/$project->id")}}'>

        @method('DELETE')
        @csrf

        <div>
            <button class="btn btn-danger" type="submit">Delete entry </button>
        </div>
    </form>

</div>


@endsection