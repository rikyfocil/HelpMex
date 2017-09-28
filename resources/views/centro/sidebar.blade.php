<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Centro de acopio</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        #map{
            height:400px;
            width:100%
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="{{asset('images/sidebar-1.jpg')}}">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Nombre de app
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="{{strpos(Request::url(), 'centro/dashboard') ? 'active' : 'inactive' }}">
                        <a href="{{route('dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{strpos(Request::url(), 'actividades') ? 'active' : 'inactive' }}">
                        <a href="{{route('info_centro')}}">
                            <i class="material-icons">person</i>
                            <p>Informaci&oacute;n de centro</p>
                        </a>
                    </li>
                    
                    <li class="{{strpos(Request::url(), 'centro/comunidades') ? 'active' : 'inactive' }}">
                        <a href="{{route('comunidades')}}">
                            <i class="material-icons">library_books</i>
                            <p>Comunidad</p>
                        </a>
                    </li>

                     <li class="{{strpos(Request::url(), 'centro/comunidades/registro') ? 'active' : 'inactive' }}">
                        <a href="{{route('registro_comunidades')}}">
                            <i class="material-icons">create</i>
                            <p>Registro de comunidad</p>
                        </a>
                    </li>
                    
                   
                    
                </ul>
            </div>
        </div>

        @yield('content')

    </div>

</body>

<script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/chartist.min.js')}}"></script>
<script src="{{asset('js/arrive.min.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap-notify.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA"></script>
<script src="{{asset('js/material-dashboard.js?v=1.2.0')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>
<script src="{{asset('js/google_map.js')}}"></script>

</html>
