@extends('layouts.public')
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
    @forelse ($subtramite->permitidosca() as $permitido)
      <li>Miembros de: {{$permitido->nombre}}</li>
    @empty
    @endforelse
  </ul>

@endif
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>

</div>

<table class="table" border="1" id="lista_evidencias">  
  <thead>      
      <tr style="text-align: center;">
        <th colspan="3">Evidencias: <a href="/subtramites/{{$tramite->id}}">{{$tramite->descripcion}}</a>>{{$subtramite->descripcion}}</th>
      </tr>    
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
                <button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-evidencia-id="{{$evidencia->id}}" data-evidencia-nombre="{{$evidencia->descripcion}}" data-subtramite-id="{{$subtramite->id}}">Beneficiarios</button>
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
            <button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-evidencia-id="{{$evidencia->id}}" data-evidencia-nombre="{{$evidencia->descripcion}}" data-subtramite-id="{{$subtramite->id}}">Beneficiarios</button>
            @endif
            @endcan
          </td>  
        </tr> 
        @endcan
      @endif
      

      @endforeach
    </tbody>
  </table> 


  @can('create', App\Models\Evidencia::class)
    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg">AGREGAR EVIDENCIA</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg2">DIVIDIR Y ASIGNAR EVIDENCIA</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-secondary form-control" data-toggle="modal" data-target=".bd-example-modal-lg3">EVIDENCIA DISPAREJA</button>
      </div>
    </div>
  @endcan
      @include('Evidencias.modal-subir')
      @include('Evidencias.modal-dividir')
      @include('Evidencias.modal-beneficiarios')
@endsection
@section('code')
  @include('Evidencias.script')
@endsection