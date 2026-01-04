<div class="card p-4 shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-3 text-primary">
        <h5 class="mb-0">Campus Facilities Management</h5>
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