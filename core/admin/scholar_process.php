<?php
session_start();
require_once '../../config/db.php'; 

if (isset($_POST['save_scholar'])) {

    $id = mysqli_real_escape_string($conn, $_POST['scholar_id']);
    $scholar_title = mysqli_real_escape_string($conn, $_POST['scholar_title']);
    $scholar_des= mysqli_real_escape_string($conn, $_POST['scholar_des']);

    if (!empty($id)) {
        
        $query = "UPDATE scholarships SET scholor_title='$scholar_title', scholor_des='$scholar_des' WHERE id='$id'";
        $_SESSION["scholar_update_mes"] = "scholar Info Updated Successfully!";
    } else {

        $query = "INSERT INTO scholarships (scholor_title, scholor_des) VALUES ('$scholar_title', '$scholar_des')";
        $_SESSION["scholar_add_mes"] = "New scholar Info Added!";
    }

    if (mysqli_query($conn, $query)) {
    } else {
        $_SESSION['scholar_error'] = "Something went wrong: " . mysqli_error($conn);
    }

    header("Location: ../../dashboard.php"); 
    exit();
}
?>