$('#modal-beneficiarios-tramite').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('tramite-id') // Extract info from data-* attributes
  var nombret = button.data('tramite-nombre') // Extract info from data-* attributes
  $('#titulo_del_tramite').text( 'Beneficiarios del subtramite:  ' +  nombret)
  $('#tramite_id').val(recipient)
});


    $('#lista_tramites tbody').on("click", ".publicar" , function(event){
        event.preventDefault();
        axios.put('/tramites/publicar'  , {
                                  _token:  '{{ csrf_token() }}',
                                  concesionado_id: this.id,
                                })
      .then(function (response) {

/*
        btns ='<a href="/evidencias/' + response.data.concesionado_id + '" class="btn btn-primary">Evidencias</a> ';
        btns +='<button class="btn btn-danger btn_eliminar_tramite">Eliminar</button> ';
        btns +='<button type="button" class="btn btn-warning privatizar" id="' + response.data.concesionado_id + '">Privatizar</button>';
        lopciones = $('#lista_tramites > tbody > tr#' + response.data.concesionado_id + ' > td.opciones');

        $('#lista_tramites > tbody > tr#' + response.data.concesionado_id + ' > td.opciones').html(btns);
*/
//        alert('Este tramite se ha echo público');
        let tr = $('#lista_tramites > tbody > tr#' + response.data.concesionado_id)[0];
        tr.children[2].innerText = "Marcado como público.";
        
        console.log(response);
       })
      .catch(function (error) {
        alert(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
        console.log(error);
        console.log(error.message + '\n' + error.response.data.message + '\n' +  error.response.data.error);
      });
      });
      
  
    //buscar los beneficiarios del tramite
    $("#btnbuscar-beneficiarios-tramite").click(function(event){
      $('#btnbuscar-beneficiarios-tramite').attr("disabled", true);
      axios.post('/tramites/beneficiarios'  , {
                                  _token:  '{{ csrf_token() }}',
                                  tramite_id: $("#tramite_id").val(),
                                  nombre: $("#_tnombre").val(),
                                  paterno: $("#_tpaterno").val(),
                                  materno: $("#_tmaterno").val(),
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
        $('#btnbuscar-beneficiarios-tramite').attr("disabled", false);
      });
      
    });

    
    $('#tbl-beneficiarios tbody').on("click", ".conceder" , function(){
      console.log('en conceder');
      var triggered = $(this) // Button that triggered the modal
      var tipo  = triggered.data('concesionario-type') // Extract info from data-* attributes
      axios.put('/tramites/beneficiarios'  , {
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
