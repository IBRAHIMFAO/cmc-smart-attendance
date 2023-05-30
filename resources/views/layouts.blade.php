<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/timetable.css') }}">
    <title>titre</title>
</head>
<body>
@yield('content')
<script src="{{ url('jquery.min.js') }}"></script>
<script src="{{ url('bootstrap.min.js') }}"></script>
@stack('js')
</body>
</html>
