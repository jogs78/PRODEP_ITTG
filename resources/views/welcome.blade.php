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
    <nav class="navbar navbar-expand-md  fixed-top navbar-dark bg-dark"  >
        <div class="container">
            <a class="navbar-brand  text-white" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('messages.Toggle') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                        @auth
                        <li class="nav-item">
                            <a  class="nav-link text-white" href="{{ route('home') }}">Inicio</a>
                        </li>
                        @endauth
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
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <img src="img/PRODEP.png" style="width: 25%;margin-left:  35%;">
    <img src="img/ittg.png"style="width: 10%; height:10%; margin-left: 2%;">
    <br>
    <br>
    <br>
    <br>
    <div class="card" id="inicio">
        <div class="card-header text-center">
            PROGRAMA PARA EL DESARROLLO PROFESIONAL DOCENTE PARA EL TIPO SUPERIOR
        </div>
        <div class="card-body">
                Sitio del la DIRECCION DE SUPERACION ACADEMICA: <a href="http://dsa.sep.gob.mx" target="_blank" rel="noopener noreferrer">http://dsa.sep.gob.mx</a><br>
                Sitio de PRODEP A NIVEL SUPERIOR: <a href="http://www.dgesu.ses.sep.gob.mx/PRODEP.htm" target="_blank" rel="noopener noreferrer">http://www.dgesu.ses.sep.gob.mx/PRODEP.htm</a><br>
                Sitio de PRODEP PARA TODOS LOS TECS: <a href="http://prodep-tnm.ittg.mx" target="_blank" rel="noopener noreferrer">http://prodep-tnm.ittg.mx</a><br>
                Sitio de prodep del ITTG: <a href="http://prodep.ittg.mx" target="_blank" rel="noopener noreferrer">http://prodep.ittg.mx</a><br>
        </div>
    </div>
    <div class="card">
        <div class="card-header text-center">
            Preguntas frecuentes
        </div>
        <div class="card-body">
            <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        VOY A PRESENTAR UNA SOLICITUD DE RECONOCIMIENTO AL PERFIL PRODEP, ¿QUE SE REVISA?
                      </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Cuando un profesor realiza una nueva solicitud el sistema le imprime una Ficha de recepción, ésta es revisada por el RIP, se busca que se cuente con las evidencias de cada una de las cosas que se enlistan en ésta.                        </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        QUIERO COMPRAR PERO ME PIDEN UNA FICHA DE RECEPCION
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Para los profesores que reciben apoyo económico aparte del reconocmiento, en la FICHA en la última hoja se especifica la distribución del dinero, los rubos y monto solicitado, si usted no esta de acuerdo es posible solicitar a la DSA una redistribución, en el menú "Solicitudes de apoyo"en la opcion "Estado de la solicitud" puede re imprimir su ficha de recepción.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿EN QUE MOMENTO SE DAN DE ALTA O MODIFICAN LOS CUERPOS ACADEMICOS?
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Depende del cronograma que envien, pero generalmente es a mediados de año.
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header text-center">
          Ayuda
        </div>
        <div class="card-body">
            Consulte el manual de usuario<br>
            <a href="Manual-de-usuario.pdf" target="_blank"><input type="image" src="img/formapdf.png"></a>
       </div>
    </div>    
</div>
    <footer class="page-footer bg-dark text-white text-center fixed-bottom">
        © 2020 PRODEP-ITTG
    </footer>        
</body>
</html>