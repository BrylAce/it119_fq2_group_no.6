<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <style>
            body {
    font-family: 'Figtree', sans-serif;
    margin: 0;
    line-height: 1.5;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #f3f4f6;
    text-align: center;
}

.nav {
    position: absolute;
    top: 1rem;
    right: 1rem;
}

.nav a {
    margin-left: 1rem;
    color: #4b5563;
    font-weight: 600;
    text-decoration: none;
}

.nav a:hover {
    color: #1f2937;
}

.logo {
    height: 4rem;
    margin-bottom: 2rem;
}

.title {
    font-size: 2rem;
    color: #1f2937;
}

.footer {
    margin-top: 2rem;
    font-size: 0.875rem;
    color: #6b7280;
}

        </style>
        <div class="container">
            @if (Route::has('login'))
                <div class="nav">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="logo.svg" alt="Logo" class="logo">
                <h1 class="title">Welcome to Laravel</h1>
            </div>

            <div class="footer">
                © 2024 Laravel
            </div>
        </div>
    </body>
</html>
