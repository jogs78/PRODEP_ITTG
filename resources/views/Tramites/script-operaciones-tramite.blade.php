  $("#btn_agregar_tramite").click(function(event){
    descripcion = $("#descripciont").val();
    if (descripcion==""){
      alert("Falta especificar una descripcion");
      return;
    }
    axios.post('/tramites'  , {
                                _token:  '{{ csrf_token() }}',
                                fecha: $("#fecha").val(),
                                descripcion: $("#descripciont").val(),
                                origen: $("#tramite_id").val()
                              })
    .then(function (response) {
      linea  ='<tr id="' + response.data.id + '"  >';
      linea +='<td class="editable editablef">' + response.data.fecha + '</td>';
      linea +='<td class="editable editabled"><a href="/evidencias/' + response.data.id + '">' + response.data.descripcion + '</a></td>';
      linea +='<td>Marcado como público.</td>';
      linea +='<td class="opciones">';
        linea +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';
        linea +='<div class="btn-group">';
        linea +='  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Permisos</button>';
        linea +='<div class="dropdown-menu">';
        linea +='<a class="dropdown-item" data-toggle="modal" data-target="#modal-beneficiarios-tramite" data-tramite-id="' + response.data.id + '" data-tramite-nombre="' + response.data.descripcion + '">Beneficiarios</a>';
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
            $('#lista_tramites > tbody > tr#' + response.data.id + ' > td.editabled').html('<a href="/evidencias/' + response.data.id + '">' + response.data.descripcion + '</a>');
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