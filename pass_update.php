<?php 
session_start();

if (!isset($_SESSION['admin_user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile | SPTI Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./css/admin/login.css">
    <style>

    </style>
</head>

<body class="light-theme">

    <div class="login-box">
        <div class="login-header">
            <h3><i class="fas fa-user-shield"></i> Profile Settings</h3>
            <button id="theme-toggle" type="button" onclick="toggleTheme()">
                <i id="theme-icon" class="fas fa-moon"></i>
            </button>
        </div>

        <div class="login-body">
            <?php if(isset($_SESSION['update_error'])): ?>
            <div class="error-msg">
                <?php echo $_SESSION['update_error']; unset($_SESSION['update_error']); ?>
            </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['update_success'])): ?>
            <div class="success-msg">
                <?php echo $_SESSION['update_success']; unset($_SESSION['update_success']); ?>
            </div>
            <?php endif; ?>

            <form action="./core/admin/pass_update_process.php" method="POST">
                <div class="form-group">
                    <label>New Username:</label>
                    <input type="text" name="update_username" value="<?php echo $_SESSION['admin_user']; ?>" required>
                </div>

                <div class="form-group">
                    <label>New Password:</label>
                    <input type="password" name="update_password" required placeholder="Enter new password">
                </div>

                <div class="form-group">
                    <label>Confirm Password:</label>
                    <input type="password" name="confirm_update_password" required placeholder="Repeat new password">
                </div>

                <div style="text-align: center; display: flex; gap: 10px; justify-content: center;">
                    <button type="submit" name="update_admin_btn" class="login-btn">Update Profile</button>
                    <a href="dashboard.php" class="login-btn"
                        style="background: #6c757d; text-decoration: none; display: inline-block; line-height: 2.5;">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="./js/index.js"></script>
</body>

</html>