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

            
        $("#btn_agregar_evidencia3").click(function(event){
            descripcion = $("#descripcion3").val();
            if (descripcion==""){
              alert("Falta especificar una descripcion");
              return;
            }
    
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('tramite_id', {{$subtramite->id}});
            formData.append('descripcion', $("#descripcion3").val());
            var files = $('#documento3')[0].files[0];
            formData.append('documento',files);
    
            formData.append('tiene_oficio',$('#tiene3').prop('checked'));
            formData.append('cuantas_el_o',$("#cuantas_oficio3").val());
            formData.append('rangos',$("#rangos").val());
    
            $("#btn_agregar_evidencia3").attr("disabled", true);
    
            axios.post('/s_evidencias3'  ,   formData,   { headers: {  'Content-Type': 'multipart/form-data' }  } )
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
                $('#btn_agregar_evidencia3').attr("disabled", false);
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