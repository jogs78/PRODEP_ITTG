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
          <button class="btn btn-danger btn_eliminar_tramite">Eliminar</button>
          <button class="btn btn-warning btn_beneficiarios_tramite">Beneficiarios</button>
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
      </div>
  </div>
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
            linea +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button>';
            linea +='<button class="btn btn-warning btn_beneficiarios_tramite">Beneficiarios</button>';
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

          axios.put('/tramites/' + this.parentElement.id  , params )
          .then(function (response) {
            linea  ='';
            linea +='<td class="editable editablef">' + response.data.fecha + '</td>';
            linea +='<td class="editable editabled">' + response.data.descripcion + '</td>';
            linea +='<td>';
            linea +='<a href="/subtramites/' + response.data.id + '" class="btn btn-primary">Subtramites</a> ';
            linea +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button>';
            linea +='<button class="btn btn-warning btn_beneficiarios_tramite">Beneficiarios</button>';            
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