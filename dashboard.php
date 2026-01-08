<?php
ob_start();
session_start();
require_once './config/db.php';


if (!isset($_SESSION['admin_user'])) {
    header("Location: ./login.php");
    exit();
}


include_once __DIR__.'/core/dashboard_header.php';

$faculty_res = mysqli_query($conn, "SELECT id FROM teachers");
$faculty_count = ($faculty_res) ? mysqli_num_rows($faculty_res) : 0;

$student_res = mysqli_query($conn, "SELECT id FROM students");
$student_count = ($student_res) ? mysqli_num_rows($student_res) : 0;
?>


<div class="main-content">
    <div
        class="top-bar d-flex justify-content-space-between align-items-center px-3 py-2 bg-white border-bottom shadow-sm">
        <span>Welcome, <strong class="text-primary"><?php echo $_SESSION['admin_user']; ?></strong></span>

        <div class="flex">
            <a href="./pass_update.php" class="btn btn-warning"
                onclick="return confirm('you are sure change password or admin user this system')">
                <i class="fas fa-sign-in-alt" target="_blank"></i> Change Admin info
            </a>
            <a href="./core/admin/logout.php" class="btn btn-danger"
                onclick="return confirm('you are logout this system')">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>


    <div class="content-wrapper p-3 p-md-4">
        <h2 class="mb-4 text-dark font-weight-light text-center text-md-left">Site Administration</h2>

        <div class="row mb-4">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                    Fculty</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $faculty_count; ?></div>
                            </div>
                            <div class="col-auto"><i class="fas fa-building fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Student
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $student_count; ?>
                                </div>
                            </div>
                            <div class="col-auto"><i class="fas fa-users-cog fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">System Status
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-success">Active</div>
                            </div>
                            <div class="col-auto"><i class="fas fa-check-circle fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once __DIR__.'/core/tab/teacher_table.php'; ?>
        <?php include_once __DIR__.'/core/tab/notice_table.php'; ?>
        <?php include_once __DIR__."/core/tab/student_table.php"; ?>
        <?php include_once  __DIR__."/core/tab/banner_table.php"; ?>
        <?php include_once  __DIR__."/core/tab/gallery_table.php"; ?>
        <?php include_once  __DIR__."/core/tab/author_member_table.php"; ?>
        <?php include_once  __DIR__."/core/tab/department_data_table.php"; ?>
        <?php include_once __DIR__."/core/tab/facilitie_data_table.php"; ?>
        <?php include_once __DIR__."/core/tab/technology_data_table.php"; ?>
        <?php include_once __DIR__."/core/tab/contact_data_table.php"; ?>
        <?php include_once __DIR__."/core/tab/scholar_data_table.php"; ?>
        <?php include_once __DIR__."/core/tab/admission_info_data_table.php"; ?>





    </div>
    <?php include_once __DIR__.'/core/dashboard_footer.php'; ?>