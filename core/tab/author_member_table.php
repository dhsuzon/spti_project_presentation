<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Director & Principal Management</h6>
            <?php if (isset($_SESSION['author_member_update_mes'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #d1e7dd; color: #0f5132;">
                <i class="fas fa-check-circle mr-2"></i>
                <strong>Success!</strong> <?php echo $_SESSION['author_member_update_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['author_member_update_mes']); ?>

            <?php elseif (isset($_SESSION['author_member_add_mes'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #d1e7dd; color: #0f5132;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Success!</strong> <?php echo $_SESSION['author_member_add_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['author_member_add_mes']); ?>
            <?php elseif (isset($_SESSION['author_members_row_delete_message_success'])): ?>
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #10dd77ff; color: #156d44ff;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Error!</strong> <?php echo $_SESSION['author_members_row_delete_message_success']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['author_members_row_delete_message_success']); ?>
            <?php elseif (isset($_SESSION['author_members_row_delete_message_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #f8d7da; color: #842029;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Success!</strong> <?php echo $_SESSION['author_members_row_delete_message_error']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['author_members_row_delete_message_error']); ?>
            <?php elseif (isset($_SESSION['member_size_error_mes'])): ?>
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #f8d7da; color: #842029;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Error!</strong> <?php echo $_SESSION['member_size_error_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['member_size_error_mes']); ?>
            <?php elseif (isset($_SESSION['member_format_error_mes'])): ?>
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                style="background-color: #f8d7da; color: #842029;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Error!</strong> <?php echo $_SESSION['member_format_error_mes']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['member_format_error_mes']); ?>
            <?php endif; ?>
            <button class="btn btn-primary btn-sm add-auth-btn" data-bs-toggle="modal"
                data-bs-target="#authMemberModal">
                <i class="fas fa-plus"></i> Add New Member
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-left align-middle table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="">#ID</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Institution</th>
                            <th>Message</th>
                            <th>Member Image</th>
                            <th>Member Role</th>
                            <th>Status</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  include_once __DIR__."/author_member_data_fetch.php"; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>