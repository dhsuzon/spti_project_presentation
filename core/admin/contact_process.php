<?php
session_start();
require_once "../../config/db.php";

if (isset($_POST['save_settings'])) {
    $id        = mysqli_real_escape_string($conn, $_POST['setting_id']);
    $inst_name = mysqli_real_escape_string($conn, $_POST['inst_name']);
    $address   = mysqli_real_escape_string($conn, $_POST['site_address']);
    $email     = mysqli_real_escape_string($conn, $_POST['site_email']);
    $phone     = mysqli_real_escape_string($conn, $_POST['site_phone']);

    if (empty($id)) {
        
        $sql = "INSERT INTO conttact_us (inst_name, site_address, site_email, site_phone) 
                VALUES ('$inst_name', '$address', '$email', '$phone')";
        $_SESSION['contact_add_success_mes'] = "Institute contact added successfully!";
    } else {
       
        $sql = "UPDATE conttact_us SET 
                inst_name = '$inst_name', 
                site_address = '$address', 
                site_email = '$email', 
                site_phone = '$phone' 
                WHERE id = '$id'";
        $_SESSION['contact_update_success_mes'] = "Information updated successfully!";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../dashboard.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    exit();
}
?>