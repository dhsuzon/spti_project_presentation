<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header  text-primary d-flex justify-content-between align-middle bg-light">
            <h5 class="mb-0">Institute Admission Information list</h5>
            <?php if (isset($_SESSION['admission_update_info_mes'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
                <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['admission_update_info_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php unset($_SESSION['admission_update_info_mes']); ?>
            <?php elseif(isset($_SESSION['admission_add_info_mes'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
                <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['admission_add_info_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php unset($_SESSION['admission_add_info_mes']); ?>
            <?php elseif (isset($_SESSION['admission_details_row_delete_message_success'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #10dd77ff; color: #156d44ff;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Error!</strong> <?php echo $_SESSION['admission_details_row_delete_message_success']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['admission_details_row_delete_message_success']); ?>
            <?php elseif (isset($_SESSION['admission_details_row_delete_message_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #f8d7da; color: #842029;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Success!</strong> <?php echo $_SESSION['admission_details_row_delete_message_error']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['admission_details_row_delete_message_error']); ?>


            <?php endif; ?>
            <button type="button" class="btn btn-primary btn-sm" id="add_admission_btn" data-bs-toggle="modal"
                data-bs-target="#admissionModal">
                <i class="fas fa-plus-circle fs-sm"></i> Add New Amission info Text
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered  text-left align-middle table-hover">
                    <thead>
                        <tr>
                            <th>Admission Category</th>
                            <th>Admission Information</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php include_once  __DIR__."/admission_data_fetch.php"; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>