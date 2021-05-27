<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="/js/popper.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/axios.min.js"></script>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>    
    
    <div class="fixed-top w-100">
        <div class="row container">
            <nav class="navbar navbar-expand-xl navbar-dark bg-dark"  >
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto ">
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/prodep">Programa</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/contraloria_social">Contraloria social</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/documents">Documentos normativos</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/informes">Informes trimestrales</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/quejas">Quejas, denuncias y peticiones</a>
                                </li>
        {{--                    <li class="nav-item ">
                                    <a class="nav-link text-white" href="/estadisticos">Estadisticos</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/transparencia">Transparencia</a>
                                </li>                        
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="/comision_tecnica">Comisión técnica</a>
                                </li>
         --}}                    
                            </ul>                        
        
        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="/tramites">Tramites</a>
                            </li>
        
                            @can('before',  App\Models\Ca::class)
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="/cuerpos">CAs</a>
                            </li>                            
                            @endcan
                       
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('auth.Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link  text-white" href="{{ route('register') }}">{{ __('auth.Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown ">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
        
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('auth.Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>                
        </div>
        <div class="row container">
            @yield('breadcumb')
        </div>
    </div>


<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <img src="/img/prodep.jpg" style="width: 25%;margin-left:  35%;">
    <img src="/img/ittg.png"style="width: 10%; height:10%; margin-left: 2%;">
    <main class="py-4">
        @yield('content')
    </main>
</div>
    <footer class="page-footer bg-dark text-white text-center fixed-bottom">
        © 2020 PRODEP-ITTG
    </footer>        
</body>
@yield('code')
</html>