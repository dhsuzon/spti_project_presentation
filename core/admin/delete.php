<?php
session_start();
require_once '../../config/db.php'; 
if (!isset($_SESSION['admin_user'])) {
    header("Location: ../.././login.php");
    exit();
}


if (isset($_GET['id']) && isset($_GET['type'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $type = mysqli_real_escape_string($conn, $_GET['type']);

    $img_column = "";
    $folder = "";


    if ($type == 'teachers') {
        $img_column = "teacher_image";
        $folder = "../../images/faculty/";
    } elseif ($type == 'notices') { 
        $img_column = "notice_file"; 
        $folder = "../../images/notices/";
    } elseif ($type == 'galleries') {
        $img_column = "gallery_image"; 
        $folder = "../../images/gallery/";
    } elseif ($type == 'students') {
        $img_column = "student_image";
        $folder = "../../images/students/";
    }
    elseif ($type == 'banners') {
        $img_column = "banner_image";
        $folder = "../../images/banners/";
    }
    elseif ($type == 'Campus_Facilitie') {
        $img_column = "icon";
        $folder = "../../images/logo/";
    }
    elseif ($type == 'author_members') {
        $img_column = "image_file";
        $folder = "../../images/authors/"; 
    }
    elseif ($type == 'courses') {
        $img_column = "tech_image";
        $folder = "../../images/technology_image/"; 
    }
    elseif ($type == 'departments') {
    
    $res = mysqli_query($conn, "SELECT dept_icon, job_icon, exam_icon, head_image FROM departments WHERE id = '$id'");
    $row = mysqli_fetch_assoc($res);
    
    $folder = "../../images/departments/";
    
   
    if (!empty($row['dept_icon']) && file_exists($folder . $row['dept_icon'])) {
        unlink($folder . $row['dept_icon']);
    }
    
  
    if (!empty($row['job_icon']) && file_exists($folder . $row['job_icon'])) {
        unlink($folder . $row['job_icon']);
    }
    
   
    if (!empty($row['exam_icon']) && file_exists($folder . $row['exam_icon'])) {
        unlink($folder . $row['exam_icon']);
    }
 
   
    if (!empty($row['head_image']) && file_exists($folder . $row['head_image'])) {
        unlink($folder . $row['head_image']);
    }

    
    $sql = "DELETE FROM departments WHERE id = '$id'";
    mysqli_query($conn, $sql);
}

    if ($img_column != "") {
        $res = mysqli_query($conn, "SELECT $img_column FROM $type WHERE id = $id");
        if ($res && $row = mysqli_fetch_assoc($res)) {
            $file_name = $row[$img_column];
            if (!empty($file_name)) {
                $full_path = $folder . $file_name;
                if (file_exists($full_path)) {
                    unlink($full_path); 
                }
            }
        }
    }

    $delete_sql = "DELETE FROM $type WHERE id = $id";
    if (mysqli_query($conn, $delete_sql)) {
        
        $_SESSION[$type.'_row_delete_message_success'] = ucfirst($type) . " deleted successfully!";
    } else {
        $_SESSION[$type.'_row_delete_message_error'] = "Failed to delete from $type";
    }
}

header("Location: ../../dashboard.php");
exit();
?>