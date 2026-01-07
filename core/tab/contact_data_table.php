<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header  text-primary d-flex justify-content-between align-middle bg-light">
            <h5 class="mb-0">Institute Contact Information Settings</h5>
            <button type="button" class="btn btn-primary btn-sm" id="add_contact_btn" data-bs-toggle="modal"
                data-bs-target="#settingsModal">
                <i class="fas fa-plus-circle fs-sm"></i> Add New Info
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead>
                    <tr>
                        <th>Institute Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php include_once  __DIR__."/contact_data_fetch.php"; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>