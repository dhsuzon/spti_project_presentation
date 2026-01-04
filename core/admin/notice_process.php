<?php
session_start();
require_once '../../config/db.php'; 
if (!isset($_SESSION['admin_user'])) {
    header("Location: ../.././login.php");
    exit();
}


if (isset($_POST['save_notice'])) {
    $id = mysqli_real_escape_string($conn, $_POST['notice_id']);
    $title = mysqli_real_escape_string($conn, $_POST['notice_title']);
    $notice_date = mysqli_real_escape_string($conn, $_POST['notice_date']); 

    $file_update_sql = "";
    $file_name = "";

    if (!empty($_FILES['notice_file']['name'])) {
        $file_name = time() . '_' . $_FILES['notice_file']['name'];
        $target = "../../images/notices/" . $file_name;

        if (!is_dir('../../images/notices/')) {
            mkdir('../../images/notices/', 0777, true);
        }

        if (move_uploaded_file($_FILES['notice_file']['tmp_name'], $target)) {
           
            $file_update_sql = ", notice_file = '$file_name'";
        }
    }

    if (!empty($id)) {
        
        $query = "UPDATE notices SET notice_title = '$title', notice_date = '$notice_date' $file_update_sql WHERE id = '$id'";
        $_SESSION['notice_success'] = "Notice updated successfully!"; 
    } else {
       
        $query = "INSERT INTO notices (notice_title, notice_file, notice_date) VALUES ('$title', '$file_name', '$notice_date')";
        $_SESSION['notice_success'] = "Notice added successfully!";
    }

    if (mysqli_query($conn, $query)) {
        header("Location: ../../dashboard.php"); 
        exit();
    } else {
        $_SESSION['db_notice_error'] = "Database Error: " . mysqli_error($conn);
        header("Location: ../../dashboard.php");
        exit();
    }
}
?>