<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>La maolisana: @yield('title')</title>
</head>
<body>
    {{-- Header --}}
    @include('partials.header')

    {{-- Main --}}
    <main>
        @yield('content')
    </main>
    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>
