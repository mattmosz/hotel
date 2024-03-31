<?php include_once 'views/template/header-admin.php'; ?>

<div class="tile">
    <div class="tile-body">
        <h2>Lista de Clientes</h2>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nuevoClienteModal">Nuevo Cliente</button>
        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="tablaClientes">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['clientes'] as $cliente) : ?>
                        <tr>
                            <td><?php echo $cliente['nombre_usuario']; ?></td>
                            <td><?php echo $cliente['apellido_usuario']; ?></td>
                            <td><?php echo $cliente['usuario']; ?></td>
                            <td><?php echo $cliente['correo_usuario']; ?></td>
                            <td><?php echo $cliente['direccion_usuario']; ?></td>
                            <td><?php echo $cliente['telefono_usuario']; ?></td>
                            <td>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCliente" data-id-usuario="<?php echo $cliente['id_usuario']; ?>">Editar</a>
                                <button class="btn btn-danger" data-id-cliente="<?php echo $cliente['id_usuario']; ?>">Eliminar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Editar Cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="nombre" class="col-form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="apellido" class="col-form-label">Apellido:</label>
                                    <input type="text" class="form-control" id="apellido_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="usuario" class="col-form-label">Usuario:</label>
                                    <input type="text" class="form-control" id="usuario">
                                </div>
                                <div class="form-group">
                                    <label for="correo" class="col-form-label">Correo:</label>
                                    <input type="text" class="form-control" id="correo_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="direccion_usuario" class="col-form-label">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="telefono_usuario" class="col-form-label">Teléfono:</label>
                                    <input type="text" class="form-control" id="telefono_usuario">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCliente" data-id-usuario="<?php echo $cliente['id_usuario']; ?>">Editar</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="nuevoClienteModal" tabindex="-1" role="dialog" aria-labelledby="nuevoClienteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="nuevaHabitacionModalLabel">Nuevo Cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="nombre" class="col-form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="apellido" class="col-form-label">Apellido:</label>
                                    <input type="text" class="form-control" id="apellido_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="usuario" class="col-form-label">Usuario:</label>
                                    <input type="text" class="form-control" id="usuario">
                                </div>
                                <div class="form-group">
                                    <label for="correo" class="col-form-label">Correo:</label>
                                    <input type="text" class="form-control" id="correo_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="clave_usuario" class="col-form-label">Clave Usuario:</label>
                                    <input type="text" class="form-control" id="clave_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="estado_usuario" class="col-form-label">Estado Usuario:</label>
                                    <input type="text" class="form-control" id="estado_usuario">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once 'views/template/footer-admin.php'; ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/modalClientes.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/guardarCliente.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/eliminarCliente.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/insertarCliente.js'; ?>"></script>
</body>

</html>