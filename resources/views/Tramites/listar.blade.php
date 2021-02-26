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
      <tr style="text-align: center;">
        <th colspan="3">Trámites</th>
      </tr>    
      <tr>                
        <th>Fecha</th>               
        <th>Descripcion</th>  
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
          <a href="/subtramites/{{$tramite->id}}">
            {{$tramite->descripcion}}
          </a> 
        </td>

        @can('delete', $tramite)
        <td>          
          <button class="btn btn-danger btn_eliminar_tramite">Eliminar</button>            
        </td>
        @endcan
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
    axios.post('/tramites'  , {
                                _token:  '{{ csrf_token() }}',
                                fecha: $("#fecha").val(),
                                descripcion: $("#descripcion").val(),
                              })
    .then(function (response) {
      linea  ='<tr id="' + response.data.id + '"  >';
      linea +='<td class="editable editablef">' + response.data.fecha + '</td>';
      linea +='<td class="editable editabled"><a href="/subtramites/' + response.data.id + '">' + response.data.descripcion + '</a></td>';
      linea +='<td>';
      linea +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';
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

          axios.put('/tramites/' + this.parentElement.id  , params )
          .then(function (response) {
            $('#lista_tramites > tbody > tr#' + response.data.id + ' > td.editablef').text(response.data.fecha);
            $('#lista_tramites > tbody > tr#' + response.data.id + ' > td.editabled').html('<a href="/subtramites/' + response.data.id + '">' + response.data.descripcion + '</a>');
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