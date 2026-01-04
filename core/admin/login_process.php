<?php  
session_start();
require_once '../.././config/db.php';

if (isset($_POST['login'])){
   
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
 
  
    $sql = "SELECT * FROM admin_users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
    
        if (password_verify($password, $row['admin_password'])) {
            $_SESSION['admin_user'] = $row['username'];
            $_SESSION['admin_id'] = $row['id'];
            
            session_regenerate_id();
            
            header("Location: ../.././dashboard.php");
            exit();
        } else {
    
            $_SESSION['login_error'] = "Invalid username or password";
            header("Location: ../.././login.php");
            exit();
        }
    } else {
        
        $_SESSION['login_error'] = "Invalid username or password";
        header("Location: ../.././login.php");
        exit();
    }
}
?>


</body>

</html>