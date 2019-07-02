@extends('layouts.app')
@section('content')


<div class="container">

    <form method="POST" action='{{url("projects")}}'>

        @csrf

        <div>
            <input value="{{old('title')}}" class="form-control {{$errors->has('title')? 'border-danger':''}}" type="text" name='title' placeholder="Enter title" />
        </div>

        <br />

        <div>
            <textarea class="form-control {{$errors->has('description')? 'border-danger':''}}" name='description' placeholder="Enter description">{{old('description')}} </textarea>
        </div>

        <br />

        <div>
            <button class="btn btn-primary" type="submit">Create entry </button>
        </div>

        @include('errors')

    </form>

</div>

@endsection