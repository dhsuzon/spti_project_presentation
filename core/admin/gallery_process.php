<?php
session_start();
require_once "../../config/db.php";

if (isset($_POST['save_gallery'])) {
    $gallery_id = mysqli_real_escape_string($conn, $_POST['gallery_id']);
    $gallery_caption = mysqli_real_escape_string($conn, $_POST['gallery_caption']);
    
    $target_dir = "../../images/gallery/";


    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $new_file_name = "";
    $upload_ok = true;


    if (isset($_FILES['gallery_image']['name']) && $_FILES['gallery_image']['name'] != "") {
        $file_size = $_FILES['gallery_image']['size'];
        $file_tmp = $_FILES['gallery_image']['tmp_name'];
        $file_ext = strtolower(pathinfo($_FILES['gallery_image']['name'], PATHINFO_EXTENSION));

        if ($file_size > 5242880) {
            $_SESSION['gallery_upload_error'] = "File is too large! Maximum size is 5MB.";
            $upload_ok = false;
        }

     
        $allowed_ext = array("jpg", "jpeg", "png", "webp");
        if (!in_array($file_ext, $allowed_ext)) {
            $_SESSION['gallery_format_error'] = "Invalid format! Only JPG, PNG & WEBP allowed.";
            $upload_ok = false;
        }

        if ($upload_ok) {
            $new_file_name = "gallery_" . time() . "." . $file_ext;
            move_uploaded_file($file_tmp, $target_dir . $new_file_name);
        }
    }

    if ($upload_ok) {
        if (!empty($gallery_id)) {
         
            if ($new_file_name != "") {
                $res = mysqli_query($conn, "SELECT gallery_image FROM galleries WHERE id = '$gallery_id'");
                $old_data = mysqli_fetch_assoc($res);
                
             
                $old_file = $target_dir . $old_data['gallery_image'];
                if (!empty($old_data['gallery_image']) && is_file($old_file)) {
                    unlink($old_file);
                }
                $sql = "UPDATE galleries SET caption='$gallery_caption', gallery_image='$new_file_name' WHERE id='$gallery_id'";
                $_SESSION['gallery_update_mes'] = "gallery update succesfulley";
            } else {
                $sql = "UPDATE galleries SET caption='$gallery_caption' WHERE id='$gallery_id'";
                $_SESSION['gallery_update_mes'] = "gallery update succesfulley";
            }
        } else {
         
            if ($new_file_name != "") {
                $sql = "INSERT INTO galleries (caption, gallery_image) VALUES ('$gallery_caption', '$new_file_name')";
                 $_SESSION['gallery_add_mes'] = "gallery added successfulley";
            } else {
                $_SESSION['gallery_error'] = "Please select an image first!";
                header("Location: ../../dashboard.php");
                exit();
            }
        }

        if (mysqli_query($conn, $sql)) {
            $_SESSION['gallery_success'] = "Operation Successful!";
        }
    }

    header("Location: ../../dashboard.php");
    exit();
}