@extends('layouts.public')
@section('content')
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
@endsection
@section('code')
@endsection