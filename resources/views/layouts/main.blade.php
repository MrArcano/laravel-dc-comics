<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body class="text-bg-dark">
    <div class="container my-3">

        @include('partials.header')

        <main class="my-3">
            @yield('content')
        </main>
    </div>
</body>
</html>