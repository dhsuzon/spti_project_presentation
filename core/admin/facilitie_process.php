<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../../config/db.php"; 

if (isset($_POST['save_facility'])) {
    $f_id = mysqli_real_escape_string($conn, $_POST['id']);
    $f_title = mysqli_real_escape_string($conn, $_POST['title']);
    $f_desc = mysqli_real_escape_string($conn, $_POST['description']);
    
    $target_dir = "../../images/logo/";

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $new_file_name = "";
    $upload_ok = true;

    if (isset($_FILES['icon']['name']) && $_FILES['icon']['name'] != "") {
        $file_size = $_FILES['icon']['size'];
        $file_tmp = $_FILES['icon']['tmp_name'];
        $file_ext = strtolower(pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION));

        if ($file_size > 5242880) {
            $_SESSION['facilitie_size_error'] = "File is too large!";
            $upload_ok = false;
        }

        $allowed_ext = array("jpg", "jpeg", "png", "webp", "svg");
        if (!in_array($file_ext, $allowed_ext)) {
            $_SESSION['facilitie_format_error'] = "Invalid format!";
            $upload_ok = false;
        }

        if ($upload_ok) {
            $new_file_name = "icon_" . time() . "." . $file_ext;
            move_uploaded_file($file_tmp, $target_dir . $new_file_name);
        }
    }

    if ($upload_ok) {
        if (!empty($f_id)) {
            if ($new_file_name != "") {
                $res = mysqli_query($conn, "SELECT icon FROM Campus_Facilitie  WHERE id = '$f_id'");
           
                $old_data = mysqli_fetch_assoc($res);
                $old_file = $target_dir . ($old_data['icon'] ?? '');
                if (!empty($old_data['icon']) && is_file($old_file)) {
                    unlink($old_file);
                }
                $sql = "UPDATE Campus_Facilitie SET icon='$new_file_name', title='$f_title', description='$f_desc' WHERE id='$f_id'";
            } else {
                $sql = "UPDATE Campus_Facilitie SET title='$f_title', description='$f_desc' WHERE id='$f_id'";
            }
            $_SESSION['facilitie_update_mes'] = "Facility updated successfully";
        } else {
            if ($new_file_name != "") {
                $sql = "INSERT INTO Campus_Facilitie (icon, title, description) VALUES ('$new_file_name', '$f_title', '$f_desc')";
                $_SESSION['facilitie_add_mes'] = "Facility added successfully";
            } else {
                $_SESSION['facilitie_error'] = "Please select an image first!";
                header("Location: ../../dashboard.php");
                exit();
            }
        }

        if (mysqli_query($conn, $sql)) {
            $_SESSION['main_success'] = "Operation Successful!";
        }
    }

    header("Location: ../../dashboard.php");
    exit();
}