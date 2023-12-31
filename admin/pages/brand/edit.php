<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Brand Management</h1>
    </div>

    <form method="POST" id="editBrandForm">
        <input type="hidden" name="edit_brand_id" value="<?= $brand['id'] ?>">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="table-title">Create Brand Form</span>
                <a href="dashboard.php?view=brand_index" class="btn btn-sm btn-outline-dark rounded-0">
                    <i class="fas fa-arrow-circle-left"></i>&nbsp;
                    B A C K
                </a>
            </div>

            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">
                            Brand Name <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <input name="name" id="name" type="text" class="form-control" value="<?= $brand['name'] ?>" required>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-sm btn-outline-dark rounded-0 float-right" type="submit" name="edit_brand">
                    <i class="fa fa-edit"></i>&nbsp;
                    Update
                </button>
            </div>
        </div>
    </form>
</main>
