@extends('layouts.public')
@section('content')
<!-- Large modal -->
{{--@can('agregar')--}
{{--@can('agregar', $tramites)--}}
{{--@can('agregar', App\Models\Tramite::class)--}}

<table class="table" border="1" id="lista_tramites">  
  <thead>
    <tr style="text-align: center;">
      <th colspan="4">{{$padre->descripcion}}</th>
    </tr>    
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
            @if ($tramite->publico())
              <button type="button" class="btn btn-warning privatizar" id="{{$tramite->id}}">Privatizar</button>
            @else
              <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Permisos
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" data-tramite-id="{{$tramite->id}}" data-tramite-nombre="{{$tramite->descripcion}}">Beneficiarios</a>
                  <a class="dropdown-item publicar" id="{{$tramite->id}}" href="#">Tramite Público</a>
                </div>
              </div>
            @endif
          @endcan
        </td>
        @endcan
  

      </tr> 
    @endforeach
  </tbody>
</table>
  {{--$tramites->links()--}}
  @can('create', App\Models\Tramite::class)
  <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg">AGREGAR SUB TRAMITE</button>
  @endcan
  
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">SUB TRAMITES</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="origen" id="origen" value="{{$padre->id}}">

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
    $('#titulo_del_tramite').text( 'Beneficiarios del subtramite:  ' +  nombret)
    $('#tramite_id').val(recipient)
  });

  $("#btnbuscar").click(function(event){
    $('#btnbuscar').attr("disabled", true);
    axios.post('/subtramites/beneficiarios'  , {
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
        linea +='<td><input class="conceder" type="checkbox" ' + response.data[i].checked + ' id="' + response.data[i].id + '" data-concesionario-type="' + response.data[i].concesionario_type + '"></td>';
        linea +='<td>' + response.data[i].nombre + '</td>';
        linea +='</tr>';
        $('#tbl-beneficiarios  > tbody').append(linea);
      }
      console.log(response);
     })
    .catch(function (error) {
      alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
      console.log(error);
      console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
    })
    .then(function () {
      $('#btnbuscar').attr("disabled", false);
    });
    
  });


  $("#btn_agregar_tramite").click(function(event){
        descripcion = $("#descripcion").val();
        if (descripcion==""){
          alert("Falta especificar una descripcion");
          return;
        }
        

          axios.post('/subtramites'  , {
                                      _token:  '{{ csrf_token() }}',
                                      fecha: $("#fecha").val(),
                                      descripcion: $("#descripcion").val(),
                                      origen: $("#origen").val(),
                                    })
          .then(function (response) {
            linea  ='<tr id="' + response.data.id + '"  >';
            linea +='<td class="editable editablef">' + response.data.fecha + '</td>';
            linea +='<td class="editable editabled"><a href="/evidencias/' + response.data.id + '">' + response.data.descripcion + '</a></td>';
            linea +='<td></td>';
            linea +='<td class="opciones">';
            linea +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';

            linea +='<div class="btn-group">';
            linea +='  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Permisos</button>';
            linea +='<div class="dropdown-menu">';
            linea +='<a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" data-tramite-id="' + response.data.id + '" data-tramite-nombre="' + response.data.descripcion + '">Beneficiarios</a>';
            linea +='<a class="dropdown-item publicar" id="' + response.data.id + '" href="#">Tramite Público</a>';
            linea +='</div>';
            linea +='</div>';

            linea +='</td>';
            linea +='</tr>';
            $('#lista_tramites  > tbody').append(linea);
  //            $('#lista_estudiantes > tbody > tr#' + id ).remove();
            console.log(response);
          })
          .catch(function (error) {
            alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
            console.log(error);
            console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
          })   
    });

    
    $('#lista_tramites tbody').on("click", ".privatizar" , function(event){

      event.preventDefault();
      axios.put('/subtramites/privatizar'  , {
                                _token:  '{{ csrf_token() }}',
                                concesionado_id: this.id,
                              })
    .then(function (response) {
      linea ='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';
      linea +='<div class="btn-group">';
      linea +='  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Permisos</button>';
      linea +='<div class="dropdown-menu">';
      linea +='<a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" data-tramite-id="' + response.data.concesionado_id + '" data-tramite-nombre="' + response.data.descripcion + '">Beneficiarios</a>';
      linea +='<a class="dropdown-item publicar" id="' + response.data.concesionado_id + '" href="#">Tramite Público</a>';
      linea +='</div>';
      linea +='</div>';


      lopciones = $('#lista_tramites > tbody > tr#' + response.data.concesionado_id + ' > td.opciones');
      $('#lista_tramites > tbody > tr#' + response.data.concesionado_id + ' > td.opciones').html(linea);
      console.log(response);
    })
    .catch(function (error) {
      alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
      console.log(error);
      console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
    });
      alert('Este tramite se ha echo privado, especifique los beneficiarios.');
    });

    $('#lista_tramites tbody').on("click", ".publicar" , function(event){
      event.preventDefault();
      axios.put('/subtramites/publicar'  , {
                                _token:  '{{ csrf_token() }}',
                                concesionado_id: this.id,
                              })
    .then(function (response) {
      btns ='<a href="/evidencias/' + response.data.concesionado_id + '" class="btn btn-primary">Evidencias</a> ';
      btns +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';
      btns +='<button type="button" class="btn btn-warning privatizar" id="' + response.data.concesionado_id + '">Privatizar</button>';
      lopciones = $('#lista_tramites > tbody > tr#' + response.data.concesionado_id + ' > td.opciones');
      $('#lista_tramites > tbody > tr#' + response.data.concesionado_id + ' > td.opciones').html(btns);
      console.log(response);
     })
    .catch(function (error) {
      alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
      console.log(error);
      console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
    });
      alert('Este tramite se ha echo público');
    });
    
    $('#tbl-beneficiarios tbody').on("click", ".conceder" , function(){
      var triggered = $(this) // Button that triggered the modal
      var tipo  = triggered.data('concesionario-type') // Extract info from data-* attributes
      axios.put('/subtramites/beneficiarios'  , {
                                  _token:  '{{ csrf_token() }}',
                                  concesionado_id: $("#tramite_id").val(),
                                  concesionario_type: tipo,
                                  user_id: this.id,
                                })
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
        console.log(error);
        console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
      }
    );
  });

    $("#lista_tramites tbody").on("click", ".btn_eliminar_tramite" , function(){
        id = this.parentElement.parentElement.id;
        axios.delete('/subtramites/' + id , {
                                          params: {
                                            _token:  '{{ csrf_token() }}'
                                          }
                                          })
        .then(function (response) {
            $('#lista_tramites > tbody > tr#' + response.data.id ).remove();
            console.log(response);
        })
        .catch(function (error) {
          alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
          console.log(error);
          console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
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

          axios.put('/subtramites/' + this.parentElement.id  , params )
          .then(function (response) {
            $('#lista_tramites > tbody > tr#' + response.data.id + ' > td.editablef').text(response.data.fecha);
            $('#lista_tramites > tbody > tr#' + response.data.id + ' > td.editabled').text('<a href="/evidencias/' + response.data.id + '">' + response.data.descripcion + '</a>');
            console.log(response);
          })
          .catch(function (error) {
            alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
            console.log(error);
            console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
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