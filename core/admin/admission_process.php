<?php
session_start();
require_once '../../config/db.php'; 

if (isset($_POST['save_admission'])) {

    $id       = mysqli_real_escape_string($conn, $_POST['admission_id']);
    $category = mysqli_real_escape_string($conn, $_POST['admission_category']);
    $info     = mysqli_real_escape_string($conn, $_POST['admission_info']);

    if (!empty($id)) {
        
        $query = "UPDATE admission_details SET category='$category', info_text='$info' WHERE id='$id'";
        $_SESSION["admission_update_info_mes"] = "Admission Info Updated Successfully!";
    } else {

        $query = "INSERT INTO admission_details (category, info_text) VALUES ('$category', '$info')";
        $_SESSION["admission_add_info_mes"] = "New Admission Info Added!";
    }

    if (mysqli_query($conn, $query)) {
    } else {
        $_SESSION['admission_error'] = "Something went wrong: " . mysqli_error($conn);
    }

    header("Location: ../../dashboard.php"); 
    exit();
}
?>