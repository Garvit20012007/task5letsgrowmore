<?php
    include('../includes/connection.php');
    if(isset($_POST['adminLogin'])){
        $query = "select email,password,name from admins where email = '$_POST[email]' AND password = '$_POST[password]'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)){
            echo "<script type='text/javascript'>
            window.location.href = 'admin_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Please enter correct detail.');
            window.location.href = 'admin_login.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskSync.|Staff Login</title>
    <!-- jQuery file -->
    <script src="../includes/jquey-3.7.1.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="txt/css" src="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../img/ghost-smile-fill.svg">
</head>
<body>
    <div class="row">
        <div class="col-md-3 m-auto" id="admin_home_page">
            <div class="user_heading">
                <center><h3>Staff login</h3></center>
            </div>
            <form action="" method="post">
                <!-- email -->
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
                <br>
                <!-- password -->
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="adminLogin" value="Login" class="btn btn-warning">
                </div>
            </form>
            <br>
            <br>
            <a href="../index.php" class="btn btn-danger">Go to Home</a>
        </div>
    </div>
</body>
</html>