<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Department Management</h6>
        <?php if (isset($_SESSION['dept_update_mes'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
            <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['dept_update_mes']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php unset($_SESSION['dept_update_mes']); ?>
        <?php elseif(isset($_SESSION['dept_add_mes'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-3" role="alert">
            <i class="fas fa-check-circle mr-2"></i> <?php echo $_SESSION['dept_add_mes'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php unset($_SESSION['dept_add_mes']); ?>
        <?php elseif (isset($_SESSION['departments_row_delete_message_success'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #10dd77ff; color: #156d44ff;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Error!</strong> <?php echo $_SESSION['departments_row_delete_message_success']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['departments_row_delete_message_success']); ?>
        <?php elseif (isset($_SESSION['departments_row_delete_message_error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #f8d7da; color: #842029;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Success!</strong> <?php echo $_SESSION['departments_row_delete_message_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['departments_row_delete_message_error']); ?>
        <?php endif; ?>
        <button class="btn btn-primary add-dept-btn" data-bs-toggle="modal" data-bs-target="#deptModal">
            <i class="fas fa-plus"></i> Add New Department
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Dept Name</th>
                        <th>Head Name</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once __DIR__."/department_data_fetch.php"; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>