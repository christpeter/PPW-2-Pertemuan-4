<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>My Website</h1>
        @include('partials.navbar')
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>© 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
