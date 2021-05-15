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
                Documento: <input class="form-control"  type="file" name="documento" id="documento" accept="application/pdf,image/tiff,image/webp,image/gif,image/jpeg" >
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