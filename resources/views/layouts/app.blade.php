<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Dentystyczna</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .bg {
            background-image: url("{{ asset('images/background.jpg') }}");
            min-height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 15px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 0;
        }

        .navbar a {
            color: white !important;
        }

        .navbar-nav {
            flex-direction: row;
        }

        .nav-item {
            padding-left: 10px;
        }

        .navbar-right {
            margin-left: auto;
        }
    </style>
</head>
<body>
    <div class="bg">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/tooth_logo.png') }}" alt="Logo" style="width: 30px; height: 30px;"> Przychodnia Dentystyczna
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('patients.index') }}">Pacjenci</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('appointments.index') }}">Wizyty</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dentists.index') }}">Dentyści</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.index') }}">Usługi</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Wyloguj
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Zaloguj</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <div class="container mt-5">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>
