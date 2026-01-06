<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Django Style Admin | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./css/admin/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-header">SPTI ADMIN</div>
        <ul class="sidebar-menu">
            <li><a href="dashboard.php" style="background: #3d5a6d;"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>

            <li class="menu-label">ADD / CREATE</li>
            <li>
                <a href="#" data-bs-toggle="modal" data-bs-target="#addTeacherModal">
                    <i class="fas fa-plus-circle"></i> Add Teacher
                </a>
            </li>

            <li><a href="#" data-bs-target="#studentModal" data-bs-toggle="modal"><i class="fas fa-user-plus"></i> Add
                    Student</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#bannerModal" class="add-btn"><i
                        class="fas fa-user-plus"></i> Add
                    New Banner</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal"><i class="fas fa-images"></i> Add
                    Gallery</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#noticeModal"><i class="fas fa-file-upload"></i> Add
                    Notice</a></li>

            <li class="menu-label">EDIT / CHANGE</li>
            <li>
                <a href="#" class="edit-teacher-btn" data-bs-toggle="modal" data-bs-target="#addTeacherModal"
                    data-id="1" data-name="Teacher Name" data-designation="Sr. Instructor" data-dept="Computer"
                    data-phone="017XXX" data-email="test@mail.com" data-image="teacher.jpg">
                    <i class="fas fa-edit"></i> Edit Teacher
                </a>
            </li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#studentModal"><i class="fas fa-user-edit"></i> Edit
                    Students</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#gallerymodal"><i class="fas fa-images"></i> Edit
                    Gallery</a></li>

            <li class="menu-label" style="color: #ff8e8e;">DELETE / REMOVE</li>
            <li><a href="#"><i class="fas fa-trash-alt"></i> Delete Data</a></li>

            <li><a href="core/admin/logout.php" class="logout-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </div>