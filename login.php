<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in | SPTI site admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./css/admin/login.css">

</head>

<body class="light-theme">

    <div class="login-box">
        <div class="login-header">
            <h3>SPTI Administration</h3>
            <button id="theme-toggle" type="button" onclick="toggleTheme()">
                <i id="theme-icon" class="fas fa-moon"></i>
            </button>
        </div>

        <div class="login-body">
            <?php if(isset($_SESSION['login_error'])): ?>
            <div class="error-msg">
                <?php echo $_SESSION['login_error']; 
                    unset($_SESSION['login_error']);
                    ?>
            </div>
            <?php endif; ?>

            <form action="./core/admin/login_process.php" method="POST">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" required placeholder="Enter username">
                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" required placeholder="Enter password">
                </div>

                <div style="text-align: center;">
                    <button type="submit" name="login" class="login-btn">Log in</button>
                </div>
            </form>
        </div>
    </div>

    <script src="./js/index.js"></script>
    </script>
</body>

</html>