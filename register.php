<?php
    include('./includes/connection.php');
    if(isset($_POST['userRegistration'])){
        $query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('User Successfully Register...');
            window.location.href = '/index.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Error...Plz try again.');
            window.location.href = './register.php';
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
    <title>TaskSync.|Student Registration</title>
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
        <div class="col-md-3 m-auto" id="register_home_page">
            <div class="user_heading">
                <center><h3>Student Registraion</h3></center>
            </div>
            <form action="" method="post">
                <!-- name -->
            <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <br>
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
                <!-- mobile -->
                <div class="form-group">
                    <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile No." required>
                </div>
                <br>
                <!-- submit -->
                <div class="form-group">
                    <input type="submit" name="userRegistration" value="Register" class="btn btn-warning">
                </div>
            </form>
            <br>
            <br>
            <a href="index.php" class="btn btn-danger">Go to Home</a>
        </div>
    </div>
</body>
</html>