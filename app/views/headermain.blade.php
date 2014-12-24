<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    @yield('customCSS')
    @yield('customJS')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/messi.min.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/morris-0.4.3.min.css')}}" >
    <script type="text/javascript" src="{{asset('assets/js/jquery/jquery-1.11.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery/additional-methods.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/messi.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/morris.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/raphael-min.js')}}"></script>
</head>

<body>
@yield('NoiDung')
</body>