<?php include_once 'views/template/header-admin.php'; ?>

<div class="tile">
    <div class="tile-body">
        <h2>Lista de Habitaciones</h2>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nuevaHabitacionModal">Nueva Habitación</button>
        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="tablaHabitaciones">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Precio/Noche</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['habitaciones'] as $habitacion) : ?>
                        <tr>
                            <td><?php echo $habitacion['numero_habitacion']; ?></td>
                            <td><?php echo $habitacion['estilo_habitacion']; ?></td>
                            <td><?php echo $habitacion['descripcion_habitacion']; ?></td>
                            <td><?php echo $habitacion['precio_noche']; ?></td>
                            <td><?php echo $habitacion['estado_habitacion']; ?></td>
                            <td>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalHabitacion" data-id-habitacion="<?php echo $habitacion['id_habitacion']; ?>">Editar</a>
                                <button class="btn btn-danger" data-id-habitacion="<?php echo $habitacion['id_habitacion']; ?>">Eliminar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="modal fade" id="modalHabitacion" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Editar Habitación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="numero" class="col-form-label">Numero:</label>
                                    <input type="text" class="form-control" id="numero_habitacion">
                                </div>
                                <div class="form-group">
                                    <label for="tipo" class="col-form-label">Tipo:</label>
                                    <input type="text" class="form-control" id="estilo_habitacion">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion" class="col-form-label">Descripcion:</label>
                                    <input type="text" class="form-control" id="descripcion_habitacion">
                                </div>
                                <div class="form-group">
                                    <label for="precio" class="col-form-label">Precio/Noche:</label>
                                    <input type="text" class="form-control" id="precio_noche">
                                </div>
                                <div class="form-group">
                                    <label for="estado" class="col-form-label">Estado:</label>
                                    <input type="text" class="form-control" id="estado_habitacion">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalHabitacion" data-id-habitacion="<?php echo $habitacion['id_habitacion']; ?>">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="nuevaHabitacionModal" tabindex="-1" role="dialog" aria-labelledby="nuevaHabitacionModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="nuevaHabitacionModalLabel">Nueva Habitación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="numero" class="col-form-label">Numero:</label>
                                    <input type="text" class="form-control" id="numero_habitacion">
                                </div>
                                <div class="form-group">
                                    <label for="tipo" class="col-form-label">Tipo:</label>
                                    <input type="text" class="form-control" id="estilo_habitacion">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion" class="col-form-label">Descripcion:</label>
                                    <input type="text" class="form-control" id="descripcion_habitacion">
                                </div>
                                <div class="form-group">
                                    <label for="precio" class="col-form-label">Precio/Noche:</label>
                                    <input type="text" class="form-control" id="precio_noche">
                                </div>
                                <div class="form-group">
                                    <label for="estado" class="col-form-label">Estado:</label>
                                    <input type="text" class="form-control" id="estado_habitacion">
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
</div>


<?php include_once 'views/template/footer-admin.php'; ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/modalHabitaciones.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/guardarHabitacion.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/eliminarHabitacion.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/insertarHabitacion.js'; ?>"></script>
</body>

</html>