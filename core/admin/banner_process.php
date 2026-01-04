<?php
session_start();
require_once "../../config/db.php";

if (isset($_POST['save_banner'])) {
    $banner_id = mysqli_real_escape_string($conn, $_POST['banner_id']);
    $banner_title = mysqli_real_escape_string($conn, $_POST['banner_title']);
    
    $target_dir = "../../images/banners/";


    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $new_file_name = "";
    $upload_ok = true;


    if (isset($_FILES['banner_image']['name']) && $_FILES['banner_image']['name'] != "") {
        $file_size = $_FILES['banner_image']['size'];
        $file_tmp = $_FILES['banner_image']['tmp_name'];
        $file_ext = strtolower(pathinfo($_FILES['banner_image']['name'], PATHINFO_EXTENSION));

        if ($file_size > 5242880) {
            $_SESSION['banner_upload_error'] = "File is too large! Maximum size is 5MB.";
            $upload_ok = false;
        }

     
        $allowed_ext = array("jpg", "jpeg", "png", "webp");
        if (!in_array($file_ext, $allowed_ext)) {
            $_SESSION['banner_format_error'] = "Invalid format! Only JPG, PNG & WEBP allowed.";
            $upload_ok = false;
        }

        if ($upload_ok) {
            $new_file_name = "banner_" . time() . "." . $file_ext;
            move_uploaded_file($file_tmp, $target_dir . $new_file_name);
        }
    }

    if ($upload_ok) {
        if (!empty($banner_id)) {
         
            if ($new_file_name != "") {
                $res = mysqli_query($conn, "SELECT banner_image FROM banners WHERE id = '$banner_id'");
                $old_data = mysqli_fetch_assoc($res);
                
             
                $old_file = $target_dir . $old_data['banner_image'];
                if (!empty($old_data['banner_image']) && is_file($old_file)) {
                    unlink($old_file);
                }
                $sql = "UPDATE banners SET banner_title='$banner_title', banner_image='$new_file_name' WHERE id='$banner_id'";
                $_SESSION['banner_update_mes'] = "banner update succesfulley";
            } else {
                $sql = "UPDATE banners SET banner_title='$banner_title' WHERE id='$banner_id'";
                $_SESSION['banner_update_mes'] = "banner update succesfulley";
            }
        } else {
         
            if ($new_file_name != "") {
                $sql = "INSERT INTO banners (banner_title, banner_image) VALUES ('$banner_title', '$new_file_name')";
                 $_SESSION['banner_add_mes'] = "banner added successfulley";
            } else {
                $_SESSION['banner_error'] = "Please select an image first!";
                header("Location: ../../dashboard.php");
                exit();
            }
        }

        if (mysqli_query($conn, $sql)) {
            $_SESSION['banner_success'] = "Operation Successful!";
        }
    }

    header("Location: ../../dashboard.php");
    exit();
}