<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Locais - @yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light sticky-top shadow-sm mb-3">
        <div class="container-fluid">
            <a href="" class="navbar-brand text-primary">
                <strong>LOCAIS</strong>
            </a>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>
</body>

</html>
