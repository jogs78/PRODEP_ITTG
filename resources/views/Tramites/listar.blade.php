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
      <tr id="{{$tramite->id}}">
        <td class="editable editablef">
          {{$tramite->fecha}}    
        </td>
        <td class="editable editabled">
          {{$tramite->descripcion}}
        </td>
        <td>
          <a href="/subtramites/{{$tramite->id}}" class="btn btn-primary">Subtramites</a> 
          @can('delete', $tramite)
          <button class="btn btn-danger btn_eliminar_tramite">Eliminar</button>            
          @endcan

          @can('asignar',  App\Models\Tramite::class)
            <button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-tramite-id="{{$tramite->id}}" data-tramite-nombre="{{$tramite->descripcion}}">Beneficiarios</button>
          @endcan

        </td>
      </tr> 
      @endforeach

    </tbody>
  </table> 
  {{--$tramites->links()--}}

  <!-- Large modal -->
  @can('create', App\Models\Tramite::class)
  <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg" id="matricular">AGREGAR TRAMITE</button>
  @endcan
  

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">AGREGAR TRAMITE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
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
      </div><!-- modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal fade -->

<!-- modal de beneficiarios-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo_del_tramite">Beneficiarios del tramite</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="tramite_id" name="tramite_id">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="_nombre" placeholder="Nombre">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="_paterno" placeholder="Paterno">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="_materno" placeholder="Materno">
          </div>
          <div class="col">
            <input class="form-control btn btn-primary" id="btnbuscar" type="button" value="Filtrar...">
          </div>
        </div>
        <div class="row">
          <div class="col" style="display: block; position: relative; height: 200px; overflow: auto;" >
            <table id="tbl-beneficiarios" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style='width: 5%;' > </th>
                  <th>NOMBRE</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="2">SIN RESULTADOS</td>
                </tr>
{{-- 
                <tr>
                  <td>
                    3 <input class="" type="checkbox" value="" id="defaultCheck1">
                  </td>
                  <td>Larry</td>
                </tr>                  
--}}
              </tbody>
            </table>
          </div><!-- class="table-wrapper-scroll-y" -->
        </div><!-- row -->
      </div><!--modal-body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal fade -->
