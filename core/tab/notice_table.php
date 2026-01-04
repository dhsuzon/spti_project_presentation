<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-bullhorn mr-1"></i> Notice Information
                </h6>
                <?php if (isset($_SESSION['notice_success'])): ?>
                <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                    style="background-color: #d1e7dd; color: #0f5132;">
                    <i class="fas fa-check-circle mr-2"></i>
                    <strong>Success!</strong> <?php echo $_SESSION['notice_success']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['notice_success']); ?>

                <?php elseif (isset($_SESSION['db_notice_error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                    style="background-color: #f8d7da; color: #842029;">
                    <i class="fas fa-exclamation-triangle mr-2"></i>
                    <strong>Error!</strong> <?php echo $_SESSION['db_notice_error']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['db_notice_error']); ?>
                <?php elseif (isset($_SESSION['notices_row_delete_message_success'])): ?>
                <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                    style="background-color: #f8d7da; color: #842029;">
                    <i class="fas fa-exclamation-triangle mr-2"></i>
                    <strong>Error!</strong> <?php echo $_SESSION['notices_row_delete_message_success']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['notices_row_delete_message_success']); ?>
                <?php elseif (isset($_SESSION['notices_row_delete_message_error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                    style="background-color: #f8d7da; color: #842029;">
                    <i class="fas fa-exclamation-triangle mr-2"></i>
                    <strong>Error!</strong> <?php echo $_SESSION['notices_row_delete_message_error']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['notices_row_delete_message_error']); ?>
                <?php endif; ?>
                <button class="btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#noticeModal">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Add Notice
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-light">
                            <tr>
                                <th>Date</th>
                                <th>Notice Title</th>
                                <th>File/View</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once  __DIR__."/notice_data_fetch.php" ;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>