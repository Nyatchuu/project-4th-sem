<?php
    require("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="admin-login-form">
        <h2>Admin Login</h2>
        <form method="POST">
            <div class="input-field">
                <i class="bi bi-person-fill"></i>
                <input type="text" placeholder="Username" name="adminName">
            </div>
            <div class="input-field">
                <i class="bi bi-lock-fill"></i>
                <input type="password" placeholder="Password" name="adminPassword">
            </div>
            <button type="submit"name="SignIn">Sign In</button>
            <div class="extra">
                <a href="#">Forgot Password?</a>
                <a href="#">Create an account</a>
            </div>
        </form>
    </div>
    <?php
        if(isset($_POST['SignIn']))
        {
            $query = "SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[adminName]' AND `Admin_Password` = '$_POST[adminPassword]'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result)==1)
            {
                session_start();
                $_SESSION['AdminLoginId']= $_POST['adminName'];
                header("location: admin-panel.php");
            }
            else{
                echo"<script>alert('Incorrect Username or Password')</script>";
            }
        }
    ?>
</body>
</html>