<?php
session_start();
require_once '../.././config/db.php';
if (!isset($_SESSION['admin_user'])) {
    header("Location: ../.././login.php");
    exit();
}

if (isset($_POST['save_teacher'])) {

    $id = mysqli_real_escape_string($conn, $_POST['teacher_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $dept = mysqli_real_escape_string($conn, $_POST['teacher_department']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $image_query = ""; 
    if (!empty($_FILES['teacher_image']['name'])) {
        $image_name = $_FILES['teacher_image']['name'];
        $image_tmp = $_FILES['teacher_image']['tmp_name'];
        
     
        $final_image_name = time() . "_" . str_replace(' ', '_', $image_name);
        $upload_path = "../../images/faculty/" . $final_image_name;
        if (!is_dir('../../images/faculty/')) {
            mkdir('../../images/faculty/', 0777, true);
        }

        if (move_uploaded_file($image_tmp, $upload_path)) {
            $image_query = ", teacher_image='$final_image_name'";
      
            if (!empty($id)) {
                $old_img_res = mysqli_query($conn, "SELECT teacher_image FROM teachers WHERE id='$id'");
                $old_img_data = mysqli_fetch_assoc($old_img_res);
                if ($old_img_data['teacher_image'] != 'default.png') {
                    unlink("../.././images/faculty/" . $old_img_data['teacher_image']);
                }
            }
        }
    }

    if (!empty($id)) {
        $sql = "UPDATE teachers SET 
                name='$name', 
                designation='$designation', 
                teacher_department='$dept', 
                phone='$phone', 
                email='$email' 
                $image_query 
                WHERE id='$id'";
        $_SESSION['teacher_success'] = "Teacher updated successfully!";
    } else {
      
        $img_val = isset($final_image_name) ? $final_image_name : 'default.png';
        $sql = "INSERT INTO teachers (name, designation, teacher_department, phone, email, teacher_image) 
                VALUES ('$name', '$designation', '$dept', '$phone', '$email', '$img_val')";
        $_SESSION['teacher_success'] = "New teacher added successfully!";
    }

   
    if (mysqli_query($conn, $sql)) {
        header("Location: ../.././dashboard.php");
        exit();
    } else {
        header("Location: ../.././dashboard.php");
        exit();
    }
}
?>