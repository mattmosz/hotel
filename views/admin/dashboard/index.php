<?php include_once 'views/template/header-admin.php'; ?>



<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    <div class="col">
        <div class="card radius-10 border-start border-0 border-3 border-info">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total Reservas</p>
                        <h4 class="my-1 text-info"><?php echo $data['totalReservas']['total']; ?></h4>
                    </div>
                    <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxs-hotel'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10 border-start border-0 border-3 border-danger">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total Clientes</p>
                        <h4 class="my-1 text-danger"><?php echo $data['totalClientes']['total'] ?></h4>
                    </div>
                    <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bx-user'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10 border-start border-0 border-3 border-success">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total Habitaciones</p>
                        <h4 class="my-1 text-success"><?php echo $data['totalHabitaciones']['total']; ?></h4>
                    </div>
                    <div class="widgets-icons-2 rounded-circle bg-success text-white ms-auto"><i class='bx bx-bed'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end row-->

</div>
</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->

<?php include_once 'views/template/footer-admin.php'; ?>
</body>

</html>