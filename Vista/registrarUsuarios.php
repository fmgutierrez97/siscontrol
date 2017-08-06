<div id="modalRegistrarUsuario" class="" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Insertar usuario</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo URL_BASE . 'usuarios/insertarUsuario'; ?>">
                    <div class="form-group">
                        <label for="cmbIdentificacionEmpleado">Identifiación Empleado</label>
                        <select class="form-control" name="cmbIdentificacionEmpleado" id="cmbIdentificacionEmpleado" required>
                            <option value="">Seleccione empleado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txfContrasenia">Contraseña</label>
                        <input type="password" id="txfContrasenia" name="txfContrasenia" class="form-control" placeholder="Contraseña: " maxlength="16" required>
                    </div>
                    <div class="form-group">
                        <label for="txfContraseniaConf">Contraseña</label>
                        <input type="password" id="txfContraseniaConf" name="txfContraseniaConf" class="form-control" placeholder="Contraseña: " maxlength="16" required>
                        <span id="errorPasswors" hidden style="color: red"></span>
                    </div>
                    <div class="form-group">
                        <label for="cmbRol">Roles</label>
                        <select class="form-control" name="cmbRol" id="cmbRol" required>
                            <option value="">Seleccione Rol</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cmbEstadoUsuario">Estado</label>
                        <select class="form-control" name="cmbEstadoUsuario" id="cmbEstadoUsuario">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                    <button disabled type="submit" class="btn btn-primary" name="btnRegistrarUsuario" id="btnRegistrarUsuario"> Enviar </button>
                </form>
            </div>
        </div>
    </div>
</div>