<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
        header("location: admin-login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-light">
    
<div class="header container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top ">
    <h1 class="mb-0 h-font">Welcome to  Admin Panel- <?php echo $_SESSION['AdminLoginId']?></h1>
    <form method="POST">
    <button name="Logout">Log Out</button>
    </form>

</div>
<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 text-light">Admin Panel</h4>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
            <ul class="nav nav-pills flex-column">
                
                <li class="nav-item">
                    <a class="nav-link text-white" href="admin-panel.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="settings.php">Settings</a>
                </li>
               
            </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 ml-auto p-4 overflow-hidden">
            lorem2000

        </div>
    </div>
</div>
<?php
    if(isset($_POST['Logout'])){
        session_destroy();
        header("location: admin-login.php");
    }
?>
</body>
</html>