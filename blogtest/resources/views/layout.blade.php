<!DOCTYPE html>
<html>

<head>
    <title>@yield('title','Laravel Demo')</title>
</head>

<body>
    <!-- <ul>
        <li><a href="/">Home</a> </li>
        <li><a href="/profile">Profile</a></li>
        <li><a href="/about">About </a></li>
    </ul> -->

    <ul>
        <li><a href="/LARAVELWORKPLACE/LaravelApps/blogtest/public/">Home </a></li>
        <li><a href="/LARAVELWORKPLACE/LaravelApps/blogtest/public/profile">Profile</a></li>
        <li><a href="/LARAVELWORKPLACE/LaravelApps/blogtest/public/about">About </a> </li>
    </ul>

    @yield('content')

</body>

</html>