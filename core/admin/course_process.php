<?php
session_start();
require_once "../../config/db.php";

if (isset($_POST['save_action'])) {
    $tech_id = mysqli_real_escape_string($conn, $_POST['tech_id']);
    $dept_id = mysqli_real_escape_string($conn, $_POST['dept_id']);
    $tech_name = mysqli_real_escape_string($conn, $_POST['tech_name']);
    
    $target_dir = "../../images/technology_image/";

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $new_file_name = "";
    $upload_ok = true;

   
    if (isset($_FILES['tech_image']['name']) && $_FILES['tech_image']['name'] != "") {
        $file_size = $_FILES['tech_image']['size'];
        $file_tmp = $_FILES['tech_image']['tmp_name'];
        $file_ext = strtolower(pathinfo($_FILES['tech_image']['name'], PATHINFO_EXTENSION));

      
        if ($file_size > 5242880) {
            $_SESSION['tech_size_error'] = "File is too large! Maximum size is 5MB.";
            $upload_ok = false;
        }

      
        $allowed_ext = array("jpg", "jpeg", "png", "webp");
        if (!in_array($file_ext, $allowed_ext)) {
            $_SESSION['tech__format_error'] = "Invalid format! Only JPG, PNG & WEBP allowed.";
            $upload_ok = false;
        }

        if ($upload_ok) {
            $new_file_name = "course_" . time() . "." . $file_ext;
            move_uploaded_file($file_tmp, $target_dir . $new_file_name);
        }
    }

    if ($upload_ok) {
        if (!empty($tech_id)) {
            if ($new_file_name != "") {
                $res = mysqli_query($conn, "SELECT tech_image FROM courses WHERE id = '$tech_id'");
                $old_data = mysqli_fetch_assoc($res);
                
                $old_file = $target_dir . $old_data['tech_image'];
                if (!empty($old_data['tech_image']) && is_file($old_file)) {
                    unlink($old_file);
                }
                
                $sql = "UPDATE courses SET dept_id='$dept_id', tech_name='$tech_name', tech_image='$new_file_name' WHERE id='$tech_id'";
                $_SESSION['tech_update_mes'] = "Course updated successfully with new image!";
            } else {
                $sql = "UPDATE courses SET dept_id='$dept_id', tech_name='$tech_name' WHERE id='$tech_id'";
                $_SESSION['tech_update_mes'] = "Course information updated successfully!";
            }
        } else {
        
            if ($new_file_name != "") {
                $sql = "INSERT INTO courses (dept_id, tech_name, tech_image) VALUES ('$dept_id', '$tech_name', '$new_file_name')";
                $_SESSION['tech_add_mes'] = "New Course Card added successfully!";
            } else {
                $_SESSION['tech_error'] = "Please select an image to add a new card!";
                header("Location: ../../dashboard.php");
                exit();
            }
        }

        if (mysqli_query($conn, $sql)) {
            $_SESSION['tech_success'] = "Operation Completed!";
        } else {
            $_SESSION['tech_error'] = "Database Error: " . mysqli_error($conn);
        }
    }

    header("Location: ../../dashboard.php");
    exit();
}