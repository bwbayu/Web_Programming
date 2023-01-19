<?php
    session_start();
    if(isset($_SESSION['nim_mhs'])){
        header("location: dashboard.php");
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style/login.css">
</head>

<body>
    <div class="form-container">
        <form action="login_process.php" method="post">
            <h3>login</h3>
            
            <div style="color: red; margin-bottom: 15px;">
                <?php
                    if(isset($_COOKIE["message"])){
                        echo $_COOKIE["message"];
                    }
                ?>
            </div>
            <h6>Use Gived Account</h6>
            <h6>Username: admin Password: admin</h6>
            <h6>Username: 2106836 Password: 2106836</h6>
            <input type="text" name="username" required placeholder="enter your username">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="register.php">register now</a></p>
        </form>
    </div>
</body>

</html>