<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('custom.bootstrap5');
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">EduFun</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/category">Category</a></li>
                <li class="nav-item"><a class="nav-link" href="/writers">Writers</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>