

<div class="modal fade" id="bd-example-modal-lg-tramite" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
              <h5 class="modal-title" id="titulo_del_tramite">AGREGAR TRAMITE</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="tramite_id" name="tramite_id">

          <div class="row">
            <div class="form-group col-12">
              Fecha: <input class="form-control"  type="date" name="fecha" id="fecha" value="{{date("Y-m-d")}}">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              Descripcion: <input class="form-control"  type="text" name="descripcion" id="descripciont" placeholder="Escriba una descripcción">
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
  