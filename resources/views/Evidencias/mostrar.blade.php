@extends('layouts.app')
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
    </div>
  @endcan

  <!-- SUBIR EVIDENCIA -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">SUBIR EVIDENCIA</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                 <!-- 
                  <form id="formulario" action="/s_evidencias" method="POST" enctype="multipart/form-data" >  
                 -->
              <input type="hidden" name="origen" id="origen" value="{{$subtramite->id}}">
              <div class="row">
                <div class="form-group col-12">
                  Documento: <input class="form-control"  type="file" name="documento" id="documento">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-12">
                  Descripcion: <input class="form-control"  type="text" name="descripcion" id="descripcion" placeholder="Escriba una descripcción">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-12">
                  <input class="form-control btn btn-primary" type="button" value="Agregar" id="btn_agregar_evidencia">
                </div>
              </div>
              <!--<input type="submit" value="enviar">
              </form> -->
            </div><!-- modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            </div>
          </div><!-- modal-content -->
        </div><!-- modal-dialog -->
      </div><!-- modal fade -->

  <!-- DIVIDIR Y ASIGNAR EVIDENCIA -->
  <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">DIVIDIR Y ASIGNAR EVIDENCIA</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <!-- 
                  <form id="formulario" action="/s_evidencias" method="POST" enctype="multipart/form-data" >  
                 -->
              <span id="prima" class="visible">
                <input type="hidden" name="origen" id="origen" value="{{$subtramite->id}}">
                <div class="row">
                  <div class="form-group col-12">
                    Documento: <input class="form-control"  type="file" name="documento2" id="documento2">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    Descripcion: <input class="form-control"  type="text" name="descripcion2" id="descripcion2" placeholder="Escriba una descripcción">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    Tiene oficio de presentación <input type="checkbox" id="tiene" checked>
                  </div>
                  <div class="col" id="cuantas_ofi">
                    Cuantas páginas: <input type="number" min="1"  id="cuantas_oficio" value="1">
                  </div>                  
                </div>
                <div class="row">
                  <div class="col">
                    Cuantos destinatarios: <input type="number" min="1" id="destinatarios" value="{{count( $subtramite->permitidos() )}}">
                  </div>
                  <div class="col">
                    Paginas por cada uno: <input type="number" min="1"  id="cuantas_cada" value="1">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <input class="form-control btn btn-primary" type="button" value="Procesar" id="btn_agregar_evidencia2">
                  </div>
                </div>
              </span>
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
        <h5 class="modal-title" id="titulo_de_la_evidencia">Beneficiarios del tramite</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="evidencia_id" name="evidencia_id">
        <input type="hidden" id="subtramite_id" name="subtramite_id">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal fade -->
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
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('evidencia-id') // Extract info from data-* attributes
    var subtramite = button.data('subtramite-id') // Extract info from data-* attributes
    var nombret = button.data('evidencia-nombre') // Extract info from data-* attributes
    $('#titulo_de_la_evidencia').text( 'Beneficiarios con acceso a la evidencia:  ' +  nombret)
    $('#evidencia_id').val(recipient)
    $('#subtramite_id').val(subtramite)
    
  });
  
  $("#tiene").click(function(event){

    if( ! $('#tiene').prop('checked') ) 
      $('#cuantas_ofi').addClass("invisible")
    else
      $('#cuantas_ofi').removeClass("invisible")

   });  
  $("#btnbuscar").click(function(event){
    $('#btnbuscar').attr("disabled", true);
    axios.post('/evidencias/beneficiarios'  , {
                                _token:  '{{ csrf_token() }}',
                                evidencia_id: $("#evidencia_id").val(),
                                subtramite_id: $("#subtramite_id").val(),
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

  $("#btn_agregar_evidencia").click(function(event){
        descripcion = $("#descripcion").val();
        if (descripcion==""){
          alert("Falta especificar una descripcion");
          return;
        }

        const formData = new FormData();
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('tramite_id', {{$subtramite->id}});
        formData.append('descripcion', $("#descripcion").val());
        var files = $('#documento')[0].files[0];
        formData.append('documento',files);
        $("#btn_agregar_evidencia").attr("disabled", true);

        axios.post('/s_evidencias'  ,   formData,   { headers: {  'Content-Type': 'multipart/form-data' }  } )
          .then(function (response) {
            linea  ='<tr id="' + response.data.id + '"  >';
            linea +='<td><a href="/ver/' + response.data.id + '" target="_blank" rel="noopener noreferrer">' +  response.data.documento + '</a></td>';
            linea +='<td class="editable editabled">' + response.data.descripcion + '</td>';
            linea +='<td>';
            linea +='<button class="btn btn-danger btn_eliminar_evidencia">Eliminar</button> ';
            if(!tramite_publico) linea +='<button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-evidencia-id="' + response.data.id + '" data-evidencia-nombre="' + response.data.descripcion + '">Beneficiarios</button>';
            linea +='</td>';
            linea +='</tr>';
            $('#lista_evidencias  > tbody').append(linea);
  //            $('#lista_estudiantes > tbody > tr#' + id  ).remove();
            console.log(response);
          })
          .catch(function (error) {
            alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
            console.log(error);
            console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
          })
          .then(function () {
            $('#btn_agregar_evidencia').attr("disabled", false);
          });  
    });

    $("#btn_agregar_evidencia2").click(function(event){
        descripcion = $("#descripcion2").val();
        if (descripcion==""){
          alert("Falta especificar una descripcion");
          return;
        }

        const formData = new FormData();
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('tramite_id', {{$subtramite->id}});
        formData.append('descripcion', $("#descripcion2").val());
        var files = $('#documento2')[0].files[0];
        formData.append('documento',files);

        formData.append('tiene_oficio',$('#tiene').prop('checked'));
        formData.append('cuantas_el_o',$("#cuantas_oficio").val());
        formData.append('cuantos_dest',$("#destinatarios").val());
        formData.append('cuantas_cada',$("#cuantas_cada").val());

        $("#btn_agregar_evidencia2").attr("disabled", true);

        axios.post('/s_evidencias2'  ,   formData,   { headers: {  'Content-Type': 'multipart/form-data' }  } )
          .then(function (response) {
            $('#lista_evidencias  > tbody').html('');
            for (let i = 0; i < response.data.length; i++) {
              linea  ='<tr id="' + response.data[i].id + '"  >';  
              linea +='<td><a href="/ver/' + response.data[i].id + '" target="_blank" rel="noopener noreferrer">' + response.data[i].documento + '</a></td>';
              linea +='<td class="editable editabled">' + response.data[i].descripcion + '</td>';
              linea +='<td>';
              linea +='<button class="btn btn-danger btn_eliminar_evidencia">Eliminar</button> ';
              if(!tramite_publico) linea +='<button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-evidencia-id="' + response.data.id + '" data-evidencia-nombre="' + response.data.descripcion + '">Beneficiarios</button>';

              linea +='</td>';
              linea +='</tr>';
              $('#lista_evidencias  > tbody').append(linea);
              //            $('#lista_estudiantes > tbody > tr#' + id ).remove();

              
            }
//            $('.bd-example-modal-lg2').hide();
            console.log(response);
          })
          .catch(function (error) {
            alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
            console.log(error);
            console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
          })
          .then(function () {
            $('#btn_agregar_evidencia2').attr("disabled", false);
          });  
 
    });


    $('#tbl-beneficiarios tbody').on("click", ".conceder" , function(){
      var triggered = $(this) // Button that triggered the modal
      var tipo  = triggered.data('concesionario-type') // Extract info from data-* attributes
      axios.put('/evidencias/beneficiarios'  , {
                                  _token:  '{{ csrf_token() }}',
                                  concesionado_id: $("#evidencia_id").val(),
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



    $("#lista_evidencias tbody").on("click", ".btn_eliminar_evidencia" , function(){
        id = this.parentElement.parentElement.id;
        axios.delete('/evidencias/' + id , {
                                          params: {
                                            _token:  '{{ csrf_token() }}'
                                          }
                                          })
        .then(function (response) {

            $('#lista_evidencias > tbody > tr#' + response.data.id ).remove();
            console.log(response);

          })
        .catch(function (error) {
          alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
          console.log(error);
          console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
        })   
    });

    $("#lista_evidencias tbody").on("dblclick", ".editabled" , function() {
        if(mostrando_input) return;
        id = this.parentElement.parentElement.id;        
        var valor  = this.innerText;
        var s = '<input class="form-control"  type="text" name="_descripcion" id="_descripcion"  value="' + valor + '">';        
        $(this).html(s);
        mostrando_input = true;
     });

    $("#lista_evidencias tbody").on("keydown", ".editable" , function(event) {
      try{
        console.log('presiono: ', event.which);
    		if ( event.which == 13 || event.which == 9 ) {
          //13 es enter o 9 es tabulación
          event.preventDefault();

          const params = new URLSearchParams();
          params.append('_token', '{{ csrf_token() }}');
          params.append('descripcion', $("#_descripcion").val());
//          $('#lista_evidencias > tbody > tr#' + this.parentElement.id ).remove();

          axios.put('/evidencias/' + this.parentElement.id  , params )
          .then(function (response) {
/*             linea  ='';
            linea +='<td><a href="/ver/' + response.data.id + '" target="_blank" rel="noopener noreferrer">' +  response.data.documento + '</a></td>';            linea +='<td><a href="/ver/' + response.data.id + '" target="_blank" rel="noopener noreferrer">' +  response.data.documento + '</a></td>';
            linea +='<td>';
            linea +='<button class="btn btn-danger btn_eliminar_evidencia">Eliminar</button> ';
            linea +='<button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-evidencia-id="' + response.data.id + '" data-evidencia-nombre="' + response.data.descripcion + '">Beneficiarios</button>';
            linea +='</td>';
            linea +='';
 *///            $('#lista_evidencias > tbody > tr#' + id ).remove();
            $('#lista_evidencias > tbody > tr#' + response.data.id + '> td.editable' ).html(response.data.descripcion);
            console.log(response);
          })
          .catch(function (error) {
  			    mostrando_input = false;
            this.innerText = this.childNodes[0].defaultValue
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