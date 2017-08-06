<div id="modalRegistrarContratista" class="" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Insertar contratista</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo URL_BASE . 'usuarios/insertarUsuario'; ?>">
                    <div class="form-group">
                        <label for="txfNitContratista">Nit Contratista</label>
                        <input type="number" id="txfNitContratista" name="txfContrasenia" class="form-control" placeholder="Nit Contratista: " maxlength="16" required>
                    </div>
                    <div class="form-group">
                        <label for="txfNombreContratista">Nombre Contratista</label>
                        <input type="text" id="txfNombreContratista" name="txfNombreContratista" class="form-control" placeholder="Nombre Contratista" required="">
                    </div>
                    <div class="form-group">
                        <label for="txfDescripcion">Descripcion</label>
                        <textarea class="form-control" rows="3" maxlength="300" id="txfDescripcion" name="txfDescripcion" required="">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="cmbEstadoContratista">Estado</label>
                        <select class="form-control" name="cmbEstadoContratista" id="cmbEstadoContratista">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                    <button disabled type="submit" class="btn btn-primary" name="btnRegistrarContratista" id="btnRegistrarContatista"> Enviar </button>
                </form>
            </div>
        </div>
    </div>
</div>