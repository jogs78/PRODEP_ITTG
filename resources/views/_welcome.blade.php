<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>PRODEP-ITTG</title>
    <script src="/js/popper.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/axios.min.js"></script>
    <style type="text/css">
h1 {
    font-size: 2.3em;
    line-height: 1.3em;
    margin: 15px 0;
    text-align: center;
    font-weight: 300;
}

p {
    margin: 0 0 1.5em 0;
}

img {
    max-width: 100%;
    height: auto;
}
body {
    margin: 0;
    padding: 0;
    font-family: Helvetica, Arial, sans-serif;
    color: #666;
    background: #f2f2f2; 
    font-size: 1em;
    line-height: 1.5em;
    padding-top: 80px;
}
    </style>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <header id="main-header">
    <div id="content">
        <nav class="navbar navbar-inverse navbar-fixed-top"  >
            <div class="container">
                <a class="navbar-brand  text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('messages.Toggle') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
    
                    </ul>
    
    
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @if (Route::has('login'))
                        @auth
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                        @else
                            <li><a href="{{ route('login') }}">{{__('auth.Login')}}</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">{{__('auth.Register')}}</a></li>
                            @endif
                        @endauth
                    @endif
        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    </header>
                <img src="img/PRODEP.png" style="width: 25%;margin-left:  35%;">
                <img src="img/ittg.png"style="width: 10%; height:10%; margin-left: 2%;">

    <section id="main-content">
        <article>            
            <div class="content" id="inicio">
                <h1>Inicio</h1>                
<h3>PROGRAMA PARA EL DESARROLLO PROFESIONAL DOCENTE PARA EL TIPO SUPERIOR</h3>
<p>
Sitio del la DIRECCION DE SUPERACION ACADEMICA: <a href="http://dsa.sep.gob.mx" target="_blank" rel="noopener noreferrer">http://dsa.sep.gob.mx</a><br>
Sitio de PRODEP A NIVEL SUPERIOR: <a href="http://www.dgesu.ses.sep.gob.mx/PRODEP.htm" target="_blank" rel="noopener noreferrer">http://www.dgesu.ses.sep.gob.mx/PRODEP.htm</a><br>
Sitio de PRODEP PARA TODOS LOS TECS: <a href="http://prodep-tnm.ittg.mx" target="_blank" rel="noopener noreferrer">http://prodep-tnm.ittg.mx</a><br>
Sitio de prodep del ITTG: <a href="http://prodep.ittg.mx" target="_blank" rel="noopener noreferrer">http://prodep.ittg.mx</a><br>
</p>

<!-- p><?php 
//$fecha = new DateTime($actualizar->created_at);
//$fecha_d_m_y = $fecha->format('d/m/Y');

//echo "Actualizado a $fecha_d_m_y";  ?>
 </p>  -->

{{--
<p>Tenemos {{$contador}} beneficiarios registrados </p>
<p>{{$contadorptc}} PTC {{$contadordeseable}} con Perfil deseable</p>
<p>y {{$contadorCA}} cuerpos académicos reconocidos</p>
--}}

</div> </article></section>

<section id="main-content">
    <article>
<div class="content" id="curso">
<h1 >Curso</h1>
    <p>INTEGRACION DE EXPEDIENTES PRODEP</p>


<p>EVIDENCIA PARA EL DIA UNO:</p>

<p>PRESENTACION EN POWERPOINT o WORD EN LA QUE MUESTREN CON CAPTURAS DE PANTALLA</p>
<p>* PAGINA DE LA DIRECCION DE SUPERACION ACADEMICA</p>
<p>* PAGINA DEL PRODEP PARA NIVEL SUPERIOR</p>
<p>* PAGINA DEL PRODEP PARA LOS TECS</p>
<p>* PAGINA DEL PRODEP PARA EL TEC DE TUXTLA</p>

<p>EVIDENCIA PARA EL DIA DOS:</p>
    <p>* RECUPERAR SU CONTRASEÑA</p>
    <p>* LISTA DE LOS PRODUCTOS VALIDOS PARA LA OBTENCION DEL P.D. (SEGUN RO)</p>
    <p>* RESUMEN DE SU CURRICULUM ACTUALMENTE EN PORDEP</p>


<p>EVIDENCIA DIA TRES:</p>
    <p>Archivo en el que cada participante integre la información para el <p>registro de un nuevo cuerpo académico (ficticio) que contenga:</p>
    <p>a)Nombre del cuerpo académico</p>
    <p>b)Linea(s) Innovadoras de Investigación Aplicada y Desarrollo <p>Tecnológico (LIIADT) que desarrolla el C.A.</p>
    <p>c) Descripción clara de la(s) LIIADT propuesta(s)</p>
    <p>d) Grado de consolidación propuesto</p>
    <p>e) Nombre de los integrantes</p>
    <p>f) LIIADT (s) que cultiva cada uno de los integrantes</p>
   <p> g) Área del conocimiento y disciplina en la que trabaja el C.A.</p>

<p>EVIDENCIA DIA 4:</p>
    <p>Archivo en el que describa el contenido (basados en las REGLAS DE OPERACION 2018) de su expediente para participar en la convocatoria del perfil deseable 2018 .</p>                            

            </div>
            
        </article> <!-- /article -->
    
    </section> <!-- / #main-content -->

    


    <section id="main-content">
        <article>
            <div class="content" id="preguntas">
                <h1>Preguntas frecuentes</h1>               
<p>VOY A PRESENTAR UNA SOLICITUD DE RECONOCIMIENTO AL PERFIL PRODEP, ¿QUE SE REVISA?</p>
<p>Cuando un profesor realiza una nueva solicitud el sistema le imprime una Ficha de recepción, ésta es revisada por el RIP, se busca que se cuente con las evidencias de cada una de las cosas que se enlistan en ésta.</p>

<p>QUIERO COMPRAR PERO ME PIDEN UNA FICHA DE RECEPCION</p>
<p>Para los profesores que reciben apoyo económico aparte del reconocmiento, en la FICHA en la última hoja se especifica  la distribución del dinero, los rubos y monto solicitado, si usted no esta de acuerdo es posible solicitar a la DSA una redistribución, en el menú "Solicitudes de apoyo"en la opcion "Estado de la solicitud" puede re imprimir su ficha de recepción.</p>

<p>¿EN QUE MOMENTO SE DAN DE ALTA O MODIFICAN LOS CUERPOS  ACADEMICOS?
<p>Depende del cronograma que envien, pero generalmente es a mediados de año.
                </p>
                
            </div>
        </article>
    </section>

    <section id="main-content">
 <article style="text-align: center;">
     <p> Consulte el manual de usuario</p>
         <a href="Manual-de-usuario.pdf" target="_blank"><input type="image" src="img/formapdf.png"></a>         
     
 </article>   
 </section>  

    
    <footer id="main-footer">
        <p>@2019 PRODEP-ITTG</p>
    </footer> <!-- / #main-footer -->

    
</body>
</html>