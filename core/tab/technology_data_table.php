<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="text-primary mb-0">Course Cards List</h5>
            <button type="button" class="btn btn-primary" id="add_tech" data-bs-toggle="modal"
                data-bs-target="#techModal">
                <i class="fas fa-plus-circle mx-1"></i> Add New Course Card
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center align-middle">
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