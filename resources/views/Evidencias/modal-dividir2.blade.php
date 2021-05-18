<!-- modal de dividir y asignar DIVIDIR Y ASIGNAR EVIDENCIA -->
<div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">DIVIDIR Y ASIGNAR EVIDENCIA dispareja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <!-- 
                <form id="formulario" action="/s_evidencias" method="POST" enctype="multipart/form-data" >  
                -->
            <span id="prima" class="visible">
            <input type="hidden" name="origen" id="origen" value="{{$subtramite->id}}">
            <div class="row">
                <div class="form-group col-12">
                Documento: <input class="form-control"  type="file" name="documento3" id="documento3" accept="application/pdf,image/tiff,image/webp,image/gif,image/jpeg">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                Descripcion: <input class="form-control"  type="text" name="descripcion3" id="descripcion3" placeholder="Escriba una descripcción">
                </div>
            </div>
            <div class="row">
                <div class="col">
                Tiene oficio de presentación <input type="checkbox" id="tiene3" checked>
                </div>
                <div class="col" id="cuantas_ofi">
                Cuantas páginas: <input type="number" min="1"  id="cuantas_oficio3" value="1">
                </div>                  
            </div>
            <div class="row">
                <div class="col">
                Como se dividira:
                </div>
                <div class="col">
                <input type="text" id="rangos" value="1" placeholder="rangos separados por ;"  minlength="1"  />
                {{-- required pattern="[0-9;?]+" --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                <input class="form-control btn btn-primary" type="button" value="Procesar" id="btn_agregar_evidencia3">
                </div>
            </div>
            </span>
        </div><!-- modal-body -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal fade -->
