<?php include_once 'views/template/header-admin.php'; ?>

<div class="tile">
    <div class="tile-body">
        <h2>Lista de Clientes</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Correo</th>
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
                            <td>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Editar</a>
                                <button class="btn btn-danger" data-numero-reserva="<?php echo $cliente['id_usuario']; ?>">Eliminar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

<?php include_once 'views/template/footer-admin.php'; ?>
</body>

</html>