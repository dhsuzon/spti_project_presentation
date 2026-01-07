<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header  text-primary d-flex justify-content-between align-middle bg-light">
            <h5 class="mb-0">Institute scholorships Information list</h5>
            <?php if (isset($_SESSION['scholar_update_mes'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
                <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['scholar_update_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php unset($_SESSION['scholar_update_mes']); ?>
            <?php elseif(isset($_SESSION['scholar_add_mes'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
                <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['scholar_add_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php unset($_SESSION['scholar_add_mes']); ?>
            <?php elseif (isset($_SESSION['scholarships_row_delete_message_success'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #10dd77ff; color: #156d44ff;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Error!</strong> <?php echo $_SESSION['scholarships_row_delete_message_success']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['scholarships_row_delete_message_success']); ?>
            <?php elseif (isset($_SESSION['scholarships_row_delete_message_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #f8d7da; color: #842029;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Success!</strong> <?php echo $_SESSION['scholarships_row_delete_message_error']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['scholarships_row_delete_message_error']); ?>


            <?php endif; ?>
            <button type="button" class="btn btn-primary btn-sm" id="add_scholar_btn" data-bs-toggle="modal"
                data-bs-target="#scholarModal">
                <i class="fas fa-plus-circle fs-sm"></i> Add New scholarships info card
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered  table-hover text-center align-middle">
                    <thead>
                        <tr>
                            <th>Scholar Title</th>
                            <th>Scholar Description</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php include_once  __DIR__."/scholar_data_fetch.php"; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>