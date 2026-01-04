<?php
session_start();
require_once "../../config/db.php";

if (isset($_POST['save_dept'])) {
    $dept_id = mysqli_real_escape_string($conn, $_POST['dept_id']);
    $dept_name = mysqli_real_escape_string($conn, $_POST['dept_name']);
    $head_name = mysqli_real_escape_string($conn, $_POST['head_name']);
    $head_email = mysqli_real_escape_string($conn, $_POST['head_email']);
    $head_contact = mysqli_real_escape_string($conn, $_POST['head_contact']);
    $intro_text = mysqli_real_escape_string($conn, $_POST['intro_text']);
    $job_sector = mysqli_real_escape_string($conn, $_POST['job_sector']);
    $exam_system = mysqli_real_escape_string($conn, $_POST['exam_system']);

    $target_dir = "../../images/departments/";
    if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);

    $upload_ok = true;
    $allowed_ext = array("jpg", "jpeg", "png", "webp");
    // 5MB
    $max_size = 5242880; 

   
    $icon_new_name = "";
    $job_icon_new_name = "";
    $exam_icon_new_name = "";
    $head_new_name = "";

   
    $files_to_upload = [
        'dept_icon' => &$icon_new_name,
        'job_icon' => &$job_icon_new_name,
        'exam_icon' => &$exam_icon_new_name,
        'head_image' => &$head_new_name
    ];

    foreach ($files_to_upload as $input_name => &$new_file_name) {
        if (!empty($_FILES[$input_name]['name'])) {
            $file_size = $_FILES[$input_name]['size'];
            $file_ext = strtolower(pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION));

            if ($file_size > $max_size) {
                $_SESSION['dept_error'] = ucfirst($input_name) . " size is too large! Max 5MB.";
                $upload_ok = false;
                break;
            } elseif (!in_array($file_ext, $allowed_ext)) {
                $_SESSION['dept_error'] = "Invalid format for " . ucfirst($input_name);
                $upload_ok = false;
                break;
            } else {
                $new_file_name = $input_name . "_" . time() . "_" . rand(10, 99) . "." . $file_ext;
                move_uploaded_file($_FILES[$input_name]['tmp_name'], $target_dir . $new_file_name);
            }
        }
    }

    if ($upload_ok) {
        if (!empty($dept_id)) {
        
            $img_sql = "";
            if ($icon_new_name != "") $img_sql .= ", dept_icon='$icon_new_name'";
            if ($job_icon_new_name != "") $img_sql .= ", job_icon='$job_icon_new_name'";
            if ($exam_icon_new_name != "") $img_sql .= ", exam_icon='$exam_icon_new_name'";
            if ($head_new_name != "") $img_sql .= ", head_image='$head_new_name'";

            $sql = "UPDATE departments SET 
                    dept_name='$dept_name', head_name='$head_name', head_email='$head_email', 
                    head_contact='$head_contact', intro_text='$intro_text', job_sector='$job_sector', 
                    exam_system='$exam_system' $img_sql 
                    WHERE id='$dept_id'";
            
            $_SESSION['dept_success'] = "Department updated successfully!";
        } else {
            
            $sql = "INSERT INTO departments (dept_name, head_name, head_email, head_contact, intro_text, job_sector, exam_system, dept_icon, job_icon, exam_icon, head_image, status) 
                    VALUES ('$dept_name', '$head_name', '$head_email', '$head_contact', '$intro_text', '$job_sector', '$exam_system', '$icon_new_name', '$job_icon_new_name', '$exam_icon_new_name', '$head_new_name', 1)";
            
            $_SESSION['dept_success'] = "New department added!";
        }

        if (mysqli_query($conn, $sql)) {
          
        } else {
            $_SESSION['dept_error'] = "Error: " . mysqli_error($conn);
        }
    }

    header("Location: ../../dashboard.php");
    exit();
}