<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nutrichef')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- <div class="navbar">
        <img alt="NutriChef Logo" src="{{ asset('images/Nutri-hijaufont.png') }}" />
        <ul>
            <li><a href="{{ route('landingpage') }}">Home</a></li>
            <li><a href="{{ route('landingRec') }}">Recipes</a></li>
            <li><a href="#">Collection</a></li>
        </ul>
    </div> -->

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 Nutrichef. All rights reserved.</p>
    </footer>
</body>
</html>
