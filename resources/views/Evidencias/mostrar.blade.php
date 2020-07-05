@extends('layouts.app')
@section('content')

<table class="table" border="1" id="lista_tramites">  
  <thead>
      
      <tr style="text-align: center;">
        <th colspan="3">Evidencias: {{$tramite->descripcion}}>{{$subtramite->descripcion}}</th>
      </tr>    
      <tr>                
        <th>Documento</th>
        <th>Descripcion</th>
        <th>Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($subtramite->evidencias as $evidencia)
    <tr id="{{$evidencia->id}}">
      <td>
        {{$evidencia->documento}}
      </td>   
      <td class="editable editabled">
        {{$evidencia->descripcion}}
      </td>
      <td>
        <button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> 
      </td>  
    </tr> 

    @endforeach
    </tbody>
  </table> 
  <!-- Large modal -->
  <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg" id="matricular">SUBIR EVIDENCIA</button>
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">LISTA DE ESTUDIANTES</h5>
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
                    <input class="form-control btn btn-primary" type="button" value="Agregar" id="btn_agregar_tramite">
                  </div>
                </div>
                <input type="submit" value="enviar">
              <!-- </form> -->
            </div><!-- modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            </div>
          </div><!-- modal-content -->
        </div><!-- modal-dialog -->
      </div><!-- modal fade -->

@endsection
@section('code')
<script>
var mostrando_input = false;
$().ready(function(){
    $("#btn_agregar_tramite").click(function(event){
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


        axios.post('/s_evidencias'  ,   formData,   { headers: {  'Content-Type': 'multipart/form-data' }  } )
          .then(function (response) {
            linea  ='<tr id="' + response.data.id + '"  >';
            linea +='<td>' + response.data.documento + '</td>';
            linea +='<td class="editable editabled">' + response.data.descripcion + '</td>';
            linea +='<td>';
            linea +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';
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
          })   
    });
    $("#lista_tramites tbody").on("click", ".btn_eliminar_tramite" , function(){
        id = this.parentElement.parentElement.id;
        axios.delete('/evidencias/' + id , {
                                          params: {
                                            _token:  '{{ csrf_token() }}'
                                          }
                                          })
        .then(function (response) {

            $('#lista_tramites > tbody > tr#' + response.data.id ).remove();
            console.log(response);

          })
        .catch(function (error) {
            if(error.response.status==401){alert("Usted no ha iniciado en el sistema");return;}
            if(error.response.status==404){alert(error.response.data.error);return;}
            if(error.response.status==409){alert(error.response.data.error);return;}
            if(error.response.status==500){alert("Error 500 en el sistema");return;}
            alert(error.message);
            console.log(error);
        })   
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
          params.append('descripcion', $("#_descripcion").val());
//          $('#lista_tramites > tbody > tr#' + this.parentElement.id ).remove();

          axios.put('/evidencias/' + this.parentElement.id  , params )
          .then(function (response) {
            linea  ='';
            linea +='<td>' + response.data.documento + '</td>';
            linea +='<td class="editable editabled">' + response.data.descripcion + '</td>';
            linea +='<td>';
            linea +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';
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