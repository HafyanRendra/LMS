<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=material+icons">
    <link rel="stylesheet" href="{{asset('style.css') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>@yield('pageTitle')</title>
</head>

<body>
    <div class="container">
        @include('partials.header')
        @include('partials.sidebar')
        <div class="main">
            @yield('main')
    </div>
</body>

</html>