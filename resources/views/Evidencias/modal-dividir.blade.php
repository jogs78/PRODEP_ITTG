<!-- modal de dividir y asignar DIVIDIR Y ASIGNAR EVIDENCIA -->
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">DIVIDIR Y ASIGNAR EVIDENCIA</h5>
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
                Documento: <input class="form-control"  type="file" name="documento2" id="documento2" accept="application/pdf,image/tiff,image/webp,image/gif,image/jpeg">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                Descripcion: <input class="form-control"  type="text" name="descripcion2" id="descripcion2" placeholder="Escriba una descripcción">
                </div>
            </div>
            <div class="row">
                <div class="col">
                Tiene oficio de presentación <input type="checkbox" id="tiene" checked>
                </div>
                <div class="col" id="cuantas_ofi">
                Cuantas páginas: <input type="number" min="1"  id="cuantas_oficio" value="1">
                </div>                  
            </div>
            <div class="row">
                <div class="col">
                Cuantos destinatarios: <input type="number" min="1" id="destinatarios" value="{{count( $subtramite->permitidos() )}}">
                </div>
                <div class="col">
                Paginas por cada uno: <input type="number" min="1"  id="cuantas_cada" value="1">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                <input class="form-control btn btn-primary" type="button" value="Procesar" id="btn_agregar_evidencia2">
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
