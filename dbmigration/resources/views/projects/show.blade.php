@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{$project->title}}</h1>
    <br />
    <p>{{$project->description}}</p>

    @if($project->tasks->count())
    <div class="form-group border border-secondary py-2 px-2">
        @foreach($project->tasks as $task)
        <form method="POST" action='{{url("completed-tsks/$task->id/")}}'>
            @if($task->completed)
            @method('DELETE')
            @endif


            @csrf
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label class="{{$task->completed ? 'is-complete':''}}" for="completed"><input {{$task->completed ? 'checked':''}} name="completed" type="checkbox" onchange="this.form.submit()"> {{$task->description}}</label>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
    @endif

    <!--  Add a new task here  -->

    <form method="POST" action='{{url("projects/$project->id/tasks")}}'>

        @csrf

        <div class="form-group border border-secondary py-2 px-2">
            <label for="exampleInputEmail1">New Task</label>
            <input name="description" type="text" class="form-control" placeholder="Enter task description">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @include('errors')

    </form>

</div>

@endsection