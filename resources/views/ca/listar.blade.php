@extends('layouts.public')
@section('content')
<br>
<table class="table" border="1" id="lista_cuerpos">  
    <thead>
      <tr style="text-align: center;">
        <th colspan="3">Trámites</th>
      </tr>    
      <tr>                
        <th>Clave</th>               
        <th>Nombre</th>               
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cas as $ca)
      <tr id="{{$ca->id}}">
        <td class="editable editablec">
          {{$ca->clave}}    
        </td>
        <td class="editable editablen">
          {{$ca->nombre}}
        </td>
        <td>
          <a class="btn btn-primary text-white " data-toggle="modal" data-target="#membersModal" data-ca-id="{{$ca->id}}" data-ca-nombre="{{$ca->nombre}}">Miembros</a>
          <button class="btn btn-danger btn_eliminar_cuerpo">Eliminar</button>            
{{--      @can('delete', $ca)
          @endcan
--}}    </td>
      </tr> 
      @endforeach

    </tbody>
  </table> 
  {{--$tramites->links()--}}

  <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg" id="matricular">AGREGAR CA</button>
  <!-- Large modal -->
  {{-- @can('create', App\Models\Tramite::class)
  @endcan --}}
  

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="membersModalLongTitle">AGREGAR CUERPO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="form-group col-12">
            Clave: <input class="form-control"  type="text" name="clave" id="clave" placeholder="Escriba la clave del cuerpo">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-12">
            Nombre: <input class="form-control"  type="text" name="nombre" id="nombre" placeholder="Escriba el nombre del cuerpo">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-12">
            <input class="form-control btn btn-primary" type="button" value="Agregar" id="btn_agregar_cuerpo">
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
<div class="modal fade" id="membersModal" tabindex="-1" role="dialog" aria-labelledby="membersModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nombre_ca">Beneficiarios del tramite</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="ca_id" name="ca_id">
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
  $("#btn_agregar_cuerpo").click(function(event){
    clave = $("#clave").val();
    nombre = $("#nombre").val();
    if (clave==""){
      alert("Falta especificar los datos");
      return;
    }
    if (nombre==""){
      alert("Falta especificar los datos");
      return;
    }
    axios.post('/cuerpos'  , {
                                _token:  '{{ csrf_token() }}',
                                clave: $("#clave").val(),
                                nombre: $("#nombre").val(),
                              })
    .then(function (response) {
      linea  ='<tr id="' + response.data.id + '"  >';
      linea +='<td class="editable editablec">' + response.data.clave + '</td>';
      linea +='<td class="editable editablen">' + response.data.nombre + '</td>';
      linea +='<td>';
      linea +='<a class="btn btn-primary text-white " data-toggle="modal" data-target="#membersModal" data-ca-id="' + response.data.id + '" data-ca-nombre="' + response.data.nombre + '">Miembros</a> ';
      linea +='<button class="btn btn-danger btn_eliminar_cuerpo">Eliminar</button> ';
      linea +='</td>';
      linea +='</tr>';
      $('#lista_cuerpos  > tbody').append(linea);
//            $('#lista_estudiantes > tbody > tr#' + id ).remove();
      console.log(response);
     })
    .catch(function (error) {
      alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
      console.log(error);
      console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
    });   
  });

  $("#lista_cuerpos tbody").on("click", ".btn_eliminar_cuerpo" , function(){
    id = this.parentElement.parentElement.id;
    axios.delete('/cuerpos/' + id , {
                                      params: {
                                        _token:  '{{ csrf_token() }}'
                                      }
                                      })
    .then(function (response) {
        $('#lista_cuerpos > tbody > tr#' + response.data.id ).remove();
        console.log(response);
    })
    .catch(function (error) {
      alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
      console.log(error);
      console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
    })   
  });

  $("#lista_cuerpos tbody").on("dblclick", ".editablec" , function() {
    if(mostrando_input) return;
    id = this.parentElement.parentElement.id;        
    var valor  = this.innerText;
    var s = '<input class="form-control"  type="text" name="_clave" id="_clave"  value="' + valor + '">';        
    $(this).html(s);
    mostrando_input = true;
  });

  $("#lista_cuerpos tbody").on("dblclick", ".editablen" , function() {
    if(mostrando_input) return;
    id = this.parentElement.parentElement.id;        
    var valor  = this.innerText;
    var s = '<input class="form-control"  type="text" name="_nombre" id="_nombre"  value="' + valor + '">';        
    $(this).html(s);
    mostrando_input = true;
  });

  $("#lista_cuerpos tbody").on("keydown", ".editable" , function(event) {
    try{
      console.log('presiono: ', event.which);
      if ( event.which == 13 || event.which == 9 ) {
        //13 es enter o 9 es tabulación
        event.preventDefault();

        const params = new URLSearchParams();
        params.append('_token', '{{ csrf_token() }}');

        if( $("#_clave").length ){
          params.append('clave', $("#_clave").val());
        }else{
          params.append('nombre', $("#_nombre").val());
        }

        axios.put('/cuerpos/' + this.parentElement.id  , params )
        .then(function (response) {
        if( $("#_clave").length ){
            $('#lista_cuerpos > tbody > tr#' + response.data.id + '> td.editablec' ).html(response.data.clave);
        }else{
          $('#lista_cuerpos > tbody > tr#' + response.data.id + '> td.editablen' ).html(response.data.nombre);
        }
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


/////modal miembros
$('#membersModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('ca-id') // Extract info from data-* attributes
    var nombret = button.data('ca-nombre') // Extract info from data-* attributes
    $('#nombre_ca').text( 'Miembros del subtramite:  ' +  nombret)
    $('#ca_id').val(recipient)
  });

$("#btnbuscar").click(function(event){
    $('#btnbuscar').attr("disabled", true);
    axios.post('/cuerpos/miembros'  , {
                                _token:  '{{ csrf_token() }}',
                                ca_id: $("#ca_id").val(),
                                nombre: $("#_nombre").val(),
                                paterno: $("#_paterno").val(),
                                materno: $("#_materno").val(),
                              })
                                                     
    .then(function (response) {
      $('#tbl-beneficiarios tbody').empty();
      for (let i = 0; i < response.data.length; i++) {
        linea  = '<tr>';
        linea +='<td><input class="enrrolar" type="checkbox" ' + response.data[i].checked + ' id="' + response.data[i].id + '"></td>';
        linea +='<td>' + response.data[i].usuario + '</td>';
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

  $('#tbl-beneficiarios tbody').on("click", ".enrrolar" , function(){
    axios.put('/cuerpos/miembros'  , {
                                _token:  '{{ csrf_token() }}',
                                ca_id: $("#ca_id").val(),
                                beneficiario_id: this.id,
                              })
    .then(function (response) {
      console.log(response);
     })
    .catch(function (error) {
      alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
      console.log(error);
      console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
    });
  });


});
</script>
@endsection