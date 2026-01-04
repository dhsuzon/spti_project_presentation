<?php
session_start();
require_once "../../config/db.php";

if (isset($_POST['save_member'])) {
    $member_id = mysqli_real_escape_string($conn, $_POST['member_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $role = mysqli_real_escape_string($conn, $_POST['member_role']);
    $desig = mysqli_real_escape_string($conn, $_POST['designation']);
    $inst = mysqli_real_escape_string($conn, $_POST['institution']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    
    $target_dir = "../../images/authors/";

   
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $new_file_name = "";
    $upload_ok = true;

    
    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

      
        if ($file_size > 5242880) {
            $_SESSION['member_size_error_mes'] = "File is too large! Maximum size is 5MB.";
            $upload_ok = false;
        }

      
        $allowed_ext = array("jpg", "jpeg", "png", "webp");
        if (!in_array($file_ext, $allowed_ext)) {
            $_SESSION['member_format_error_mes'] = "Invalid format! Only JPG, PNG & WEBP allowed.";
            $upload_ok = false;
        }

        if ($upload_ok) {
            $new_file_name = "member_" . time() . "." . $file_ext;
            move_uploaded_file($file_tmp, $target_dir . $new_file_name);
        }
    }

    if ($upload_ok) {
        if (!empty($member_id)) {
            
            if ($new_file_name != "") {
              
                $res = mysqli_query($conn, "SELECT image_file FROM author_members WHERE id = '$member_id'");
                $old_data = mysqli_fetch_assoc($res);
                $old_file = $target_dir . $old_data['image_file'];
                
                if (!empty($old_data['image_file']) && is_file($old_file)) {
                    unlink($old_file);
                }
                
                $sql = "UPDATE author_members SET name='$name', designation='$desig', institution='$inst', message='$msg', member_role='$role', image_file='$new_file_name' WHERE id='$member_id'";
            } else {
               
                $sql = "UPDATE author_members SET name='$name', designation='$desig', institution='$inst', message='$msg', member_role='$role' WHERE id='$member_id'";
            }
            $_SESSION['author_member_update_mes'] = "Member updated successfully!";
        } else {
          
            if ($new_file_name != "") {
                $sql = "INSERT INTO author_members (name, designation, institution, message, image_file, member_role, status) 
                        VALUES ('$name', '$desig', '$inst', '$msg', '$new_file_name', '$role', 1)";
                $_SESSION['author_member_add_mes'] = "Member added successfully!";
            } else {
                $_SESSION['author_member_error_mes'] = "Please select an image for the new member!";
                header("Location: ../../dashboard.php");
                exit();
            }
        }

        if (mysqli_query($conn, $sql)) {
            
        } else {
            $_SESSION['author_member_error_mes'] = "Database Error: " . mysqli_error($conn);
        }
    }

    header("Location: ../../dashboard.php");
    exit();
}