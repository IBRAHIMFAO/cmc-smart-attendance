<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/timetable.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="{{ url('css/attendance.css') }}"> --}}
    @stack("css")
    <title>@yield('title')</title>
</head>
    <body>
            @include('app.navbar')
            @yield('content')

            <script src="{{ url('jquery.min.js') }}"></script>
            <script src="{{ url('bootstrap.min.js') }}"></script>
            <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready( function () {
                    $('#tableindex').DataTable();
                } );
            </script>

            @stack('js')
    </body>
</html>
