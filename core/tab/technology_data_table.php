<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="text-primary mb-0">Course Cards List</h5>
            <?php if (isset($_SESSION['tech_update_mes'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #d1e7dd; color: #0f5132;">
                <i class="fas fa-check-circle mr-2"></i>
                <strong>Success!</strong> <?php echo $_SESSION['tech_update_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['tech_update_mes']); ?>

            <?php elseif (isset($_SESSION['tech_add_mes'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #d1e7dd; color: #0f5132;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Success!</strong> <?php echo $_SESSION['tech_add_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['tech_add_mes']); ?>
            <?php elseif (isset($_SESSION['courses_row_delete_message_success'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #10dd77ff; color: #156d44ff;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Error!</strong> <?php echo $_SESSION['courses_row_delete_message_success']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['courses_row_delete_message_success']); ?>
            <?php elseif (isset($_SESSION['courses_row_delete_message_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #f8d7da; color: #842029;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Success!</strong> <?php echo $_SESSION['courses_row_delete_message_error']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['courses_row_delete_message_error']); ?>
            <?php elseif (isset($_SESSION['tech_size_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #f8d7da; color: #842029;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Error!</strong> <?php echo $_SESSION['tech_size_error']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['tech_size_error']); ?>
            <?php elseif (isset($_SESSION['tech_format_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #f8d7da; color: #842029;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Error!</strong> <?php echo $_SESSION['tech_format_error']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['tech_format_error']); ?>
            <?php endif; ?>
            <button type="button" class="btn btn-primary" id="add_tech" data-bs-toggle="modal"
                data-bs-target="#techModal">
                <i class="fas fa-plus-circle mx-1"></i> Add New Course Card
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center align-middle ">
                    <thead class="table-light">
                        <tr>
                            <th>SL</th>
                            <th>Department</th>
                            <th>Course Card Title</th>
                            <th>Course Card Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once __DIR__."/technology_data_fetch.php"; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>