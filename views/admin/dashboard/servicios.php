<?php include_once 'views/template/header-admin.php'; ?>

<div class="tile">
    <div class="tile-body">
        <h2>Lista de Servicios</h2>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nuevoServicioModal">Nuevo Servicio</button>
        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="tablaServicios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['servicios'] as $servicio) : ?>
                        <tr>
                            <td><?php echo $servicio['id_servicio']; ?></td>
                            <td><?php echo $servicio['titulo_servicio']; ?></td>
                            <td><?php echo $servicio['descripcion_servicio']; ?></td>
                            <td>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalServicio" data-id-servicio="<?php echo $servicio['id_servicio']; ?>">Editar</a>
                                <button class="btn btn-danger" data-id-servicio="<?php echo $servicio['id_servicio']; ?>">Eliminar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="modal fade" id="modalServicio" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Editar Servicio</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="titulo" class="col-form-label">Titulo:</label>
                                    <input type="text" class="form-control" id="titulo_servicio" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion" class="col-form-label">Descripcion:</label>
                                    <input type="text" class="form-control" id="descripcion_servicio" autocomplete="off">
                                </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="nuevoServicioModal" tabindex="-1" role="dialog" aria-labelledby="nuevoServicioModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="nuevoServicioModalLabel">Nuevo Servicio</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="numero" class="col-form-label">Titulo:</label>
                                    <input type="text" class="form-control" id="titulo_servicio">
                                </div>
                                <div class="form-group">
                                    <label for="tipo" class="col-form-label">Descripccion:</label>
                                    <input type="text" class="form-control" id="descripcion_servicio">
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
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/modalServicios.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/guardarServicio.js'; ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/admin/js/pages/eliminarServicio.js'; ?>"></script>
</body>

</html>