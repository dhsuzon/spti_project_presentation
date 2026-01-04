<div class="card shadow mb-4 border-0">
    <div class="card-header bg-white py-3 d-flex flex-column flex-sm-row justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold text-primary mb-2 mb-sm-0">Teacher Information System</h5>
        <?php if (isset($_SESSION['teacher_success'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #d1e7dd; color: #0f5132;">
            <i class="fas fa-check-circle mr-2"></i>
            <strong>Success!</strong> <?php echo $_SESSION['teacher_success']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['teacher_success']); ?>

        <?php elseif (isset($_SESSION['teachers_row_delete_message_success'])): ?>
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #f8d7da; color: #842029;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Error!</strong> <?php echo $_SESSION['teachers_row_delete_message_success']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['teachers_row_delete_message_success']); ?>
        <?php elseif (isset($_SESSION['teachers_row_delete_message_error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #f8d7da; color: #842029;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Error!</strong> <?php echo $_SESSION['teachers_row_delete_message_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['teachers_row_delete_message_error']); ?>
        <?php endif; ?>
        <button class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm" data-bs-toggle="modal"
            data-bs-target="#addTeacherModal">
            <i class="fas fa-plus-circle"></i> Add New Teacher
        </button>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="border-0">Photo</th>
                        <th class="border-0">Name</th>
                        <th class="border-0 d-none d-md-table-cell">Department</th>
                        <th class="border-0 d-none d-md-table-cell">Designation</th>
                        <th class="border-0 d-none d-md-table-cell">Email</th>
                        <th class="border-0">Phone</th>
                        <th class="border-0 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once __DIR__."/teacher_data_fetch.php" ;?>
                </tbody>
            </table>
        </div>
    </div>
</div>