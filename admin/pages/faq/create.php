<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">FAQ Management</h1>
    </div>

    <form method="POST" id="createFAQForm">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="table-title">Create FAQ Form</span>
                <a href="dashboard.php?view=faq_index" class="btn btn-sm btn-outline-dark rounded-0">
                    <i class="fas fa-arrow-circle-left"></i>&nbsp;
                    B A C K
                </a>
            </div>

            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">
                            FAQ Title <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <input name="title" id="name" type="text" class="form-control" required>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="content">
                            FAQ Content <span class="font-weight-bold text-danger">*</span>
                        </label>
                        <textarea name="content" id="content" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-sm btn-outline-dark rounded-0 float-right" type="submit" name="insert_faq">
                    <i class="fa fa-edit"></i>&nbsp;
                    Create
                </button>
            </div>
        </div>
    </form>
</main>
