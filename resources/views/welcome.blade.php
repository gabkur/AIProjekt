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
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            filter: brightness(0.7);
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            border: 5px solid white;
            padding: 20px;
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .content h1 {
            font-size: 4em;
            margin-bottom: 0.5em;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content h1 img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .content p {
            font-size: 1.5em;
            margin-bottom: 1em;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            margin: 5px;
        }

        .btn-primary
        .btn-primary:hover {
            background-color: #0056b3;
        }

        .clinic-photo {
            margin-top: 20px;
        }

        .clinic-photo img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="bg">
        <div class="content">
            <h1><img src="{{ asset('images/tooth_logo.png') }}" alt="Logo">Przychodnia Dentystyczna</h1>
            <p>Profesjonalna opieka dentystyczna dla całej rodziny</p>
            @if(Auth::check())
                <a href="{{ url('/patients') }}" class="btn btn-primary">Pacjenci</a>
                <a href="{{ url('/appointments') }}" class="btn btn-primary">Wizyty</a>
            @endif
            <a href="{{ url('/dentists') }}" class="btn btn-primary">Dentyści</a>
            <a href="{{ url('/services') }}" class="btn btn-primary">Usługi</a>
            @if(Auth::check())
                <a href="{{ url('/logout') }}" class="btn btn-primary"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Wyloguj
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ url('/login') }}" class="btn btn-primary">Zaloguj</a>
            @endif
            <div class="clinic-photo">
                <img src="{{ asset('images/clinic.jpg') }}" alt="Przychodnia Dentystyczna">
            </div>
        </div>
    </div>
</body>
</html>
