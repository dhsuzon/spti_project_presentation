<div class="offcanvas-lg offcanvas-start bg-dark text-white shadow" tabindex="-1" id="sidebarMenu">
    <div class="offcanvas-header d-lg-none border-bottom border-secondary">
        <h5 class="offcanvas-title text-white">SPTI ADMIN</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            data-bs-target="#sidebarMenu"></button>
    </div>

    <div class="offcanvas-body p-0">
        <div class="d-flex flex-column w-100 vh-100 p-3">
            <h4 class="text-center d-none d-lg-block mb-4 border-bottom pb-3 fw-bold">SPTI ADMIN</h4>

            <nav class="nav flex-column gap-1 admin-sidebar">
                <ul class="sidebar-menu">
                    <li><a href="dashboard.php" style="background: #0d6efd; color: #fff;"><i
                                class="fas fa-tachometer-alt"></i> Dashboard</a></li>

                    <li class="menu-label">ADD / CREATE</li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#addTeacherModal"><i
                                class="fas fa-plus-circle text-primary"></i> Add Teacher</a></li>
                    <li><a href="#" data-bs-target="#studentModal" data-bs-toggle="modal"><i
                                class="fas fa-user-plus text-primary"></i> Add Student</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#bannerModal"><i
                                class="fas fa-image text-primary"></i> Add New Banner</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal"><i
                                class="fas fa-images text-primary"></i> Add Gallery</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#noticeModal"><i
                                class="fas fa-file-upload text-primary"></i> Add Notice</a></li>

                    <li class="menu-label">EDIT / CHANGE</li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#addTeacherModal"><i
                                class="fas fa-edit text-warning"></i> Edit Teacher</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#studentModal"><i
                                class="fas fa-user-edit text-warning"></i> Edit Students</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#gallerymodal"><i
                                class="fas fa-images text-warning"></i> Edit Gallery</a></li>

                    <li class="menu-label" style="color: #ff8e8e;">DELETE / REMOVE</li>
                    <li><a href="#"><i class="fas fa-trash-alt text-danger"></i> Delete Data</a></li>
                    <li><a href="core/admin/logout.php" class="logout-link"><i class="fas fa-sign-out-alt"></i>
                            Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>