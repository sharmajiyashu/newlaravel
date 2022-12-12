<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Laravel</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ url('public/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ url('public/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ url('public/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ url('public/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{ url('public/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{ url('public/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{ url('public/css/style.css')}}" rel="stylesheet">
</head>

<body>

    @include('layouts.sidebar')
    <!-- /# sidebar -->
    @include('layouts.header')
    <!--  header-->

    <div class="content-wrap">
        @yield('content')
    </div>
    
    @include('layouts.js')
   
</body>

</html>