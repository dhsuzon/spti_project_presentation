<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Department Management</h6>
        <button class="btn btn-primary add-dept-btn" data-bs-toggle="modal" data-bs-target="#deptModal">
            <i class="fas fa-plus"></i> Add New Department
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
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