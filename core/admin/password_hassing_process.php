<?php
require_once '../../config/db.php'; 

$plain_password = 'admin12345'; 


$hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);


$sql = "UPDATE admin_users SET admin_password = '$hashed_password' WHERE username = 'admin'";

if (mysqli_query($conn, $sql)) {
    echo "<h2>your password is encrypted</h2>";
   
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>