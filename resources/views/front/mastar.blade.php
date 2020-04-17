<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/main.css')}}">
    </head>
    <body>
        <div class="main">
            @yield('content')
        </div>
        <!-- script -->
        <script src="{{url('js/jquery-3.2.1.js')}}"></script>
        <script src="{{url('js/popper.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <!-- script -->
    </body>

</html>