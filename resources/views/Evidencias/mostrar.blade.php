@extends('layouts.public')

@section('breadcumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/tramites">Tramites</a></li>
    @foreach ($inverso as $paso)
      @if ($loop->last)
        <li class="breadcrumb-item active">{{$paso[0]}}</li>       
      @else        
        <li class="breadcrumb-item"><a href="{{$paso[1]}}">{{$paso[0]}}</a></li>      
      @endif
    @endforeach
{{--
  <li class="breadcrumb-item"><a href="#">Library</a></li>
  <li class="breadcrumb-item active" aria-current="page">Data</li>
--}}                  
  </ol>
</nav>

@endsection


@section('content')
<div class="alert alert-info alert-dismissible fade show" role="alert">
  @if ($subtramite->publico())
    Este tramite es público, cualquiera puede ver las evidencias de él.
  @else
    Este tramite es privado, los autorizados a ver estas evidencias son:
    <ul>
      @foreach ($subtramite->permitidos() as $permitido)
        <li>{{$permitido->nombre}}</li>
      @endforeach
      @foreach($subtramite->permitidosca() as $permitido)
        <li>Miembros de: {{$permitido->nombre}}</li>
      @endforeach
    </ul>
  @endif
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@can('create', App\Models\Tramite::class)
<button type="button" class="btn btn-primary form-control" data-toggle="modal"  data-tramite-id="{{$subtramite->id}}" data-tramite-nombre="{{$subtramite->descripcion}}"  data-target="#bd-example-modal-lg-tramite" id="matricular">AGREGAR TRAMITE</button>
@include('Tramites.modal-tramite')
@endcan
      <table class="table" border="1" id="lista_tramites">  
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Involucrados</th>
            @can('update',  App\Models\Tramite::class)
            <th>Opciones</th>
            @endcan
          </tr>
        </thead>
        <tbody>
          @foreach($subtramite->tramites as $tramite)
            <tr id="{{$tramite->id}}">
              <td class="editable editablef">
                {{$tramite->fecha}}
              </td>   
              <td class="editable editabled">
                @if ($tramite->publico())
                  <a href="/evidencias/{{$tramite->id}}">
                    {{$tramite->descripcion}}
                  </a>
               @else
                  @can('view', $tramite)
                  <a href="/evidencias/{{$tramite->id}}">
                    {{$tramite->descripcion}}
                  </a>
                  @else 
                  <a href="#">
                    {{$tramite->descripcion}}
                  </a>
                  @endcan
                @endif
              </td>
              <td>
                @if ($tramite->publico())
                    Marcado como público.
                  @else
                  Usuarios permitdos:
                  <ul>
                  @forelse ($tramite->permitidos() as $permitido)
                      <li>{{$permitido->nombre}}
                  @empty
                      <li>NO SE HA ESTABLECIDO</li>
                  @endforelse
                  </ul>
                  Cuerpos académicos permitdos:
                  <ul>
                  @forelse ($tramite->permitidosca() as $permitido)
                      <li>{{$permitido->nombre}}
                  @empty
                      <li>NO SE HA ESTABLECIDO</li>
                  @endforelse
                  </ul>
                @endif
              </td>
              @can('update',  App\Models\Tramite::class)
              <td class="opciones">
                @can('delete', $tramite)
                <button class="btn btn-danger btn_eliminar_tramite">Eliminar</button>             
                @endcan
      
                @can('asignar',  App\Models\Tramite::class)
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Permisos
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-beneficiarios-tramite" data-tramite-id="{{$tramite->id}}" data-tramite-nombre="{{$tramite->descripcion}}">Beneficiarios</a>
                        <a class="dropdown-item publicar" id="{{$tramite->id}}" href="#">Tramite Público</a>
                      </div>
                    </div>
                @endcan
              </td>
              @endcan
            </tr> 
          @endforeach
        </tbody>
      </table>
<br>

@can('create', App\Models\Evidencia::class)
<div class="row">
  <div class="col">
    <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg">AGREGAR EVIDENCIA</button>
  </div>
  <div class="col">
    <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg2">DIVIDIR Y ASIGNAR EVIDENCIA</button>
  </div>
  <div class="col">
    <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg3">EVIDENCIA DISPAREJA</button>
  </div>
</div>
@endcan

<table class="table" border="1" id="lista_evidencias">  
  <thead>      
      <tr>                
        <th>Documento</th>
        <th>Descripcion</th>
        <th>Acción</th>
        </tr>
    </thead>
    <tbody>
      @foreach($subtramite->evidencias as $evidencia)
      @if ($evidencia->publica())
        <tr id="{{$evidencia->id}}">
          <td>
            <a href="/ver/{{$evidencia->id}}" target="_blank" rel="noopener noreferrer">{{$evidencia->documento}}</a>            
          </td>   
          <td class="editable editabled">
            {{$evidencia->descripcion}}
          </td>
          <td>
            @can('delete', $evidencia)
              <button class="btn btn-danger btn_eliminar_evidencia">Eliminar</button> 
            @endcan
            @can('asignar', App\Models\Evidencia::class)
              @if (!$evidencia->publica())
                <button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal-evidencia" data-evidencia-id="{{$evidencia->id}}" data-evidencia-nombre="{{$evidencia->descripcion}}" data-subtramite-id="{{$subtramite->id}}">Beneficiarios</button>
              @endif
            @endcan
          </td>  
        </tr> 
      @else          
        @can('view', $evidencia)
        <tr id="{{$evidencia->id}}">
          <td>
            <a href="/ver/{{$evidencia->id}}" target="_blank" rel="noopener noreferrer">{{$evidencia->documento}}</a>            
          </td>   
          <td class="editable editabled">
            {{$evidencia->descripcion}}
          </td>
          <td>
            @can('delete', $evidencia)
            <button class="btn btn-danger btn_eliminar_evidencia">Eliminar</button> 
            @endcan
            
            @can('asignar', App\Models\Evidencia::class)
            @if (!$evidencia->publica())
            <button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal-evidencia" data-evidencia-id="{{$evidencia->id}}" data-evidencia-nombre="{{$evidencia->descripcion}}" data-subtramite-id="{{$subtramite->id}}">Beneficiarios</button>
            @endif
            @endcan
          </td>  
        </tr> 
        @endcan
      @endif
      

      @endforeach
    </tbody>
  </table> 

      @include('Evidencias.modal-subir')
      @include('Evidencias.modal-dividir')
      @include('Evidencias.modal-dividir2')
      @include('Evidencias.modal-beneficiarios-evidencia')
      @include('Tramites.modal-beneficiarios-tramite')

@endsection
@section('code')
<script>
  var mostrando_input = false;
  @if ($subtramite->publico())
    var tramite_publico = true;
    @else
    var tramite_publico = false;    
    @endif
    
  
  $().ready(function(){
    @include('Evidencias.script')

$('#bd-example-modal-lg-tramite').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('tramite-id') // Extract info from data-* attributes
  var nombret = button.data('tramite-nombre') // Extract info from data-* attributes
  $('#titulo_del_tramite').text( 'Agregar sub tramite al:  ' +  nombret)
  $('#tramite_id').val(recipient)
});


    @include('Tramites.script-operaciones-tramite')
    //beneficiarios tramite
    @include('Tramites.script-acceso-tramite') 
  
  
  });
  </script>
  

@endsection