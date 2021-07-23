<!DOCTYPE html>
<html lang="en">

<head>
    @include('header')
</head>

<body class="bg-app">
    @include('menu')
    <div class="container-fluid">
        @yield('content')
    </div>
</body>

</html>
