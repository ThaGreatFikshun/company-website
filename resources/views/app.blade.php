<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadrox Limited</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Gadrox Limited</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}"><i class="fas fa-info-circle"></i> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}"><i class="fas fa-user"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contact Us</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link"><i class="fas fa-sign-out-alt"></i> Logout</button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
