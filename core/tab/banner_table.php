<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-images mr-1"></i> Banner Management
        </h6>
        <?php if (isset($_SESSION['banner_update_mes'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #d1e7dd; color: #0f5132;">
            <i class="fas fa-check-circle mr-2"></i>
            <strong>Success!</strong> <?php echo $_SESSION['banner_update_mes']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['banner_update_mes']); ?>

        <?php elseif (isset($_SESSION['banner_add_mes'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #d1e7dd; color: #0f5132;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Success!</strong> <?php echo $_SESSION['banner_add_mes']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['banner_add_mes']); ?>
        <?php elseif (isset($_SESSION['banners_row_delete_message_success'])): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #10dd77ff; color: #156d44ff;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Error!</strong> <?php echo $_SESSION['banners_row_delete_message_success']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['banners_row_delete_message_success']); ?>
        <?php elseif (isset($_SESSION['banners_row_delete_message_error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #f8d7da; color: #842029;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Success!</strong> <?php echo $_SESSION['banners_row_delete_message_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['banners_row_delete_message_error']); ?>
        <?php elseif (isset($_SESSION['banner_upload_error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #f8d7da; color: #842029;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Error!</strong> <?php echo $_SESSION['banner_upload_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['banner_upload_error']); ?>
        <?php elseif (isset($_SESSION['banner_format_error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="background-color: #f8d7da; color: #842029;">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Error!</strong> <?php echo $_SESSION['banner_format_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['banner_format_error']); ?>
        <?php endif; ?>
        <button class="btn btn-sm btn-primary shadow-sm add-btn" data-bs-toggle="modal" data-bs-target="#bannerModal">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New Banner
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover " id="bannerTable" width="100%" cellspacing="0">
                <thead class="bg-light text-dark">
                    <tr>
                        <th style="width: 5%;">SL</th>
                        <th style="width: 20%;">Banner Preview</th>
                        <th>Banner Title</th>
                        <th class="text-center" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once  __DIR__."/banner_data_fetch.php" ;?>
                </tbody>
            </table>
        </div>
    </div>
</div>