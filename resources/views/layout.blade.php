<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    {{-- Css all --}}
    <link rel="stylesheet" href="{{ asset('scss/post-recognize.css') }}">
    <link rel="stylesheet" href="{{asset('/scss/recognize.css')}}">
    <title>@yield('title', 'Ghi nhận')</title>
</head>
<body>
    <div class="container">
        @include('sidebar')
        @yield('content')
    </div>
</body>
</html>