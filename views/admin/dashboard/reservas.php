<?php include_once 'views/template/header-admin.php'; ?>

<div class="tile">
    <div class="tile-body">
        <h2>Lista de Reservas</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <tr>
                        <th>Nombre Cliente</th>
                        <th>Apellido Cliente</th>
                        <th>Número Reserva</th>
                        <th>Fecha Llegada</th>
                        <th>Fecha Salida</th>
                        <th>Total</th>
                        <th>Habitación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['reservas'] as $reserva) : ?>
                        <tr>
                            <td><?php echo $reserva['nombre_usuario']; ?></td>
                            <td><?php echo $reserva['apellido_usuario']; ?></td>
                            <td><?php echo $reserva['numero_reserva']; ?></td>
                            <td><?php echo $reserva['fecha_inicio']; ?></td>
                            <td><?php echo $reserva['fecha_salida']; ?></td>
                            <td><?php echo $reserva['total_reserva']; ?></td>
                            <td><?php echo $reserva['estilo_habitacion']; ?></td>
                            <td>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Editar</a>
                                <a href="<?php echo RUTA_ADMIN . 'reserva/eliminar/' . $reserva['numero_reserva']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Editar Reserva</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="total-reserva" class="col-form-label">Total Reserva:</label>
                                    <input type="text" class="form-control" id="total_reserva">
                                </div>
                                <div class="form-group">
                                    <label for="fecha-llegada" class="col-form-label">Fecha Llegada:</label>
                                    <input type="text" class="form-control" id="fecha_inicio">
                                </div>
                                <div class="form-group">
                                    <label for="fecha-salida" class="col-form-label">Fecha Salida:</label>
                                    <input type="text" class="form-control" id="fecha_salida">
                                </div>
                                <div class="form-group">
                                    <label for="estado-reserva" class="col-form-label">Estado Reserva:</label>
                                    <input type="text" class="form-control" id="estado_reserva">
                                </div>
                                <div class="form-group">
                                    <label for="habitacion" class="col-form-label">Habitación:</label>
                                    <input type="text" class="form-control" id="id_habitacion">
                                </div>
                                <div class="form-group">
                                    <label for="cliente-id" class="col-form-label">Cliente ID:</label>
                                    <input type="text" class="form-control" id="id_usuario">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-numero-reserva="<?php echo $reserva['numero_reserva']; ?>">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <?php include_once 'views/template/footer-admin.php'; ?>
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/modalReservas.js'; ?>"></script>
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/guardarReserva.js'; ?>"></script>
    </body>

    </html>