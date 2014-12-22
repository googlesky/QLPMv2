<html>
<head>
    <meta charset="UTF-8"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" >
    <script type="text/javascript" src="{{asset('assets/js/jquery/jquery-1.11.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery/additional-methods.min.js')}}"></script>
</head>
<body>
<div class="container">
    @yield('noidung')
</div>
</body>
</html>