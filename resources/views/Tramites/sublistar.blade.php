@extends('layouts.app')
@section('content')

<table class="table" border="1" id="lista_tramites">  
    <thead>
      <tr style="text-align: center;">
        <th colspan="3">{{$padre->descripcion}} - {{$padre->tipo_tramite->tipo}}</th>
      </tr>    
      <tr>
        <th>Fecha</th>
        <th>Descripcion</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tramites as $tramite)
      <tr>
        <td>
          {{$tramite->fecha}}
        </td>   
        <td>
          {{$tramite->descripcion}}
        </td>
        <td>
          <a href="/evidencias/{{$tramite->id}}" class="btn btn-primary">Evidencias</a>
          <a href="#" class="btn btn-danger">Eliminar</a>
        </td>  
    </tr> 
    @endforeach

  </tbody>
  </table> 
  </div>
  {{--$tramites->links()--}}
  

    <!-- Large modal -->
<button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg" id="matricular">AGREGAR SUB TRAMITE</button>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">LISTA DE ESTUDIANTES</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
                <form>
                    <div class="row">
                      <div class="col-5">
                        <input type="text" class="form-control" placeholder="Nombre">
                      </div>
                      <div class="col-5">
                        <input type="text" class="form-control" placeholder="Correo">
                      </div>
                      <div class="col-2">
                        <input type="submit" class="form-control btn-primary" value="BUSCAR">
                      </div>
                    </div>
                </form><BR>
                <div class="row">
                  <table class="table" border="1" id="lista_estudiantes">
                    <thead><th>Nombre</th><th>Acciones</th></thead>
                        <tbody>
                          {{$padre->id}}
                        </tbody>
                  </table>  
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            
          </div>
    </div>
  </div>
</div>


@endsection