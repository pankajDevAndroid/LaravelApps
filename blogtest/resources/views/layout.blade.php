<!DOCTYPE html>
<html>

<head>
    <title>@yield('title','Laravel Demo')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>

    <div>

        <div class="row bg-primary py-3">
            <div class="container">
                <a class="text-white" href='{{url("/")}}'>Home </a>
                <a class="mx-4 text-white" href='{{url("/profile")}}'>Profile</a>
                <a class="text-white" href='{{url("/about")}}'>About </a>
            </div>
        </div>
    </div>
    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>