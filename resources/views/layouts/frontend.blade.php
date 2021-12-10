<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.frontend.css')
    <title>{{ config('app.name') }} - Home</title>
</head>
<body>

    @include('partials.frontend.navbar')
    @include('partials.frontend.preloader')

    <div class="home-page-content">
        @yield('content')
    </div>
    
</body>

@include('partials.frontend.footer')
@include('partials.frontend.js')
</html>