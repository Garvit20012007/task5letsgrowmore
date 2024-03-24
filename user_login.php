<?php
    session_start();
    include('./includes/connection.php');
    if(isset($_POST['userLogin'])){
        $query = "select email,password,name,uid from users where email = '$_POST[email]' AND password = '$_POST[password]'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)){
            while($row = mysqli_fetch_assoc($query_run)){
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['uid'] = $row['uid'];
            }
            echo "<script type='text/javascript'>
            window.location.href = 'user_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Please enter correct detail.');
            window.location.href = 'user_login.php';
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
    <title>TaskSync.|Student Login</title>
    <!-- jQuery file -->
    <script src="includes/jquey-3.7.1.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="txt/css" src="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="./img/ghost-smile-fill.svg">
</head>
<body>
    <div class="row">
        <div class="col-md-3 m-auto" id="admin_home_page">
            <div class="user_heading">
                <center><h3>Student LogIn</h3></center>
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
                    <input type="submit" name="userLogin" value="Login" class="btn btn-warning">
                </div>
            </form>
            <br>
            <br>
            <a href="index.php" class="btn btn-danger">Go to Home</a>
        </div>
    </div>
</body>
</html>