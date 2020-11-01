<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PACOS | Sitios para comer</title>
    <link rel="shortcut icon" href="{{ asset('images/LOGOPACOS.png') }}" type="image/x-icon">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>

    @yield('sheetstyle')
    <!-- <link href="{{ asset('css/index.css') }}" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

</head>

<body>    
    <nav class="navbar pacos-nav--is-gray">
        <div class="navbar-brand">
            <a class="navbar-item" href="#"></a>
            <a class="navbar-item" href="#"></a>
            <a class="navbar-item pacos-no-ahref" href="{{ url('/') }}">
                <img src="./images/LOGOPACOS.png" alt="PACOS: La red social de los sitios de comida" > &nbsp;
                <b>PACOS &nbsp;</b> &#8226; Sitios para comer
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="{{ url('/') }}">{{ __('Inicio') }}</a>
                <a class="navbar-item" href="{{ route('tengounPACOS') }}">{{ __('Tengo un sitio de comida') }}</a>
                <a class="navbar-item" href="{{ route('quienessomos') }}">{{ __('Quienes somos') }}</a>
                <a class="navbar-item" href="{{ route('contactanos') }}">{{ __('Contáctanos') }}</a>
                <label class="navbar-item" >
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            </div>
        </div>
    </nav>
    @yield('suscribirme')
    @yield('segundasection')    
    @yield('tercerasection')
    @yield('cuartasection')
    <script src="{{ asset('js/bulma.js') }}"></script>
    <script>
        feather.replace();
    </script> 
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".content").fadeOut(1500);
                $(".content").hide();
            },3000);
        });
        </script>
</body>

</html>
