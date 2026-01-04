<?php
session_start();
require_once '../../config/db.php'; 
if (!isset($_SESSION['admin_user'])) {
    header("Location: ../.././login.php");
    exit();
}


if (isset($_POST['save_student'])) {
  
    $id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $name = mysqli_real_escape_string($conn, $_POST['student_name']);
    $roll = mysqli_real_escape_string($conn, $_POST['roll_no']);
    $reg = mysqli_real_escape_string($conn, $_POST['reg_no']);
    $dept = mysqli_real_escape_string($conn, $_POST['student_department']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $session_year = mysqli_real_escape_string($conn, $_POST['session']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $image_sql = "";
    $image_name = "";


    if (!empty($_FILES['student_image']['name'])) {
        $image_name = time() . '_' . $_FILES['student_image']['name'];
        $target = "../../images/students/" . $image_name;

       
        if (!is_dir('../../images/students/')) {
            mkdir('../../images/students/', 0777, true);
        }

        if (move_uploaded_file($_FILES['student_image']['tmp_name'], $target)) {
            $image_sql = ", student_image = '$image_name'";
            
           
            if (!empty($id)) {
                $old_img_query = mysqli_query($conn, "SELECT student_image FROM students WHERE id = '$id'");
                $old_img_data = mysqli_fetch_assoc($old_img_query);
                if (!empty($old_img_data['student_image'])) {
                    @unlink("../../images/students/" . $old_img_data['student_image']);
                }
            }
        }
    }

    if (!empty($id)) {
       
        $query = "UPDATE students SET 
                  student_name = '$name', 
                  roll_no = '$roll', 
                  reg_no = '$reg', 
                  student_department = '$dept', 
                  semester = '$semester', 
                  session = '$session_year', 
                  phone = '$phone', 
                  status = '$status' 
                  $image_sql 
                  WHERE id = '$id'";
        
          $_SESSION['student_success'] = "Student Updated successfully";
    
    } else {
   
        $query = "INSERT INTO students (student_name, roll_no, reg_no, student_department, semester, session, phone, student_image, status) 
        VALUES ('$name', '$roll', '$reg', '$dept', '$semester', '$session_year', '$phone', '$image_name', '$status')";

          $_SESSION['student_success']= "Student added successfully!";
    }

    //  run the qurey
    if (mysqli_query($conn, $query)) {
        header("Location: ../../dashboard.php"); 
        exit();
    } else {
        $_SESSION['student_error'] = "Database Error: " . mysqli_error($conn);
        header("Location: ../../dashboard.php");
        exit();
    }
}
?>