<!-- modal de beneficiarios-->
<div class="modal fade" id="modal-beneficiarios-tramite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo_del_tramite">Beneficiarios del tramite</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="tramite_id" name="tramite_id">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="_tnombre" placeholder="Nombre">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="_tpaterno" placeholder="Paterno">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="_tmaterno" placeholder="Materno">
          </div>
          <div class="col">
            <input class="form-control btn btn-primary" id="btnbuscar-beneficiarios-tramite" type="button" value="Filtrar...">
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
