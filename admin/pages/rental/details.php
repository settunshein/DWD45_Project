<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mb-5">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Rental Management</h1>
    </div>

    <div class="card mb-5">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="table-title">Rental Details Info</span>
            <a href="dashboard.php?view=rental_index" class="btn btn-sm btn-outline-dark rounded-0">
                <i class="fas fa-arrow-circle-left"></i>&nbsp;
                B A C K
            </a>
        </div>

        <div class="card-body">
            <?php include('rental/details_rental_info.php'); ?>
            <?php include('rental/details_payment_info.php'); ?>
        </div><!-- /.card-body -->
    </div>

</main>
