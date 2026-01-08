<?php
session_start();
require_once './config/db.php';
if (!isset($_SESSION['admin_user'])) {
    header("Location: ./login.php");
    exit();
}

$faculty_res = mysqli_query($conn, "SELECT id FROM teachers");
$faculty_count = ($faculty_res) ? mysqli_num_rows($faculty_res) : 0;

$student_res = mysqli_query($conn, "SELECT id FROM students");
$student_count = ($student_res) ? mysqli_num_rows($student_res) : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPTI Admin | Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/admin/dashboard.css">


</head>

<body>

    <?php include_once __DIR__."/core/dashboard_header.php"; ?>

    <div class="main-content">
        <div
            class="top-bar d-flex justify-content-between align-items-center px-3 py-2 bg-white border-bottom shadow-sm sticky-top">
            <div class="d-flex align-items-center">
                <button class="btn btn-primary d-lg-none me-2 shadow-sm" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu">
                    <i class="fas fa-bars"></i>
                </button>
                <span class="fs-6 fw-bold">Welcome, <span
                        class="text-primary"><?php echo $_SESSION['admin_user']; ?></span></span>
            </div>

            <div class="d-flex gap-1">
                <a href="./pass_update.php" class="btn  btn-warning shadow-sm"><i class="fas fa-user-cog">
                    </i>update Profile</a>
                <a href="./core/admin/logout.php" class="btn  btn-danger shadow-sm"><i
                        class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </div>

        <div class="content-wrapper p-2 p-md-4">
            <h2 class="h4 mb-4 text-dark font-weight-light text-center text-md-start">Site Administration</h2>

            <div class="row mb-4 g-3 text-center">
                <div class="col-6 col-md-4">
                    <div class="card shadow-sm border-0 border-start border-4 border-primary p-2 h-100">
                        <small class="text-muted fw-bold" style="font-size: 0.65rem;">FACULTY</small>
                        <div class="h5 m-0 fw-bold"><?php echo $faculty_count; ?></div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card shadow-sm border-0 border-start border-4 border-info p-2 h-100">
                        <small class="text-muted fw-bold" style="font-size: 0.65rem;">STUDENT</small>
                        <div class="h5 m-0 fw-bold"><?php echo $student_count; ?></div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm border-0 border-start border-4 border-success p-2 h-100">
                        <small class="text-muted fw-bold" style="font-size: 0.65rem;">STATUS</small>
                        <div class="h5 m-0 text-success fw-bold">Active</div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm border-0 mb-5">
                <div class="card-body p-0">
                    <div class="table-responsive p-2 p-md-3">
                        <?php 
                        include_once __DIR__.'/core/tab/teacher_table.php'; echo "<hr class='my-5'>";
                        include_once __DIR__.'/core/tab/notice_table.php'; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/student_table.php"; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/banner_table.php"; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/gallery_table.php"; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/author_member_table.php"; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/department_data_table.php"; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/facilitie_data_table.php"; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/technology_data_table.php"; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/contact_data_table.php"; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/scholar_data_table.php"; echo "<hr class='my-5'>";
                        include_once __DIR__."/core/tab/admission_info_data_table.php"; 

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include_once __DIR__."/core/dashboard_footer.php"; ?>

</html>