@endsection
@section('code')
<script>
var mostrando_input = false;
$().ready(function(){
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('tramite-id') // Extract info from data-* attributes
    var nombret = button.data('tramite-nombre') // Extract info from data-* attributes
    $('#titulo_del_tramite').text( 'Beneficiarios del tramite:  ' +  nombret)
    $('#tramite_id').val(recipient)
  });

  $("#btnbuscar").click(function(event){
    $('#btnbuscar').attr("disabled", true);
    axios.post('/tramites/beneficiarios'  , {
                                _token:  '{{ csrf_token() }}',
                                tramite_id: $("#tramite_id").val(),
                                nombre: $("#_nombre").val(),
                                paterno: $("#_paterno").val(),
                                materno: $("#_materno").val(),
                              })
                                                     
    .then(function (response) {
      $('#tbl-beneficiarios tbody').empty();
      for (let i = 0; i < response.data.length; i++) {
        linea  = '<tr>';
        linea +='<td><input class="conceder" type="checkbox" ' + response.data[i].checked + ' id="' + response.data[i].id + '"></td>';
        linea +='<td>' + response.data[i].usuario + '</td>';
        linea +='</tr>';
        $('#tbl-beneficiarios  > tbody').append(linea);
        $('#btnbuscar').attr("disabled", false);

      }
      console.log(response);
     })
    .catch(function (error) {
      if(error.response.status==401){alert("Usted no ha iniciado en el sistema");return;}
      if(error.response.status==404){alert(error.response.data.error);return;}
      if(error.response.status==409){alert(error.response.data.error);return;}
      if(error.response.status==500){alert("Error 500 en el sistema");return;}
      alert(error.message);
        console.log(error);
    });
    
  });

  $("#btn_agregar_tramite").click(function(event){
    descripcion = $("#descripcion").val();
    if (descripcion==""){
      alert("Falta especificar una descripcion");
      return;
    }
    axios.post('/tramites/'  , {
                                _token:  '{{ csrf_token() }}',
                                fecha: $("#fecha").val(),
                                descripcion: $("#descripcion").val(),
                              })
    .then(function (response) {
      linea  ='<tr id="' + response.data.id + '"  >';
      linea +='<td class="editable editablef">' + response.data.fecha + '</td>';
      linea +='<td class="editable editabled">' + response.data.descripcion + '</td>';
      linea +='<td>';
      linea +='<a href="/subtramites/' + response.data.id + '" class="btn btn-primary">Subtramites</a> ';
      linea +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';
      linea +='<button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-tramite-id="' + response.data.id + '" data-tramite-nombre="' + response.data.descripcion + '">Beneficiarios</button>';
      linea +='</td>';

      linea +='</tr>';
      $('#lista_tramites  > tbody').append(linea);
//            $('#lista_estudiantes > tbody > tr#' + id ).remove();
      console.log(response);
     })
    .catch(function (error) {
        if(error.response.status==401)alert("Usted no ha iniciado en el sistema");
        if(error.response.status==409)alert(error.response.data.error);
        if(error.response.status==500)alert("Error 500 en el sistema");
        else alert(error.message);
        console.log(error);
    });   
  });

  $('#tbl-beneficiarios tbody').on("click", ".conceder" , function(){
    axios.put('/tramites/beneficiarios'  , {
                                _token:  '{{ csrf_token() }}',
                                concesionado_id: $("#tramite_id").val(),
                                user_id: this.id,
                              })
    .then(function (response) {
      console.log(response);
     })
    .catch(function (error) {
      if(error.response.status==401){alert("Usted no ha iniciado en el sistema");return;}
      if(error.response.status==404){alert(error.response.data.error);return;}
      if(error.response.status==409){alert(error.response.data.error);return;}
      if(error.response.status==500){alert("Error 500 en el sistema");return;}
      alert(error.message);
        console.log(error);
    });
  });

  
  $("#lista_tramites tbody").on("click", ".btn_eliminar_tramite" , function(){
    id = this.parentElement.parentElement.id;
    axios.delete('/tramites/' + id , {
                                      params: {
                                        _token:  '{{ csrf_token() }}'
                                      }
                                      })
    .then(function (response) {
        $('#lista_tramites > tbody > tr#' + response.data.id ).remove();
        console.log(response);
    })
    .catch(function (error) {
        if(error.response.status==401)alert("Usted no ha iniciado en el sistema");
        if(error.response.status==409)alert(error.response.data.error);
        if(error.response.status==500)alert("Error 500 en el sistema");
        else alert(error.message);
        console.log(error);
    })   
  });

    $("#lista_tramites tbody").on("dblclick", ".editablef" , function() {
        if(mostrando_input) return;
        id = this.parentElement.parentElement.id;        
        var valor  = this.innerText;
        var s = '<input class="form-control"  type="date" name="_fecha" id="_fecha"  value="' + valor + '">';        
        $(this).html(s);
        mostrando_input = true;
     });
     $("#lista_tramites tbody").on("dblclick", ".editabled" , function() {
        if(mostrando_input) return;
        id = this.parentElement.parentElement.id;        
        var valor  = this.innerText;
        var s = '<input class="form-control"  type="text" name="_descripcion" id="_descripcion"  value="' + valor + '">';        
        $(this).html(s);
        mostrando_input = true;
     });

    $("#lista_tramites tbody").on("keydown", ".editable" , function(event) {
      try{
        console.log('presiono: ', event.which);
    		if ( event.which == 13 || event.which == 9 ) {
          //13 es enter o 9 es tabulación
          event.preventDefault();

          const params = new URLSearchParams();
          params.append('_token', '{{ csrf_token() }}');

          if( $("#_fecha").length ){
            params.append('fecha', $("#_fecha").val());
          }else{
            params.append('descripcion', $("#_descripcion").val());
          }

          axios.put('/tramites/beneficiarios' + this.parentElement.id  , params )
          .then(function (response) {
            linea  ='';
            linea +='<td class="editable editablef">' + response.data.fecha + '</td>';
            linea +='<td class="editable editabled">' + response.data.descripcion + '</td>';
            linea +='<td>';
            linea +='<a href="/subtramites/' + response.data.id + '" class="btn btn-primary">Subtramites</a> ';
            linea +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';
            linea +='<button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-tramite-id="' + response.data.id + '" data-tramite-nombre="' + response.data.descripcion + '">Beneficiarios</button>';
            linea +='</td>';
            linea +='';
//            $('#lista_tramites > tbody > tr#' + id ).remove();
            $('#lista_tramites > tbody > tr#' + response.data.id).html(linea);
            console.log(response);
          })
          .catch(function (error) {
              if(error.response.status==401)alert("Usted no ha iniciado en el sistema");
              if(error.response.status==409)alert(error.response.data.error);
              if(error.response.status==500)alert("Error 500 en el sistema");
              else alert(error.message);
              console.log(error);
          });

          mostrando_input = false;
    		}
		    if ( event.which == 27 ) {
          event.preventDefault();
          this.innerText = this.childNodes[0].defaultValue
			    mostrando_input = false;
        }
     }catch{}

    });
});
</script>
@endsection