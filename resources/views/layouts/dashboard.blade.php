<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}} - Dashboard</title>
    @include('partials.dashboard.css')
</head>

    @include('partials.dashboard.navbar')
    @include('partials.dashboard.sidebar')
    
<body>

    <div class="dashboard-page-content">
        @yield('content')
    </div>
    
</body>

    @include('partials.dashboard.js')
    @include('partials.dashboard.footer')

</html>