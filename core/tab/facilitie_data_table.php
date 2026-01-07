<div class="card p-4 shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-3 text-primary">
        <h5 class="mb-0">Campus Facilities Management</h5>

        <?php if (isset($_SESSION['facilitie_add_mes'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
            <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['afacilitie_add_mes']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php unset($_SESSION['afacilitie_add_mes']); ?>
        <?php elseif(isset($_SESSION['facilitie_update_mes'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
            <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['facilitie_update_mes']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php unset($_SESSION['facilitie_update_mes']); ?>
        <?php elseif(isset($_SESSION['facilitie_size_error'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
            <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['facilitie_size_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php unset($_SESSION['facilitie_size_error']); ?>
        <?php elseif(isset($_SESSION['facilitie_format_error'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
            <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['facilitie_format_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php unset($_SESSION['facilitie_format_error']); ?>
        <?php elseif (isset($_SESSION['Campus_Facilitie_row_delete_message_success'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #10dd77ff; color: #156d44ff;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Error!</strong> <?php echo $_SESSION['Campus_Facilitie_row_delete_message_success']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['Campus_Facilitie_row_delete_message_success']); ?>
        <?php elseif (isset($_SESSION['Campus_Facilitie_row_delete_message_error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #f8d7da; color: #842029;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Success!</strong> <?php echo $_SESSION['Camppus_Facilitie_row_delete_message_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['Campus_Facilitie_row_delete_message_error']); ?>



        <?php endif; ?>



        <button class="btn btn-primary" id="add_new_btn" data-bs-toggle='modal' data-bs-target="#facilityModal">
            <i class="fas fa-plus-circle"></i> Add New Facility
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th>SL</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once __DIR__."/facilitie_data_fetch.php";?>
            </tbody>
        </table>
    </div>
</div>