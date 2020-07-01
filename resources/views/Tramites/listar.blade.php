@extends('layouts.app')
@section('content')
<br>
En el año <select name="year" id="year" onchange="if (this.value) window.location.href=this.value">
    @for($i=2014;$i<=2020;$i++)
    <option value="/tramites?page=1&year={{$i}}" @if($year==$i) selected @endif > {{$i}} </option>
    @endfor
</select>
<table class="table" border="1" id="lista_tramites">  
    <thead>
      <tr style="text-align: center;">
        <th colspan="3">Trámites</th>
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
          <a href="/subtramites/{{$tramite->id}}" class="btn btn-primary">Subtramites</a> 
          <a href="#" class="btn btn-danger" >Eliminar</a> 
        </td>
      </tr> 
      @endforeach
    </tbody>
  </table> 
  {{--$tramites->links()--}}
  
<!-- Large modal -->
<button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg" id="matricular">AGREGAR TRAMITE</button>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">AGREGAR TRAMITE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
                          <form class="form-horizontal" enctype="multipart/form-data"  id="frmaval"> 
                            <div class="row">
                              <div class="form-group col-12">
                               Fecha: <input class="form-control"  type="date" name="fecha" id="fecha" value="{{date("Y-m-d")}}">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-12">
                               Descripcion: <input class="form-control"  type="text" name="descripcion" id="descripcion" placeholder="Escriba una descripcción">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-12">
                                <input class="form-control btn btn-primary" type="button" value="Agregar" id="btn_agregar_tramite">
                              </div>
                            </div>
                          </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
          </div>
    </div>
  </div>
</div>


@endsection
@section('code')
<script>
$().ready(function(){
    $("#btn_agregar_tramite").click(function(event){


        alert($('#tipo_tramite_id').val());
        return;
        axios.post('/tramite/'  , {
                                    _token:  '{{ csrf_token() }}',
                                    fecha: $("#fecha").val(),
                                    descripcion: $("#descripcion").val(),
                                  })
        .then(function (response) {
          
            if (response.data.asistencia == true) 
                txt = '<p class="text-success">ASISTENCIA</p>';
            else
                txt = '<p class="text-danger">FALTA</p>';

            $('div#' + response.data.matriculacion ).html(txt);
            console.log(response);
        })
        .catch(function (error) {
            if(error.response.status==401)alert("Usted no ha iniciado en el sistema");
            if(error.response.status==500)alert("Error 500 en el sistema");
            else alert(error.response.data.error);
            console.log(error);
        })   
    });


});
</script>
@endsection