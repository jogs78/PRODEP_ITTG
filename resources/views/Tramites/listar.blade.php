@extends('layouts.public')
@section('content')
<br>
En el año <select name="year" id="year" onchange="if (this.value) window.location.href=this.value">
    @for($i=$min;$i<=$max;$i++)
    <option value="/tramites?page=1&year={{$i}}" @if($year==$i) selected @endif > {{$i}} </option>
    @endfor
</select>
<table class="table" border="1" id="lista_tramites">  
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Descripcion</th>
        <th>Involucrados</th>
        @can('update',  App\Models\Tramite::class)
        <th>Acción</th>
        @endcan
      </tr>
    </thead>
    <tbody>
      @foreach($tramites as $tramite)
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
  {{--$tramites->links()--}}

  <!-- Large modal -->
  @can('create', App\Models\Tramite::class)
  <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#bd-example-modal-lg-tramite" id="matricular">AGREGAR TRAMITE</button>
  @include('Tramites.modal-tramite')
  @endcan
@endsection

@include('Tramites.modal-beneficiarios-tramite')
@section('code')
<script>
var mostrando_input = false;
$().ready(function(){
  @include('Tramites.script-operaciones-tramite')
  @include('Tramites.script-acceso-tramite')


});
</script>
@endsection