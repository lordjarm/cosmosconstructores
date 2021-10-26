<div class="modal fade" id="proyectomodal">
    <div class="modal-dialog table-dark">
        <div class="modal-content">
            <div class="modal-header table-dark">
                 <h1 class="modal-title ">Apartar Apto </h1>
                 <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
            </div>
            <div class="modal-body table-dark">
                <h4>Datos Cliente</h4>
                <div class="panel-body table-dark">
                    <form method="POST" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="label">Nombre del Cliente</label>
                            <input required autocomplete="off" name="nombre" class="form-control"
                                   type="text" placeholder="Nombre del Cliente">
                        </div>
                        <div class="form-group">
                            <label class="label">Cedula del Cliente</label>
                            <input required autocomplete="off" name="cedula" class="form-control"
                                   type="number" placeholder="Cedula del cliente">
                        </div>
                         <div class="form-group">
                            <label class="label">Celular del Cliente</label>
                            <input required autocomplete="off" name="celular" class="form-control"
                                   type="text" placeholder="Celular del Cliente">
                        </div>
                         <div class="form-group">
                            <label class="label">Direccion del Cliente</label>
                            <input required autocomplete="off" name="direccion" class="form-control"
                                   type="text" placeholder="Direccion del Cliente">
                        </div>
                        
                       
                        <button class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>