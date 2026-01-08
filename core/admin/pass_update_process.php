<?php
session_start();
require_once '../../config/db.php'; 

if (isset($_POST['update_admin_btn'])) {
    
  
    $new_username = mysqli_real_escape_string($conn, $_POST['update_username']);
    $new_password = $_POST['update_password'];
    $confirm_password = $_POST['confirm_update_password'];
    $admin_id = $_SESSION['admin_id']; 

 
    if ($new_password !== $confirm_password) {
        $_SESSION['update_error'] = "password to do not match";
        header("Location: ../../pass_update.php"); 
        exit();
    }


    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $sql = "UPDATE admin_users SET username = '$new_username', admin_password = '$hashed_password' WHERE id = '$admin_id'";

    if (mysqli_query($conn, $sql)) {

        $_SESSION['admin_user'] = $new_username;
         header("Location: ../.././dashboard.php");
         exit(); 
    } else {
        $_SESSION['update_error'] = "password  not updated show error " . mysqli_error($conn);
    }


    header("Location: ../../pass_update.php");
    exit();
} else {
    
    header("Location: ../../login.php");
    exit();
}
?>