@extends('layouts.app')
@section('content')

<table style="width: 70%" id="example">  
    <thead>
  
      {{$tramite->id}}, {{$tramite->fecha}} , {{$tramite->tipo_tramite->tipo}}, {{$tramite->descripcion}}

      <tr style="text-align: center;">
        <th colspan="6">Evidencia</th>
         
      </tr>    
      <tr>                
          <th colspan="1">Fecha</th>               
          <th colspan="1">Acción</th>
        </tr>
    </thead>
     @foreach($tramite->evidencias as $evidencia)
  
    <tbody>
      <tr>
      <td>
      {{$evidencia->id}}, {{$evidencia->documento}} ,{{$evidencia->descripcion}}
    </td>   
    <td>
        <a href="/evidencias/{{$tramite->id}}" class="btn btn-primary"  style="color:#000">VER</a> </td>  

      </tr> 
    
    </tbody>
    @endforeach
  </table> 
  </div>
  <div class="pagination" style="margin-left: 15%;width: 70%">
  
  <!-- Large modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="matricular">SUBIR EVIDENCIA</button>
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
                            {{$origen}}
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