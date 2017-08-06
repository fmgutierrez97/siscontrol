<div class="container-fluid">
	<div id="registrarEmpleado" class="" role="dialog">
    <div class="-content">
        <div class="-header">
            <h4 class="-title">Insertar Empleado</h4>
        </div>
            <div class="body">
                <form method="" action="">
                    <div class="form-group">
                        <label for="txfIdentificacionEmpleado">Numero de identificacion</label>
                        <input type="text" id="txfIdentificacionEmpleado" name="txfIdentificacionEmpleado" class="form-control" placeholder="Numero de Documento" required>
                    </div>
                    <div class="form-group">
                        <label for="cmbTipoDocumento">Tipo Documento</label>
                        <select class="form-control" name="cmbTipoDocumento" id="cmbTipoDocumento" required>
                            <option value="">Tipo Documento</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txfNombresEmpleado">Nombres</label>
                        <input type="text" id="txfNombresEmpleado" name="txfNombresEmpleado" class="form-control" placeholder="Nombres: " required>
                    </div>
                    <div class="form-group">
                        <label for="txfApellidosEmpleado">Apellidos</label>
                        <input type="text" id="txfApellidosEmpleado" name="txfApellidosEmpleado" class="form-control" placeholder="Apellidos: " required>
                    </div>
                    <div class="form-group">
                        <label for="cmbGenero">Genero</label>
                        <select class="form-control" name="cmbGenero" id="cmbGenero" required>
                            <option value="">Seleccione Genero</option>
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txfArl">ARL</label>
                        <input type="text" id="txfArl" name="txfArl" class="form-control" placeholder="ARL" required>
                    </div>
                    <div class="form-group">
                        <label for="txfFechaInicioAfiliacionEmpleado">Fecha inicio afiliacion</label>
                        <input type="text" id="txfFechaInicioAfiliacionEmpleado" name="txfFechaAIniciofiliacionEmpleado" class="form-control" placeholder="Fecha inicio afiliacion: " required>
                    </div>
                    <div class="form-group">
                        <label for="txfFechaFinAfiliacionEmpleado">Fecha fin afiliacion</label>
                        <input type="text" id="txfFechaFinAfiliacionEmpleado" name="txfFechaAFinfiliacionEmpleado" class="form-control" placeholder="Fecha fin afiliacion: " required>
                    </div>
                    <div class="form-group">
                        <label for="cmbCargo">Cargo</label>
                        <select class="form-control" name="cmbCargo" id="cmbCargo" required>
                            <option value="">Seleccione cargo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txfDireccionEmpleado">Direccion</label>
                        <input type="text" id="txfDireccionEmpleado" name="txfDireccionEmpleado" class="form-control" placeholder="Dirección: " required>
                    </div>
                    <div class="form-group">
                        <label for="txfTelefonoEmpleado">Telefono</label>
                        <input type="number" id="txfTelefonoEmpleado" name="txfTelefonoEmpleado" class="form-control" placeholder="Telefono: " required>
                    </div>
                    <div class="form-group">
                        <label for="txfMovilEmpleado">Movil</label>
                        <input type="number" id="txfMovilEmpleado" name="txfMovilEmpleado" class="form-control" placeholder="Movil: " required>
                    </div>
                    <div class="form-group">
                        <label for="txfContratita">Contratista</label>
                        <input type="email" id="txfContratista" name="txfContratista" class="form-control" placeholder="Contratista: " required>
                    </div>
                    <div class="form-group">
                        <label for="cmbEstadoEmpleado">Estado</label>
                        <select class="form-control" name="cmbEstadoEmpleado" id="cmbEstadoEmpleado">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnRegistrarEmpleado" id="btnRegistrarEmpleado"> Enviar </button>
                    <button type="submit" class="btn btn-primary" name="btnRegistrarEmpleado" id="btnCancelarRegistrarEmpleado"> Cancelar </button>
                </form>
            </div>
        </div>
</div>