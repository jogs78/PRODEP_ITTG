<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>PRODEP-ITTG</title>
</head>
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
#main-header {
/*    background: #333;*/
    background: #000;
    color: white;
    height: 10px;
}   
    #main-header a {
        color: white;
    }
 
/*
 * Logo
 */
#logo-header {
    float: left;
    padding: 15px 0 0 20px;
    text-decoration: none;
}
    #logo-header:hover {
        color: #0b76a6;
    }
    
    #logo-header .site-name {
        display: block;
        font-weight: 700;
        font-size: 1.2em;
    }
    
    #logo-header .site-desc {
        display: block;
        font-weight: 300;
        font-size: 0.8em;
        color: #999;
    }
    
 
/*
 * Navegación
 */
nav {
    float: right;
}
    nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
        padding-right: 20px;
    }
    
        nav ul li {
            display: inline-block;
            line-height: 50px;
        }
            
            nav ul li a {
                display: block;
                padding: 0 10px;
                text-decoration: none;
            }
            
                nav ul li a:hover {
                    background: #0b76a6;
                }
                #main-content {
    background: white;
    width: 90%;
    max-width: 800px;
    margin: 20px auto;
    box-shadow: 0 0 10px rgba(0,0,0,.1);
}

    #main-content header,
    #main-content .content {
        padding: 10px;
    }
    #main-footer {
/*    background: #777;*/
background: #000;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
}
    #main-footer p {
        margin: 0;
    }
    
    #main-footer a {
        color: white;
    }
    #main-header {
/*    background: #777;*/
background: #000;
    color: white;
    height: 50px;
    
    width: 100%;
    left: 0; 
    top: 0; 
    position: fixed; 
}body {
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
<body>
    
    <header id="main-header">
        
        <a id="logo-header" href="#">
            
        </a> <!-- / #logo-header -->

        <nav>
            <ul>
<!--
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#preguntas">Preguntas</a></li>
-->
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
        </nav>
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
                {{--
                    <p>Tenemos {{$contador}} beneficiarios registrados </p>
                <p>{{$contadorptc}} PTC {{$contadordeseable}} con Perfil deseable</p>
                <p>y {{$contadorCA}} cuerpos académicos reconocidos</p>
                --}}
            </div>
        </article>
    </section>
    <section id="main-content">
        <article>
            <div class="content" id="preguntas">
                <h1>Preguntas frecuentes</h1>              
                <p>
                    VOY A PRESENTAR UNA SOLICITUD DE RECONOCIMIENTO AL PERFIL PRODEP, ¿QUE SE REVISA?<br>
                    Cuando un profesor realiza una nueva solicitud el sistema le imprime una Ficha de recepción, ésta es revisada por el RIP, se busca que se cuente con las evidencias de cada una de las cosas que se enlistan en ésta.<br>
                    QUIERO COMPRAR PERO ME PIDEN UNA FICHA DE RECEPCION<br>
                    Para los profesores que reciben apoyo económico aparte del reconocmiento, en la FICHA en la última hoja se especifica  la distribución del dinero, los rubos y monto solicitado, si usted no esta de acuerdo es posible solicitar a la DSA una redistribución, en el menú "Solicitudes de apoyo"en la opcion "Estado de la solicitud" puede re imprimir su ficha de recepción.<br>
                    ¿EN QUE MOMENTO SE DAN DE ALTA O MODIFICAN LOS CUERPOS  ACADEMICOS?<br>
                    Depende del cronograma que envien, pero generalmente es a mediados de año.
                </p>
            </div>
        </article>
    </section>
    <section id="main-content">
        <article style="text-align: center;">
            <p>
                 Consulte el manual de usuario<br>
                 <a href="Manual-de-usuario.pdf" target="_blank"><input type="image" src="img/formapdf.png"></a>
            </p>         
         </article>   
        </section>  

    <footer id="main-footer">
        <p>@2019 PRODEP-ITTG</p>
    </footer> <!-- / #main-footer -->
</body>
</html>